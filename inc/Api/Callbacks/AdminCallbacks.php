<?php


namespace Inc\Api\Callbacks;


use Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{

    public function adminDashboard(){
        return require_once ("$this->plugin_path/templates/admin/admin.php");
    }

    public function adminCpt()
    {
        return require_once( "$this->plugin_path/templates/admin/cpt.php" );
    }

    public function adminTaxonomy()
    {
        return require_once( "$this->plugin_path/templates/admin/taxonomy.php" );
    }

    public function adminWidget()
    {
        return require_once( "$this->plugin_path/templates/admin/widget.php" );
    }

    public function adminTemplates()
    {
        return require_once( "$this->plugin_path/templates/admin/templates.php" );

    }
    public function adminGallery()
    {
        return require_once( "$this->plugin_path/templates/admin/gallery.php" );

    }
    public function adminTestimonials()
    {
        return require_once( "$this->plugin_path/templates/admin/testimonials.php" );

    }
    public function adminLogin()
    {
        return require_once( "$this->plugin_path/templates/admin/login.php" );

    }

    public function adminMembership()
    {
        return require_once( "$this->plugin_path/templates/admin/membership.php" );

    }


}