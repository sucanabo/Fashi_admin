<?php 
    //add lib
    include_once ('../../config.php');
    $level = lv2;
    include_once ($level.'DB.php');
    if(isset($_POST['edit'])){
        //call values
        $id = $_POST['id'];
        $name = $_POST['name'];
        $des = $_POST['description'];
        $cate = $_POST['category'];
        $exdate =$_POST['expire_date'];
        $stock = $_POST['stock'];
        $img = 'products/'.$_FILES['fileupload']['name'];
        var_dump($img);
         //update
        $result = DP::run_query ("UPDATE productlist set productname =?,`description` =?,`categories`=?,`expiredate`=?,`instock`=?, `img`= ? WHERE `productid` = $id",[$name,$des,$cate,$exdate,$stock,$img],1);
        //page load
        header('location:'.$level.pages_path.'products.php');
        
    }
?>