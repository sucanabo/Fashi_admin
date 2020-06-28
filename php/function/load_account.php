<?php 
    include_once('../../config.php');
    $level = lv2;
    include_once($level.'DB.php');
    var_dump($_POST);
    $id = $_POST['id'];
    header("location:".$level.pages_path.'accounts.php?id='.$id);
?>