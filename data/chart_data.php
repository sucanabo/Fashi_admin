<?php 
    $listStore = DP::run_query("SELECT SUM(instock) as tInstock, SUM(unitsold) as tSold FROM `product`",[],2);
?>