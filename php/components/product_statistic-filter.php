<div class="row tm-content-row">
    <div class="col-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <h2 class="tm-block-title">Filter</h2>
            <form action="<?php echo $level.pages_path.'product-statistic.php'?>" method = "get" style = "overflow:hidden" >
                <div class="row">
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label
                            for="quarter"
                            >Quarter</label>
                        <select
                            class="custom-select tm-select-accounts"
                            id="quarter" name = "quarter">
                            <option value = 0 selected>Select quarter</option>
                            <?php 
                            for($i = 1 ; $i < 5 ; $i++){
                                ?>
                                    <option <?php if (isset($quarter) && $quarter == $i) echo "selected=\"selected\"";  ?> value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label
                            for="month"
                            >Month</label>
                        <select
                            class="custom-select tm-select-accounts"
                            id="month" name = "month">
                            <option value =0 selected>Select month</option>
                            <?php 
                            for($i = 1 ; $i < 13 ; $i++){
                                ?>
                                    <option <?php if (isset($month) && $i == $month) echo "selected=\"selected\"";  ?> value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label
                        for="year"
                        >Year
                        </label>
                        <input
                        id="year"
                        name="year"
                        type="text"
                        class="form-control validate"
                        data-large-mode="true"
                        <?php if(!empty($_GET['year'])) echo "value = ".$_GET['year'];?>
                        />
                    </div>
                </div> 
                    <button type="submit"  name ="filter" class="btn btn-primary text-uppercase mt-5  float-right col-sm-12">
                        Filter
                    </button>
            </form>
            
        </div>
    </div>
</div>