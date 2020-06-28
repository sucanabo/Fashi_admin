<?php 
    if($listAcc[0]["type"] == 1){
        ?>
        <div class="row tm-content-row">
            <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <h2 class="tm-block-title">List of Accounts</h2>
                <p class="text-white">Accounts</p>
                <form action="<?php echo $level.php_path.function_path.'load_account.php'?>" method = "POST" style = "overflow:hidden">
                    <select class="custom-select" name ="id">
                    <?php 
                    foreach ($listAcc as $acc ) {
                        ?>
                            <option <?php if (isset($_GET['id']) && $_GET["id"] == $acc['id']) echo "selected=\"selected\"";?> value="<?php echo $acc['id'];?>"><?php echo $acc['username'];?></option>
                        <?php
                    }
                        
                    ?>
                    </select>
                    <button type="submit"  name ="loadacc" class="btn btn-primary text-uppercase mt-5  float-right">
                        Load Account.
                        </button>
                </form>
                
            </div>
            </div>
        </div>
        <?php
    }
?>
