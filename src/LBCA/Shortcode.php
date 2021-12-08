<?php

namespace LBCA;

class Shortcode
{
    const CATEGORY_NAME = 'week-sale'; // Change this line replacing 'week-sale' with your category name
    protected $settings_page_properties;

    public function __construct($settings_page_properties)
    {
        $this->settings_page_properties = $settings_page_properties;
        $this->run();
    }

    public function run()
    {
        add_shortcode('lb-cron-att', array($this, 'init'));
    }

    public function init()
    {
        $post = $this->get_latest_post_from_category_name();
        $url = trim($post[0]->post_content);

        if (substr($url, -3, 3) !== 'pdf') {
            return;
        }

        return $url;
    }

    public function get_latest_post_from_category_name()
    {
        $cat_id = get_cat_ID(self::CATEGORY_NAME);
        $args = array(
            'post_type' => 'post',
            'numberposts' => 1,
            'post_status' => 'publish',
            'category' => $cat_id
        );
        $post = get_posts($args);
        return $post;
    }
}
