<?php
$listAcc = DP::run_query("select * from account",[],2);
if(empty($_GET))
{
    $curAcc = DP::run_query ("select * from account where status =?",[1],2);
    $name = $curAcc[0]["username"];
    $email = $curAcc[0]["email"];
}
else{
    $id= $_GET["id"];
    $curAcc = DP::run_query("select * from account where id = ?",[$id],2);
    $name = $curAcc[0]["username"];
    $email = $curAcc[0]["email"];
}
$allowUpdate = true;
//$account = DP::run_query("SELECT * FROM account",[],2);
?>