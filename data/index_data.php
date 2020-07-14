<?php 
    $notification = DP::run_query ("SELECT * FROM `notification`",[],2);
    $order = DP::run_query ("SELECT * FROM `bill` ORDER by id DESC",[],2);
    include_once ($level.data_path.'chart_data.php');
?>