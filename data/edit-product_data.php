<?php 
    
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $pr = DP::run_query("SELECT * FROM `productlist` WHERE productid = ? ",[$id],2);
        $catagories = DP::run_query("SELECT * FROM `categories`",[],2);
    }
?>