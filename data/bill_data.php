<?php 
    if(empty($_GET)){
        
        $bill = DP::run_query("SELECT * FROM bill order by id",[],2);
    }
    else 
    {
        include_once($level.php_path.function_path.'bill_filter_func.php');
        if(is_null($result)==false)
            $bill = $result;
        else
            $bill = null;
    }
?>