<?php
    include_once('../../config.php');
    $level = lv2;
    include_once($level.'DB.php');
    $name = $_POST['name'];
    $result = DP::run_query("INSERT INTO catagory(name) values(?)",[$name],3);
    header('location:'.$level.pages_path.'products.php');
?>