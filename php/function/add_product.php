<?php 
    //add lib
    include_once('../../config.php');
    $level = lv2;
    include_once($level.'DB.php');
//-------------------------------------

    //upload image
    $folder = "products/";
    $targer_dir = $level.img_path.$folder; //thu muc luu anh
    $targer_dir2= $level.'../FashiShop/'.img_path.$folder;
    var_dump($targer_dir2);
    $targer_file = $targer_dir.basename($_FILES['fileupload']['name']);//duong dan luu tam
    $allowUpload = true;
    $imageFileType = pathinfo($targer_file,PATHINFO_EXTENSION);//lay dinh dang file
    $allowTypes = array('jpg','png','jpeg','gif');
    if(isset($_POST['add'])){
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
            if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$targer_file) == true  && move_uploaded_file($_FILES['fileupload']['tmp_name'],$targer_dir2) == true){
                echo "File ".basename($_FILES['fileupload']['name'])."Thanh cong";

            }
            else echo "That bai khi upload file";
        }
    }

    else echo "Khong load duoc file";

//-------------------------------------------------
    //call value
    $name = $_POST['name'];
    $des = $_POST['description'];
    $cate = $_POST['category'];
    $exdate = $_POST['expiredate'];
    $stock = $_POST['stock'];
    $filename = 'products/'.$_FILES['fileupload']['name'];
    //kiem tra co tai anh len hay khong
    if($filename == $folder)
        echo "Ban chua chon anh.";
    $gender = $_POST['gender'];
    if($gender == 1) 
        $gender = "men";
    elseif($gender == 2)
        $gender = "women";
    elseif($gender == 3)
        $gender = "kid";
    else $gender = "unisex";
     $price = $_POST['price'];
     $sale = $_POST['sale'];
        if(isset($sale)) $salebox = true;
        else $salebox = false;
    // Kiem tra san pham trung
    $allName = DP::run_query("SELECT name from product",[],2);
    $checkName = 'TRUE';
    foreach($allName as $c){
        if($c['name'] == $name)
            $checkName  = 'FALSE';
    }
      if($cate != 'Select category' && $checkName != false && $filename != $folder){ 
          $result = DP::run_query ("INSERT INTO `product` (`name`,`description`,`catagory`,`expiredate`, `instock`,`img`,`gender`,`price`,`saleprice`,`salebox`) VALUES (?,?,?,?,?,?,?,?,?,?)",[$name,$des,$cate,$exdate,$stock,$filename,$gender,$price,$sale,$salebox],3);
      }
      //page load
      header('location:'.$level.pages_path.'add-product.php');
?>