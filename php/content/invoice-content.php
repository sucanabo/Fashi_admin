<div class="container mt-5">
    <?php
      include ($level.php_path.comp_path.'bill_filter.php');
    ?>
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
          <?php 
            if(!empty($_GET)){
                ?>
                <h2 class="text-white mt-5 mb-5"><?php echo $script ?></h2>
                <?php
            }
          ?>
            <div class="tm-product-table-container">
            <form action="<?php echo $level.php_path.function_path.'bill_change_status.php' ?>" method="POST" >
            <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">ORDER NO</th>
                    <th scope="col">CUSTOMER</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">STATUS</th>
                    <th scope ="col">TOTAL</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    foreach($bill as $b){
                ?>
                  <tr>
                    <th scope="row"><input type="checkbox" name="bill[]" value="<?php echo $b['id'] ?>" /></th>
                    <td class="tm-product-name"><?php echo $b['id'] ?></td>
                    <td><?php echo $b['customername'] ?></td>
                    <td><?php echo $b['phone'] ?></td>
                    <td><?php echo $b['address'] ?></td>
                    <?php
                        if($b['status']==1)
                        $temp = 'PENDING';
                        else if($b['status']==2)
                        $temp = 'MOVING';
                        else if($b['status']==3)
                        $temp = 'FINISHED';
                        else
                        $temp = 'CANCELED';
                    ?>
                    <td><?php echo $temp ?></td>
                    <td><?php echo '$ '.$b['total'] ?></td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- table container -->
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <!-- table container -->
            <button class="btn btn-primary btn-block text-uppercase mb-3" type="submit" name = "moving">
              MOVING
            </button>
            <button class="btn btn-primary btn-block text-uppercase mb-3" type="submit" name = "finished">
              FINISHED
            </button>
            <button class="btn btn-primary btn-block text-uppercase mb-3" type="submit" name = "canceled">CANCELED</button>
          </div>
        </div>
        </form>
      </div>
</div>
</div>