<?php 
    include_once('../../config.php');
    $level = lv2;
    include_once($level.'DB.php');
    //del
    if(isset($_GET['del'])){
        $id = $_GET['del'];
        $result = DP::run_query("DELETE FROM `productlist` WHERE productid = ?",[$id],1);
        header('location:'.$level.pages_path.'products.php');
    }
?>