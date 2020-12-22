<?php

class EIC_admin extends EIC_setting {

    public static function Init() {
        add_action('admin_menu', array(__CLASS__, 'eic_register_options_page'));
       
    }
    
    
    
    public static function eic_register_options_page() {
        add_options_page('Easy Insert Code', 'Easy Insert Code', 'manage_options', 'easy-insert-code', array(__CLASS__,'eic_option_page'));
    }

    public static function eic_option_page() {

      include_once EIC_PATH . "/views/eic-view.php";
    }

}
