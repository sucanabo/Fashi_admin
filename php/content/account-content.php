<div class="container mt-5">
    <?php   
        include_once ($level.php_path.comp_path.'account-list.php');
    ?>
    <!-- row -->
    <div class="row tm-content-row">
        <?php 
            //change avatar
            include_once ($level.php_path.comp_path.'account-changeavt.php');
            //account setting
            include_once ($level.php_path.comp_path.'account-setting.php');
        ?>
        
    </div>
</div>