<?php 
    $admin = DP::run_query("select * from account where status = ?",[1],2);
?>