<?php
if(!defined('ABSPATH')){
    die();
}
if(!defined('WP_UNINSTALL_PLUGIN')){
    die();
}
if(!function_exists('deactive_plugin_contact')){
    function deactive_plugin_contact(){
        global $wpdb;
        $wpdb->query('DROP TABLE {$wpdb->prefix}contact_form_response');
        $wpdb->query('DROP TABLE {$wpdb->prefix}contact_form');
    }
}
deactive_plugin_contact();
?>