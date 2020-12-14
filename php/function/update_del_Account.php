<?php 
    include_once ("../../config.php");
    $level = lv2;
    include_once ($level.'DB.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['password2'];
    $type = $_POST['type'];
    $active = $_POST['active'];
    echo ('vardumpne: ');
    var_dump($_POST);
    //-------------------------------------
//upload image
$folder = "account/";
$targer_dir = $level.img_path.$folder; //thu muc luu anh
$targer_file = $targer_dir.basename($_FILES['fileupload']['name']);//duong dan luu tam
$allowUpload = true;
$imageFileType = pathinfo($targer_file,PATHINFO_EXTENSION);//lay dinh dang file
$allowTypes = array('jpg','png','jpeg','gif');
    //check anh
    $checkimg = getimagesize($_FILES['fileupload']['tmp_name']);
    if($checkimg !== false){
        echo "This is an image".$checkimg["mime"].".";
        $allowUpload = true;
    }
    else{
        echo "Not an image.";
        $allowUpload = false;
    }
    //khong cho ghi de
    if(file_exists($targer_file)){
        echo "File already exsisted.";
        $allowUpload = false;
    }
    //kiem tra kieu file
    if(!in_array($imageFileType,$allowTypes)){
        echo "You can upload only extention file JPG, PNG, JPEG, GIF";
        $allowUpload = false;
    }
    //Check AllowUpload
    if($allowUpload){
        if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$targer_file)){
            echo "File ".basename($_FILES['fileupload']['name'])." upload succeed.";

        }
        else 
        {
            echo "Upload Failed!";
            $allowUpload = false;
        }
    }
//-------------------------------------------------
if(isset($_POST['update'])){
    $filename = $_FILES['fileupload']['name'];
    //kiem tra co tai anh len hay khong
    if($filename == $folder)
        echo "You not selected imgage yet.";


    if(isset($_POST['update'])){
        if($pass1 == $pass2 && isset($_FILES)){
            $result = DP::run_query ("UPDATE account SET `name` = ?,`email` = ?, `password` = ?, `img` = ?,`type` = ?, `active` = ? WHERE `id` = ?",[$name,$mail,$pass1,$filename,$type,$active,$id],3);
            //header("location:".$level.'index.php');
        }
        else if($pass1 == $pass2 && !isset($_FILES)){
            $result = DP::run_query ("UPDATE account SET `name` = ?,`email` = ?, `password` = ?,`type` = ?, `active` = ? WHERE `id` = ?",[$name,$mail,$pass1,$type,$active,$id],3);
        }
        else
        {
            echo 'wrong password';
            //header("location:".$level.pages_path.'accounts.php');   
        }
        
    }
}

if(isset($_POST['delete'])){
    $result = DP::run_query("DELETE FROM account where id = ?",[$id],3);
    header("location:".$level.pages_path.'accounts.php');
}   
?>