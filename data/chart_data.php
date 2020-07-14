<?php 
    $listStore = DP::run_query("SELECT SUM(instock) as tInstock, SUM(unitsold) as tSold FROM `product`",[],2);
    $listPer = DP::run_query("SELECT name,unitsold FROM product order by unitsold    desc limit 0,7",[],2);
?>