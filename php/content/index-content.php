<div class="container">
    <?php include_once ($level.php_path.comp_path.'welcome.php');?>
    <!-- row -->
    <div class="row tm-content-row">
        <?php
            include_once ($level.php_path.comp_path.'chart.php');
            //bar chart
            include_once ($level.php_path.comp_path.'index-barchart.php');
            //pie chart
            include_once ($level.php_path.comp_path.'index-piechart.php');
            //order list
            include_once ($level.php_path.comp_path.'index-order.php');
        ?>
    </div>
</div>