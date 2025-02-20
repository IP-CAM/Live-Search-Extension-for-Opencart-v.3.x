<?php
class ModelExtensionModulePsLiveSearch extends Model
{
    /**
     * @param string $search
     *
     * @return array
     */
    public function getProducts(string $search): array
    {
        $sql = "SELECT
            p.`product_id`,
            p.`image`,
            p.`tax_class_id`,
            pd.`name`,
            pd.`description`,
            p.`price`,
            (SELECT ps.`price` FROM `" . DB_PREFIX . "product_special` ps WHERE ps.`product_id` = `p`.`product_id` AND ps.`customer_group_id` = '" . (int) $this->config->get('config_customer_group_id') . "' AND ((ps.`date_start` = '0000-00-00' OR ps.`date_start` < NOW()) AND (ps.`date_end` = '0000-00-00' OR ps.`date_end` > NOW())) ORDER BY ps.`priority` ASC, ps.`price` ASC LIMIT 1) AS `special`
        FROM `" . DB_PREFIX . "product` p
        LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (p.`product_id` = pd.`product_id`)
        LEFT JOIN `" . DB_PREFIX . "product_to_store` `p2s` ON (`p2s`.`product_id` = p.`product_id`)
        WHERE pd.`language_id` = '" . (int) $this->config->get('config_language_id') . "' AND `p2s`.`store_id` = '" . (int) $this->config->get('config_store_id') . "' AND p.`status` = '1'";

        $query = array();

        $words = explode(' ', trim(preg_replace('/\s+/', ' ', $search)));

        $words = array_filter($words);

        foreach ($words as $word) {
            if (utf8_strlen($word) < 2) {
                continue;
            }

            $query[] = "`pd`.`name` LIKE '" . $this->db->escape('%' . $word . '%') . "'";

            $query[] = "pd.`tag` LIKE '" . $this->db->escape('%' . $word . '%') . "'";
        }

        $query[] = "pd.`tag` LIKE '" . $this->db->escape('%' . $search . '%') . "'";
        $query[] = "LCASE(`p`.`model`) = '" . $this->db->escape(utf8_strtolower($search)) . "'";
        $query[] = "LCASE(`p`.`sku`) = '" . $this->db->escape(utf8_strtolower($search)) . "'";
        $query[] = "LCASE(`p`.`upc`) = '" . $this->db->escape(utf8_strtolower($search)) . "'";
        $query[] = "LCASE(`p`.`ean`) = '" . $this->db->escape(utf8_strtolower($search)) . "'";
        $query[] = "LCASE(`p`.`jan`) = '" . $this->db->escape(utf8_strtolower($search)) . "'";
        $query[] = "LCASE(`p`.`isbn`) = '" . $this->db->escape(utf8_strtolower($search)) . "'";
        $query[] = "LCASE(`p`.`mpn`) = '" . $this->db->escape(utf8_strtolower($search)) . "'";

        $sql .= " AND (" . implode(" OR ", $query) . ")";

        $sql .= " ORDER BY p.`sort_order` ASC, LCASE(`pd`.`name`) ASC LIMIT 0,5";

        $query = $this->db->query($sql);

        return $query->rows;
    }
}
