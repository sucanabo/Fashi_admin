<div class="container tm-mt-big tm-mb-big">
    <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                    <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Edit Product</h2>
                    </div>
                </div>
                <div class="row tm-edit-product-row">
                    <?php
                        //edit product infomation 
                        include_once ($level.php_path.comp_path.'edit-info.php');
                        include_once ($level.php_path.comp_path.'edit-changeimg.php');
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>