<div class="row tm-content-row">
    <div class="col-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <h2 class="tm-block-title">Filter</h2>
            <form action="<?php echo $level.pages_path.'products.php'?>" method = "get" style = "overflow:hidden" >
            <div class="row">
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label
                        for="name"
                        >Product name
                        </label>
                        <input
                        id="name"
                        name="name"
                        type="text"
                        class="form-control validate"
                        data-large-mode="true"
                        <?php if(!empty($_GET['name'])) echo "value = ".$_GET['name'];?>
                        />
                    </div>
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label
                            for="category"
                            >Category</label>
                        <select
                            class="custom-select tm-select-accounts"
                            id="category" name = "category">
                            <option value =0 selected>Select category</option>
                            <?php 
                            foreach($catagory as $ct){
                                ?>
                                    <option <?php if (isset($cate) && $cate == $ct['id']) echo "selected=\"selected\"";  ?> value="<?php echo $ct['id'];?>"><?php echo $ct['name']?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mb-3 col-xs-6 col-sm-3">
                            <label
                            for="stock"
                            >Instock
                            </label>
                            <input
                            id="stock"
                            name="stock"
                            type="number"
                            class="form-control validate"
                            data-large-mode="true"
                            <?php if(!empty($_GET)) echo "value = ".$_GET['stock'];?>
                            />
                    </div>
                    <div class="form-group mb-3 col-xs-6 col-sm-3">
                        <label
                            for="chooseStock"
                            >- - -</label>
                        <select
                            class="custom-select tm-select-accounts"
                            id="chooseStock" name = "chooseStock">
                            <option value ="0" selected>Above</option>
                            <option value ="1">Go down</option>
                        </select>
                    </div>
                    <div class="form-group mb-3 col-xs-6 col-sm-3">
                            <label
                            for="sold"
                            >Unit Sold
                            </label>
                            <input
                            id="sold"
                            name="sold"
                            type="number"
                            class="form-control validate"
                            data-large-mode="true"
                            <?php if(!empty($_GET)) echo "value = ".$_GET['sold'];?>
                            />
                    </div>
                    <div class="form-group mb-3 col-xs-6 col-sm-3">
                        <label
                            for="chooseUS"
                            >- - -</label>
                        <select
                            class="custom-select tm-select-accounts"
                            id="chooseUS" name = "chooseUS">
                            <option value ="0" selected>Above</option>
                            <option value ="1">Go down</option>
                        </select>
                    </div>
                </div>
                
                <button type="submit"  name ="filter" class="btn btn-primary text-uppercase mt-5  float-right col-sm-12">
                    Filter
                    </button>
            </form>
            
        </div>
    </div>
</div>