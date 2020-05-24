<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
    <h2 class="tm-block-title">Product Categories</h2>
    <div class="tm-product-table-container">
        <table class="table tm-table-small tm-product-table">
        <tbody>
        <?php 
        foreach( $catagories as $ca){
            ?>
            <tr>
                <td class="tm-product-name"><?php echo $ca['name']?></td>
                <td class="text-center">
                    <a href="#" class="tm-product-delete-link">
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
    <button class="btn btn-primary btn-block text-uppercase mb-3">
        Add new category
    </button>
    </div>
</div>