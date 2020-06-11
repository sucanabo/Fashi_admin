<?php 
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $epr = DP::run_query("SELECT * FROM `productlist` WHERE productid = ?",[$id],2);
        $cate = DP::run_query("SELECT * FROM `categories`",[],2);
    }
?>