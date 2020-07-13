<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
    <h2 class="tm-block-title">Product Categories</h2>
    <div class="tm-product-table-container  fix-height">
        <table class="table tm-table-small tm-product-table">
        <tbody>
        <?php 
        foreach( $catagory as $ca){
            ?>
            <tr>
                <td class="tm-product-name"><?php echo $ca['name']?></td>
                <td class="text-center">
                    <a href="<?php echo $level.php_path.function_path.'del-cate.php?del='.$ca['id']; ?>" class="tm-product-delete-link">
                    <i class="far fa-trash-alt tm-product-delete-icon"></i>
                    </a>
                </td>
                </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
    <!-- table container -->
    <form action="<?php echo $level.php_path.function_path.'add_cate.php' ?>" method ="POST">
    <label for="name" class = "text-white">Catagory name</label>
        <input
            id="name"
            name="name"
            type="text"
            class="form-control validate mb-4"
            required  
        />
        <input href = "<?php echo $level.php_path.function_path.'add_cate.php' ?>" class="btn btn-primary btn-block text-uppercase mb-3" type ="submit" name="addcate" value=" Add new category"></input>
    </form>
    
   
    </div>
</div>