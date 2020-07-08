<div class="col-sm-12 col-md-12 col-lg-8 col-xl-8  tm-block-col">
    <div class="tm-bg-primary-dark tm-block <?php if($page_filter == false ) echo " tm-block-products";?>">
    <?php 
        if($productlist == null){
            ?>
            <h2 class="text-white mt-5 mb-5"><?php echo $script ?></h2>
            <?php
        }
    ?>
    <div class="tm-product-table-container">
        <table class="table table-hover tm-table-small tm-product-table">
        <thead>
            <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">PRODUCT NAME</th>
            <th scope="col">UNIT SOLD</th>
            <th scope="col">IN STOCK</th>
            <th scope="col">EXPIRE DATE</th>
            <th scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            </tr>
            </tr>
        </thead>
        <tbody>
        <?php
            if($productlist != null) {
                foreach ($productlist as $pr) {
                    # code...
                    ?>
                        <tr>
                            <th scope="row"></th>
                            <td class="tm-product-name"><?php echo $pr['name']?></td>
                            <td><?php echo $pr['unitsold']?></td>
                            <td><?php echo $pr['instock']?></td>
                            <td><?php echo $pr['expiredate']?></td>
                            <td>
                                <a href="<?php echo $level.php_path.function_path.'del_product.php?del='.$pr['productid'];?>" class="tm-product-delete-link">
                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $level.pages_path.'edit-product.php?edit='.$pr['productid'];?>" class="tm-product-delete-link">
                                <i class="fas fa-edit tm-product-edit-icon" ></i>
                                </a>
                            </td>
                        </tr>
    
                    <?php
                }
            }
        ?>
        </tbody>
        </table>
    </div>
    <!-- table container -->
    <?php 
        if($page_products == true){
            ?>
            <a href="<?php echo $level.pages_path.'add-product.php'?>"
                class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
            <?php
        }
    ?>
    
    </div>
</div>