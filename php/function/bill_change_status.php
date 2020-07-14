<?php
    include_once ('../../config.php');
    $level = lv2;
    include_once ($level.'DB.php');
        if(isset($_POST['moving'])){
            foreach($_POST['bill'] as $b){
                $result = DP::run_query("update bill set status = 2 where id = ?",[$b],1);
            }
        }
        else if(isset($_POST['finished'])){
            foreach($_POST['bill'] as $b){
                $result = DP::run_query("update bill set status = 3 where id = ?",[$b],1);
            }
        }
        else if(isset($_POST['canceled'])){
            foreach($_POST['bill'] as $b){
                $result = DP::run_query("update bill set status = 4 where id = ?",[$b],1);
            }
        }
        header('location:'.$level.pages_path.'invoice.php');
?>