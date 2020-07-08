<div class="container mt-5">
    <?php include_once($level.php_path.comp_path.'product-filter.php'); ?>
    <div class="row tm-content-row">
        <?php 
        
            //product list
            include_once ($level.php_path.comp_path.'products-list.php');
            //product categories
            include_once ($level.php_path.comp_path.'products-categories.php');
        ?>      
    </div>
</div>
