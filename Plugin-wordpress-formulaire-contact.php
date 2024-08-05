<?php
/*
Plugin Name: Plugin Wordpress Contact Form
Plugin URL: https://bastian-monnin.alwaysdata.net/
Description: Add a contact form on your web site 
Version: 1.0.1
Author: Bastian Monnin
Author URI: https://bastian-monnin.alwaysdata.net/
License: GPL
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: Plugin-wordpress-contact-form
*/
if(!function_exists('active_plugin_contact')){
    function active_plugin_contact(){
        global $wpdb;
        $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}contact_form(
            id int not null auto_increment,
            name varchar(200),
            email varchar(100),
            primary key(id)
        )";
        $wpdb->query($sql);
    }
}
if(!function_exists('deactive_plugin_contact')){
    function deactive_plugin_contact(){

    }
}
register_activation_hook(__FILE__, 'active_plugin_contact');
register_activation_hook(__FILE__, 'deactive_plugin_contact');
?>