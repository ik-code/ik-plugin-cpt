<?php


namespace Inc\Base;


use Inc\Api\SettingsApi;
use Inc\Base\BaseController;
use Inc\Api\Callbacks\AdminCallbacks;


class TemplatesController extends BaseController
{
    public $callbacks;

    public $subpages = array();

    public function register()
    {

        if ( !$this->activated('templates_manager') ) return;

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
                'page_title' => 'Templates',
                'menu_title' => 'Templates Manager',
                'capability' => 'manage_options',
                'menu_slug' => 'ik_templates',
                'callback' => array($this->callbacks, 'adminTemplates')
            )
        );
    }

    public function activate()
    {

    }

}