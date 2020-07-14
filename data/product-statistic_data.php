<?php 
    if(empty($_GET)){
        
        $productlist = DP::run_query("select name,unitsold from product order by unitsold desc",[],2);
    }
    else 
    {
        include_once($level.php_path.function_path.'pr_sta-filter.php');
        if($result != null)
            $productlist = $result;
        else
            $productlist = null;
    }
?>