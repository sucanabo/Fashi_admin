<?php 
    $catagories = DP::run_query("SELECT * from categories",[],2);
    $productlist = DP::run_query("SELECT * FROM productlist",[],2);
?>