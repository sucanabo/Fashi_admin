<div class="char-data" style = "display:none">
    <div class = "store">
        <div id="instock"><?php echo $listStore[0]['tInstock'] ?></div>
        <div id="sold"><?php echo $listStore[0]['tSold'] ?></div>
    </div>
    <div id ="perfomance">
        <?php 
            foreach($listPer as $p){
                ?>
                    <div id="<?php echo $p['name']?>"><?php echo $p['unitsold']?></div>
                <?php
            }
        ?>
    </div>
</div>
