<?php 
    $month = $_GET['month'];
    $quarter = $_GET['quarter'];
    $year = $_GET['year'];

    if($month != 0){
        $StringMonth  = " and month(b.datef) = ";
    }  
    else {
        $StringMonth = "";
        $month ="";
    }  
    if($quarter != 0){
        if($quarter <= 3)
            $StringQuater = " and month(b.datef) <= 3";
        elseif($quarter <= 6)
            $StringQuater = " and month(b.datef) <= 6";
        elseif($quarter <= 9)
            $StringQuater = " and month(b.datef) <= 9";
        else $StringQuater = " and month(b.datef) <= 12";
    } 
    else
    {
        $StringQuater = "";
        $quarter ="";
    }
        
    if($year != null){
        
        $stringYear = " and year(b.datef) = ";
    }
    else $stringYear = "";
    $result = "";
    if($month  ==0 && $quarter  == 0 && $year == null)
       {
        $script = "Nothing to filter";
       } 
    else
    {
        if($quarter != 0 && $month != 0){
            $script = "Please choose only one month or quarter option";
        }
        else{
            $result = DP::run_query("SELECT bd.productid ,p.name, SUM(bd.quantity) as total FROM billdetail bd, bill b,product p WHERE bd.billid = b.id and p.productid = bd.productid $StringMonth $month $StringQuater $quarter $stringYear $year GROUP by bd.productid ORDER by total desc",[],2); 
            if($result == null){
                $script = "We don't have any product at this time.";
            }
        }
        
    }
?>