<div class="col-12">
    <form action="<?php echo $level.pages_path.'index.php'?>" method="post" class="tm-login-form">
        <?php 
            //user name
            include_once ($level.php_path.comp_path.'login-username.php');
            //password
            include_once ($level.php_path.comp_path.'login-password.php');
            //submit and forgor password button
            include_once ($level.php_path.comp_path.'login-submit.php');
        ?>  
    </form>
</div>