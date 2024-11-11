<?php
class ControllerExtensionModulePsLiveSearch extends Controller
{
    public function autocomplete()
    {
        $json = array(
            'products' => array(
                'status' => (bool) $this->config->get('module_ps_live_search_product_status'),
                'data' => array()
            )
        );

        if (isset($this->request->get['search'])) {
            $search = $this->request->get['search'];
        } else {
            $search = '';
        }

        $this->load->model('extension/module/ps_live_search');
        $this->load->model('tool/image');

        if ($this->config->get('module_ps_live_search_product_status')) {
            $productResults = $this->model_extension_module_ps_live_search->getProducts($search);

            foreach ($productResults as $productResult) {
                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $price = $this->currency->format($this->tax->calculate($productResult['price'], $productResult['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $price = false;
                }

                if ((float) $productResult['special']) {
                    $special = $this->currency->format($this->tax->calculate($productResult['special'], $productResult['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $special = false;
                }

                if ($this->config->get('config_tax')) {
                    $tax = $this->currency->format((float) $productResult['special'] ? $productResult['special'] : $productResult['price'], $this->session->data['currency']);
                } else {
                    $tax = false;
                }

                if ($this->config->get('module_ps_live_search_product_image') && is_file(DIR_IMAGE . html_entity_decode($productResult['image'], ENT_QUOTES, 'UTF-8'))) {
                    $thumb = $this->model_tool_image->resize(html_entity_decode($productResult['image'], ENT_QUOTES, 'UTF-8'), $this->config->get('module_ps_live_search_product_image_width'), $this->config->get('module_ps_live_search_product_image_height'));
                } else {
                    $thumb = '';
                }

                if ($this->config->get('module_ps_live_search_product_description') && $this->config->get('module_ps_live_search_product_description_length') > 0) {
                    $description = utf8_substr(trim(strip_tags(html_entity_decode($productResult['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('module_ps_live_search_product_description_length')) . '..';
                } else {
                    $description = '';
                }

                $json['products']['data'][] = array(
                    'href' => str_replace('&amp;', '&', $this->url->link('product/product', 'product_id=' . $productResult['product_id'])),
                    'name' => strip_tags($productResult['name']),
                    'description' => $description,
                    'price' => $price,
                    'special' => $special,
                    'tax' => $tax,
                    'thumb' => $thumb,
                    'thumb_width' => $this->config->get('module_ps_live_search_product_image_width'),
                    'thumb_height' => $this->config->get('module_ps_live_search_product_image_height'),
                );
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json, JSON_UNESCAPED_SLASHES));
    }
}
