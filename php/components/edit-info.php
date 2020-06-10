<div class="col-xl-6 col-lg-6 col-md-12">
            <?php
            var_dump($pr);
            ?>
    <form action="" method="post" class="tm-edit-product-form">
        <div class="form-group mb-3">
            <label
                for="name"
                >Product Name
            </label>
            <input
                id="name"
                name="name"
                type="text"
                value="<?php echo $pr['productid']?>"
                class="form-control validate"
            />  
        </div>
        <div class="form-group mb-3">
            <label
                for="description"
                >Description</label
            >
            <textarea                    
                class="form-control validate tm-small"
                rows="5"
                required
            ><?php echo $product['description']?></textarea>
        </div>
        <div class="form-group mb-3">
            <label
                for="category"
                >Category</label
            >
            <select
                class="custom-select tm-select-accounts"
                id="category"
            >
                <option>Select category</option>
                <?php 
                    foreach($catagories as $ct){
                    ?>
                        <option <?php if (isset($cate) && $cate == $ct['categoryid']) echo "selected=\"selected\"";  ?> value="<?php echo $ct['categoryid'];?>"><?php echo $ct['name']?></option>
                    <?php
                    }
                ?>
            </select>
        </div>
        <div class="row">
            <div class="form-group mb-3 col-xs-12 col-sm-6">
                <label
                for="expire_date"
                >Expire Date
                </label>
                <input
                id="expire_date"
                name="expire_date"
                type="text"
                value="<?php echo $product['expiredate'];?>"
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
                value="<?php echo $product['expiredate'];?>"
                class="form-control validate"
                />
            </div>
        </div>
</div>