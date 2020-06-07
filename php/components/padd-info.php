<?php 
    if(isset($name)){
        $name = $_POST['name'];
        $des = $_POST['description'];
        $cate = $_POST['category'];
        $exdate = $_POST['expiredate'];
        $stock = $_POST['stock'];
    
        $result = DP::run_query ("INSERT INTO `productlist` (`productname`,`description`,`categories`,`expriredate`, `instock`) VALUES (?,?,?,?,?)",[$name,$des,$cate,$exdate,$stock],3);
    }
   
?>
<div class="col-xl-6 col-lg-6 col-md-12">
    <form action="<?php $level.pages_path.'add-product.php'?>" method ="post" class="tm-edit-product-form">
        <div class="form-group mb-3">
            <label
                for="name"
                >Product Name
            </label>
            <input
                id="name"
                name="name"
                type="text"
                class="form-control validate"
                required
            />
        </div>
        <div class="form-group mb-3">
        <label
            for="description"
            >Description</label
        >
        <textarea
            class="form-control validate"
            rows="3"
            required name="description"
        ></textarea>
    </div>
    <div class="form-group mb-3">
        <label
            for="category"
            >Category</label
        >
        <select
            class="custom-select tm-select-accounts"
            id="category" name = "category"
        >
            <option selected>Select category</option>
            <option <?php if (isset($cate) && $cate == '1') echo "selected=\"selected\"";  ?> value="1">New Arrival</option>
            <option <?php if (isset($cate) && $cate == '2') echo "selected=\"selected\"";  ?> value="2">Most Popular</option>
            <option <?php if (isset($cate) && $cate == '3') echo "selected=\"selected\"";  ?> value="3">Shirt</option>
            <option <?php if (isset($cate) && $cate == '4') echo "selected=\"selected\"";  ?> value="4">Coat</option>
            <option <?php if (isset($cate) && $cate == '5') echo "selected=\"selected\"";  ?> value="5">Shoes</option>
            <option <?php if (isset($cate) && $cate == '6') echo "selected=\"selected\"";  ?> value="6">Suit</option>
            <option <?php if (isset($cate) && $cate == '7') echo "selected=\"selected\"";  ?> value="7">Back Pack</option>
            <option <?php if (isset($cate) && $cate == '8') echo "selected=\"selected\"";  ?> value="8">Sweater</option>

        </select>
    </div>
    <div class="row">
        <div class="form-group mb-3 col-xs-12 col-sm-6">
            <label
            for="expiredate"
            >Expire Date
            </label>
            <input
            id="expiredate"
            name="expiredate"
            type="text"
            class="form-control validate"
            data-large-mode="true"
            />
        </div>
        <div class="form-group mb-3 col-xs-12 col-sm-6">
            <label
            for="stock"
            >Units In Stock
            </label>
            <input
            id="stock"
            name="stock"
            type="text"
            class="form-control validate"
            required
            />
        </div>
    </div>
        
</div>