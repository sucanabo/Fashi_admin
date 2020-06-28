<?php 
    include_once('../../config.php');
    $level = lv2;

    include_once($level.'DB.php');
    //load database
    $listAcc = DP::run_query("select * from account",[],2);
    //get value in form
    $user = $_POST['username'];
    $pass = $_POST['password'];
    function check($listAcc,$user,$pass){
        foreach($listAcc as $acc){
            if(($acc['username'] == $user || $acc['email'] == $user) && ($pass == $acc['password']) && $acc['active'] == 'active')
                //return($acc['id']);
                return $acc['id'];
        }
        return -1;
    }
    $id = check($listAcc,$user,$pass);
    var_dump($id);
    if($id != -1){
        echo "duoc";
        $result = DP::run_query("update account set status = ?  where id = ?",[1,$id],3);
        header("location:".$level.'index.php');
    }
    else
        header("location:".$level.pages_path.'login.php');
        echo "khong"
;?>