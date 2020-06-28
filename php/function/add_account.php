<?php 
    //add lib
    include_once('../../config.php');
    $level = lv2;
    include_once($level.'DB.php');
    //--------------------------------
     //call value
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cfpass = $_POST['cfpassword'];
    $type = $_POST['type'];
    $active = $_POST['active'];
    //Check account already
    $allAcc = DP::run_query("select * from account",[],2);
    $checkAcc = true;
    foreach($allAcc as $c){
        if($c['username'] == $username || $c['email'] == $email || ($pass == $cfpass) == false)
            $checkAcc  = false;
    }
    var_dump($checkAcc);
//-------------------------------------

    //upload image
    $folder = "account/";
    $targer_dir = $level.img_path.$folder; //image folder
    $targer_file = $targer_dir.basename($_FILES['fileupload']['name']);//save tmp path
    $allowUpload = true;
    $imageFileType = pathinfo($targer_file,PATHINFO_EXTENSION);//get extention file path
    $allowTypes = array('jpg','png','jpeg','gif');
    if(isset($_POST['add'])){
        //Check is image
        $checkimg = getimagesize($_FILES['fileupload']['tmp_name']);
        if($checkimg !== false){
            echo "This is an image".$checkimg["mime"].".";
            $allowUpload = true;
        }
        else{
            echo "Not an image.";
            $allowUpload = false;
        }
        // Is Exists
        if(file_exists($targer_file)){
            echo "File already exsisted.";
            $allowUpload = false;
        }
        //Chek file type
        if(!in_array($imageFileType,$allowTypes)){
            echo "You can upload only extention file JPG, PNG, JPEG, GIF";
            $allowUpload = false;
        }
        //Check $AllowUpload
        var_dump($checkAcc);
        if($allowUpload == true && $checkAcc ==  true){
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
    //Check upload image
    if($filename == $folder)
        echo "You not selected imgage yet.";
    var_dump($allowUpload);
    if($checkAcc){
        if($type != 0 && $checkAcc == true && $active != 'Select option'){ 
           $result = DP::run_query("INSERT into account(username,`password`,`type`,`status`,email,img,active) VALUES (?,?,?,?,?,?,?) ",[$username,$pass,$type,0,$email,$filename,$active],3);
        }
    }
    else echo "Account can't create!";
       
      //page load
      header('location:'.$level.pages_path.'add-product.php');
?>