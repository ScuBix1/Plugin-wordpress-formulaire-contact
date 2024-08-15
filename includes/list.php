<?php
if(!defined('ABSPATH')){
    die();
}
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
                </table>
            </div>
        </div>
    </div>
</div>