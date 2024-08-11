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
            date_send date,
            primary key(id)
        )";
        $wpdb->query($sql);
        $wpdb->query("ALTER TABLE {$wpdb->prefix}contact_form add index(`name`);");
        $wpdb->query("ALTER TABLE {$wpdb->prefix}contact_form add index(`email`);");
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}contact_form_response(
            id int not null auto_increment,
            id_contact_form int,
            name varchar(200) not null,
            email varchar(100) not null,
            phone varchar(255) not null,
            message_response text not null,
            date_send date,
            primary key(id)
        );");
        $wpdb->query("ALTER TABLE {$wpdb->prefix}contact_form_response ADD CONTRAINT fk_id_contact_form (id_contact_form) references {$wpdb->prefix}contact_form ;");
        $wpdb->query("ALTER TABLE {$wpdb->prefix}contact_form_response add index(`name`);");
        $wpdb->query("ALTER TABLE {$wpdb->prefix}contact_form_response add index(`email`);");
        $wpdb->query("ALTER TABLE {$wpdb->prefix}contact_form_response add index(`phone`);");
        $wpdb->query("ALTER TABLE {$wpdb->prefix}contact_form_response add index(`message_response`);");
    }
}
if(!function_exists('deactive_plugin_contact')){
    function deactive_plugin_contact(){

    }
}
register_activation_hook(__FILE__, 'active_plugin_contact');
register_activation_hook(__FILE__, 'deactive_plugin_contact');
?>