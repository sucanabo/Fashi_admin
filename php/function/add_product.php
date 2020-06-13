<?php 
    //add lib
    include_once('../../config.php');
    $level = lv2;
    include_once($level.'DB.php');
//-------------------------------------

    //upload image
    $targer_dir = $level.img_path."products/"; //thu muc luu anh
    $targer_file = $targer_dir.basename($_FILES['fileupload']['name']);//duong dan luu tam
    $allowUpload = true;
    $imageFileType = pathinfo($targer_file,PATHINFO_EXTENSION);//lay dinh dang file
    $allowTypes = array('jpg','png','jpeg','gif');

    var_dump($_POST);
    var_dump($_FILES);
    if(isset($_POST["submit"])){
        //check anh
        $checkimg = getimagesize($_FILES['fileupload']['tmp_name']);
        if($checkimg !== false){
            echo "Day la anh".$checkimg["mime"].".";
            $allowUpload = true;
        }
        else{
            echo "Khong phai la anh.";
            $allowUpload = false;
        }
        //khong cho ghi de
        if(file_exists($targer_file)){
            echo "File da ton tai";
            $allowUpload = false;
        }
        //kiem tra kieu file
        if(!in_array($imageFileType,$allowTypes)){
            echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
            $allowUpload = false;
        }
        //Check AllowUpload
        if($allowUpload){
            if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$targer_file)){
                echo "File ".basename($_FILES['fileupload']['name'])."Thanh cong";

            }
            else echo "That bai khi upload file";
        }
        else echo "Khong load duoc file";
    }
//-------------------------------------------------
    //call value
    $name = $_POST['name'];
    $des = $_POST['description'];
    $cate = $_POST['category'];
    $exdate = $_POST['expiredate'];
    $stock = $_POST['stock'];
    $filename = 'products/'.$_FILES['fileupload']['name'];
    var_dump($filename);
    //addz
    if($cate != 'Select category'){ 
        $result = DP::run_query ("INSERT INTO `productlist` (`productname`,`description`,`categories`,`expiredate`, `instock`,`img`) VALUES (?,?,?,?,?,?)",[$name,$des,$cate,$exdate,$stock,$filename],3);
    }
    //page load
    header('location:'.$level.pages_path.'add-product.php');
   
?>