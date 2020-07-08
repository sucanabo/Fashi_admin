<?php 
    $catagory = DP::run_query("SELECT * from catagory",[],2);
    if(empty($_GET)){
        
        $productlist = DP::run_query("SELECT * FROM product order by productid desc",[],2);
    }
    else 
    {
        include_once($level.php_path.function_path.'pr-filter.php');
        if($result != null)
            $productlist = $result;
        else
            $productlist = null;
    }
?>