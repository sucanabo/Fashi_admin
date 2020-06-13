<?php 
    $notification = DP::run_query ("SELECT * FROM `notification`",[],2);
    $order = DP::run_query ("SELECT * FROM `orderinfo` ORDER by orderid DESC",[],2);
?>