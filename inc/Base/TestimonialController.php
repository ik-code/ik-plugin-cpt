<?php


namespace Inc\Base;

use Inc\Api\SettingsApi;
use Inc\Base\BaseController;
use Inc\Api\Callbacks\AdminCallbacks;


class TestimonialController extends BaseController
{
    public $callbacks;

    public $subpages = array();

    public function register()
    {

        if ( !$this->activated('testimonial_manager') ) return;

        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();

        $this->setSubpages();

        $this->settings->addSubPages($this->subpages)->register();

        add_action('init', array($this, 'activate'));
    }

    public function setSubpages()
    {
        $this->subpages = array(
            array(
                'parent_slug' => 'ik_plugin',
                'page_title' => 'Testimonials',
                'menu_title' => 'Testimonials Manager',
                'capability' => 'manage_options',
                'menu_slug' => 'ik_testimonials',
                'callback' => array($this->callbacks, 'adminTestimonials')
            )
        );
    }

    public function activate()
    {
    }

}