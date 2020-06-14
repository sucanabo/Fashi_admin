<?php 
    $catagory = DP::run_query("SELECT * from catagory",[],2);
    var_dump($catagory);
    $productlist = DP::run_query("SELECT * FROM product",[],2);
?>