<?php
class ControllerExtensionModulePsLiveSearch extends Controller
{
    /**
     * @var string The support email address.
     */
    const EXTENSION_EMAIL = 'support@playfulsparkle.com';

    /**
     * @var string The documentation URL for the extension.
     */
    const EXTENSION_DOC = 'https://github.com/playfulsparkle/oc3_live_search.git';

    private $error = array();

    public function index()
    {
        $this->load->language('extension/module/ps_live_search');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_ps_live_search', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['input_delay'])) {
            $data['error_input_delay'] = $this->error['input_delay'];
        } else {
            $data['error_input_delay'] = '';
        }

        if (isset($this->error['input_min_chars'])) {
            $data['error_input_min_chars'] = $this->error['input_min_chars'];
        } else {
            $data['error_input_min_chars'] = '';
        }

        if (isset($this->error['product_description_length'])) {
            $data['error_product_description_length'] = $this->error['product_description_length'];
        } else {
            $data['error_product_description_length'] = '';
        }

        if (isset($this->error['product_image_width'])) {
            $data['error_product_image_width'] = $this->error['product_image_width'];
        } else {
            $data['error_product_image_width'] = '';
        }

        if (isset($this->error['product_image_height'])) {
            $data['error_product_image_height'] = $this->error['product_image_height'];
        } else {
            $data['error_product_image_height'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/ps_live_search', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/module/ps_live_search', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->post['module_ps_live_search_status'])) {
            $data['module_ps_live_search_status'] = (bool) $this->request->post['module_ps_live_search_status'];
        } else {
            $data['module_ps_live_search_status'] = (bool) $this->config->get('module_ps_live_search_status');
        }

        if (isset($this->request->post['module_ps_live_search_input_delay'])) {
            $data['module_ps_live_search_input_delay'] = (int) $this->request->post['module_ps_live_search_input_delay'];
        } else {
            $data['module_ps_live_search_input_delay'] = (int) $this->config->get('module_ps_live_search_input_delay');
        }

        if (isset($this->request->post['module_ps_live_search_input_min_chars'])) {
            $data['module_ps_live_search_input_min_chars'] = (int) $this->request->post['module_ps_live_search_input_min_chars'];
        } else {
            $data['module_ps_live_search_input_min_chars'] = (int) $this->config->get('module_ps_live_search_input_min_chars');
        }

        if (isset($this->request->post['module_ps_live_search_product_status'])) {
            $data['module_ps_live_search_product_status'] = (bool) $this->request->post['module_ps_live_search_product_status'];
        } else {
            $data['module_ps_live_search_product_status'] = (bool) $this->config->get('module_ps_live_search_product_status');
        }

        if (isset($this->request->post['module_ps_live_search_product_description'])) {
            $data['module_ps_live_search_product_description'] = $this->request->post['module_ps_live_search_product_description'];
        } else {
            $data['module_ps_live_search_product_description'] = $this->config->get('module_ps_live_search_product_description');
        }

        if (isset($this->request->post['module_ps_live_search_product_description_length'])) {
            $data['module_ps_live_search_product_description_length'] = (int) $this->request->post['module_ps_live_search_product_description_length'];
        } else {
            $data['module_ps_live_search_product_description_length'] = (int) $this->config->get('module_ps_live_search_product_description_length');
        }

        if (isset($this->request->post['module_ps_live_search_product_image'])) {
            $data['module_ps_live_search_product_image'] = (bool) $this->request->post['module_ps_live_search_product_image'];
        } else {
            $data['module_ps_live_search_product_image'] = (bool) $this->config->get('module_ps_live_search_product_image');
        }

        if (isset($this->request->post['module_ps_live_search_product_image_width'])) {
            $data['module_ps_live_search_product_image_width'] = (int) $this->request->post['module_ps_live_search_product_image_width'];
        } else {
            $data['module_ps_live_search_product_image_width'] = (int) $this->config->get('module_ps_live_search_product_image_width');
        }

        if (isset($this->request->post['module_ps_live_search_product_image_height'])) {
            $data['module_ps_live_search_product_image_height'] = (int) $this->request->post['module_ps_live_search_product_image_height'];
        } else {
            $data['module_ps_live_search_product_image_height'] = (int) $this->config->get('module_ps_live_search_product_image_height');
        }

        if (isset($this->request->post['module_ps_live_search_product_price'])) {
            $data['module_ps_live_search_product_price'] = (bool) $this->request->post['module_ps_live_search_product_price'];
        } else {
            $data['module_ps_live_search_product_price'] = (bool) $this->config->get('module_ps_live_search_product_price');
        }

        $data['text_contact'] = sprintf($this->language->get('text_contact'), self::EXTENSION_EMAIL, self::EXTENSION_EMAIL, self::EXTENSION_DOC);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/ps_live_search', $data));
    }

    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/module/ps_live_search')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->error) {
            if ((int) $this->request->post['module_ps_live_search_input_delay'] < 100) {
                $this->error['input_delay'] = $this->language->get('error_input_delay_min');
            }

            if ((int) $this->request->post['module_ps_live_search_input_min_chars'] < 1) {
                $this->error['input_min_chars'] = $this->language->get('error_input_min_chars');
            }

            if ((int) $this->request->post['module_ps_live_search_product_description_length'] < 0) {
                $this->error['product_description_length'] = $this->language->get('error_product_description_length_min');
            } else if ((int) $this->request->post['module_ps_live_search_product_description_length'] > 200) {
                $this->error['product_description_length'] = $this->language->get('error_product_description_length_max');
            }

            if ((int) $this->request->post['module_ps_live_search_product_image_width'] < 16) {
                $this->error['product_image_width'] = $this->language->get('error_product_image_width_min');
            } else if ((int) $this->request->post['module_ps_live_search_product_image_width'] > 128) {
                $this->error['product_image_width'] = $this->language->get('error_product_image_width_max');
            }

            if ((int) $this->request->post['module_ps_live_search_product_image_height'] < 16) {
                $this->error['product_image_height'] = $this->language->get('error_product_image_height_min');
            } else if ((int) $this->request->post['module_ps_live_search_product_image_height'] > 128) {
                $this->error['product_image_height'] = $this->language->get('error_product_image_height_max');
            }
        }

        return !$this->error;
    }

    public function install()
    {
        $this->load->model('setting/setting');

        $data = array(
            'module_ps_live_search_input_delay' => 100,
            'module_ps_live_search_input_min_chars' => 1,
            'module_ps_live_search_product_status' => 1,
            'module_ps_live_search_product_description' => 1,
            'module_ps_live_search_product_description_length' => 100,
            'module_ps_live_search_product_image' => 1,
            'module_ps_live_search_product_image_width' => 64,
            'module_ps_live_search_product_image_height' => 64,
            'module_ps_live_search_product_price' => 1,
        );

        $this->model_setting_setting->editSetting('module_ps_live_search', $data);
    }

    public function uninstall()
    {

    }
}
