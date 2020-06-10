<?php 
    include_once('../../config.php');
    $level = lv2;
    include_once($level.'DB.php');

 
    $name = $_POST['name'];
    $des = $_POST['description'];
    $cate = $_POST['category'];
    $exdate = $_POST['expiredate'];
    $stock = $_POST['stock'];
    if($cate != 'Select category'){ 
        $result = DP::run_query ("INSERT INTO `productlist` (`productname`,`description`,`categories`,`expriredate`, `instock`) VALUES (?,?,?,?,?)",[$name,$des,$cate,$exdate,$stock],3);
    }
    header('location:'.$level.pages_path.'add-product.php');
   
?>