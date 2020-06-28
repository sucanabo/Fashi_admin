<?php 
    include_once ("../../config.php");
    $level = lv2;
    include_once ($level.'DB.php');
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $pass1 =$_POST['password'];
    $pass2 =$_POST['password2'];

    //-------------------------------------

    //upload image
    $folder = "account/";
    $targer_dir = $level.img_path.$folder; //thu muc luu anh
    $targer_file = $targer_dir.basename($_FILES['fileupload']['name']);//duong dan luu tam
    $allowUpload = true;
    $imageFileType = pathinfo($targer_file,PATHINFO_EXTENSION);//lay dinh dang file
    $allowTypes = array('jpg','png','jpeg','gif');
    if(isset($_POST['update'])){
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
    }

    else echo "Can't upload file.";

//-------------------------------------------------
$filename = $_FILES['fileupload']['name'];
//kiem tra co tai anh len hay khong
if($filename == $folder)
    echo "You not selected imgage yet.";
function checkEmpty (){
    $null = 0;
    foreach($_POST as $a){
        if(empty($a))
            $null++;
    }
    echo "null: ".$null;
    if($null <= 1) return true;
    else return false;
}
$check = checkEmpty();
if( $check == false){
    header("location:".$level.pages_path.'accounts.php');
}
else
{
    $id = DP::run_query("select id from account where username = ?",[$name],2);
    if(isset($_POST['update'])){
        echo "update";
        if($pass1 == $pass2){
            $result = DP::run_query ("UPDATE account SET `email` = ?, `password` = ?, `img` = ? WHERE `id` = ?",[$mail,$pass1,$filename,$id[0]['id']],3);
            header("location:".$level.'index.php');
        }
        else
        {
            header("location:".$level.pages_path.'accounts.php');   
        }
        
    }
    if(isset($_POST['delete'])){
        echo "delete";
        $result = DP::run_query("delete from account where id = ?",[$id[0]['id']],3);
        header("location:".$level.pages_path.'login.php');
    }
}
    
?>