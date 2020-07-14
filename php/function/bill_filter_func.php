<?php
    $ID = $_GET['id'];
    $STATUS = $_GET['status'];
    $PHONE = $_GET['phone'];
    $TOTAL = $_GET['total'];
    $DATE = $_GET['date'];
    $isBefore = false;
    if($ID==null){
        $nID = '';
        $isBefore = false;
    }
    else {
        $nID = 'id = '.$ID;
        $isBefore = true;
    }
    if($STATUS==0){
        $nSTATUS = '';
    }
    else{
        if($isBefore==true){
            $nSTATUS = 'and status = '.$STATUS;
        }
        else {
            $nSTATUS = 'status = '.$STATUS;
        }
        $isBefore = true;
    }
    if($PHONE==null){
        $nPHONE = '';
    }
    else{
        if($isBefore){
            $nPHONE = 'and phone = '.$PHONE;
        }
        else {
            $nPHONE = 'phone = '.$PHONE;
        }
        $isBefore = true;
    }
    if($TOTAL==null){
        $nTOTAL = '';
    }
    else{
        if($isBefore){
            $nTOTAL = 'and total = '.$TOTAL;
        }
        else {
            $nTOTAL = 'total = '.$TOTAL;
        }
        $isBefore = true;
    }
    if($DATE==null){
        $nDATE = '';
    }
    else{
        if($isBefore){
            $nDATE = 'and datef = '.$DATE;
        }
        else {
            $nDATE = "datef = '".$DATE."'";
        }
        $isBefore = true;
    }
    if($ID == null && $STATUS == 0 && $PHONE == null && $TOTAL == null && $DATE == null)
    {
        $script = "Nothing to filter";
        $result = DP::run_query("SELECT * FROM `bill` WHERE id = 0",[],2);
    }
    else{
        $result = DP::run_query("SELECT * FROM `bill` WHERE $nID $nSTATUS $nPHONE $nTOTAL $nDATE",[],2);
        $script = "";
        if($result==null){
            $script = "We don't have any invoice like that.";
        }
    }
?>