<?php


namespace Inc\Base;

use Inc\Api\SettingsApi;
use Inc\Base\BaseController;
use Inc\Api\Callbacks\AdminCallbacks;


class MediaWidgetController extends BaseController
{
    public $callbacks;

    public $subpages = array();

    public function register()
    {

        if ( !$this->activated('media_widget') ) return;

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
                'page_title' => 'Custom Widgets',
                'menu_title' => 'Widgets Manager',
                'capability' => 'manage_options',
                'menu_slug' => 'ik_widgets',
                'callback' => array($this->callbacks, 'adminWidget')
            )
        );
    }

    public function activate()
    {

    }

}