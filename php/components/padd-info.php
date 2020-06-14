<div class="col-xl-6 col-lg-6 col-md-12">
    <form action="<?php echo $level.php_path.function_path.'add_product.php'?>" method ="post" enctype="multipart/form-data" class="tm-edit-product-form">
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
            <?php 
            foreach($catagory as $ct){
                ?>
                    <option <?php if (isset($cate) && $cate == $ct['id']) echo "selected=\"selected\"";  ?> value="<?php echo $ct['id'];?>"><?php echo $ct['name']?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <div class="form-group mb-3">
        <label
            for="gender"
            >Fashion</label
        >
        <select
            class="custom-select tm-select-accounts"
            id="gender" name = "gender"
        >
            <option selected>Select Fashion Style</option>
            <option value="1">Men</option>
            <option value="2">Women</option>
            <option value="3">Kid</option>
            <option value="4">Unisex</option>
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