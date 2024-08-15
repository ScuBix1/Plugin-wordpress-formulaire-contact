<?php
if(!defined('ABSPATH')){
    die();
}
global $wpdb;
$table = "{$wpdb->prefix}contact_form";
$table2 = "{$wpdb->prefix}contact_form_response";
$datas = $wpdb->get_results("SELECT * FROM {$table}");
?>
<div class="wrap">
    <div class="container-fluid">
        <div class="row">
            <h1 class="wp-heading-inline"><?php echo( get_admin_page_title() );?></h1>
            <p class="d-flex justify-content-end">
                <a href="" class="btn btn-primary"> <i class="fas fa-plus"></i> Créer</a>
            </p>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>E-mail</th>
                            <th>Shortcode</th>
                            <th>Réponse</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($datas as $data){
                        ?>
                            <tr>
                                <td><?php echo($data->id); ?></td>
                                <td><?php echo($data->name); ?></td>
                                <td><?php echo($data->email); ?></td>
                                <td class="text-center">[plugin_contact id= <?php echo($data->id); ?>]</td>
                                <td class="text-center"><a href=""><i class="fas fa-search"></i></a></td>
                                <td class="text-center"><a href="" class="d-flex justify-content-around"><i class="fas fa-edit"></i><i class="fas fa-trash"></i></a></td>
                            </tr>
                        <?php    
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>