<!DOCTYPE html>
<html lang="en">

<?php   
    include_once ($level.php_path.'head.php');
?>

<body id="reportsPage">
    <div class="" id="home">
        <?php 
            //Nav Bar
            include_once ($level.php_path.'navbar.php');
            if($page_index == true){
                include_once ($level.php_path.content_path.'index-content.php');
            }
        ?>
        
        <?php include_once ($level.php_path.'footer.php')?>
    </div>

    <!-- script -->
    <?php include_once ($level.php_path.'script.php')?>
</body>

</html>