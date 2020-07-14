<?php 
    $name = $_GET['name'];
    $cate = $_GET['category'];
    $stock = $_GET['stock'];
    $sold = $_GET['sold'];
    $stockC =$_GET['chooseStock'];
    $soldC = $_GET['chooseUS'];

    $isBefore = false;
    function haveBefore($before){
        if($before == false)
            return " ";
        else return " and ";
    }
    if($name != null){
        $StringName  = " name like ";
        $name = "'%$name%'";
        $isBefore = true;
    }
       
    else {
        $StringName = "";
        $name ="";
    }
       
    if($cate != 0){
        
        $StringCate = haveBefore($isBefore)."catagory =  ";
        $isBefore = true;
    }
        
    else
    {
        $StringCate = "";
        $cate = "";
    }
        
    if($stock != null){
        
        if($stockC == 0)
            $StringStock = haveBefore($isBefore)."instock >=  ";
        else
        $StringStock = haveBefore($cate)."instock <=  ";
        $isBefore = true;
    }
    else $StringStock ="";
    if($sold != null){
        
        if($soldC == 0)
            $StringSold = haveBefore($isBefore)."unitsold >=  ";
        else
            $StringSold = haveBefore($stock)."unitsold <=  ";
        $isBefore = true;
    }
    else $StringSold = "";
    
    $result = "";
    if($name  == null && $cate  == 0 && $stock  == null && $sold == null)
       {
        $script = "Nothing to filter";
       } 
    else
    {
        $result = DP::run_query("select * from product where $StringName $name $StringCate $cate $StringStock $stock $StringSold $sold",[],2); 
        if($result == null){
            $script = "We don't have any product like that.";
        }
    }
?>