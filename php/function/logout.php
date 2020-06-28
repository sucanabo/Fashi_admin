<?php 
    //add lib
    include_once ('../../config.php');
    $level = lv2;
    include_once ($level.'DB.php');
    $currAcc = DP::run_query("select * from account where status =?",[1],2);
    $id = $currAcc[0]['id'];
    //update status
    $result = DP::run_query("update account set status = ? where id = ?",[0,$id],3);
    //page laod
    header("location:".$level.pages_path.'login.php');
?>