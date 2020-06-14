<div class="row tm-content-row">
    <div class="col-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <h2 class="tm-block-title">List of Accounts</h2>
        <p class="text-white">Accounts</p>
        <select class="custom-select">
        <?php 
        foreach ($account as $acc ) {
            ?>
            <option value="<?php echo $acc['id'];?>"><?php echo $acc['username'];?></option>
            <?php
        }
            
        ?>
        </select>
    </div>
    </div>
</div>