<div class="row tm-content-row">
    <div class="col-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <h2 class="tm-block-title">Filter</h2>
            <form action="<?php echo $level.pages_path.'invoice.php'?>" method = "get" style = "overflow:hidden" >
            <div class="row">
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label
                        for="name"
                        >ID
                        </label>
                        <input
                        id="name"
                        name="id"
                        type="number"
                        class="form-control validate"
                        data-large-mode="true"
                        <?php if(!empty($_GET)) echo "value = ".$_GET['id'];?>>
                    </div>
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label
                            for="status"
                            >STATUS</label>
                        <select
                            class="custom-select tm-select-accounts"
                            id="status" name = "status">
                            <option value =0 selected>Select status</option>
                            <?php 
                            $tempstatus;
                                foreach($bill as $b){
                                    if($b['status']==1)
                                    $tempstatus = 'PENDING';
                                    else if($b['status']==2)
                                    $tempstatus = 'MOVING';
                                    else if($b['status']==3)
                                    $tempstatus = 'FINISHED';
                                    else $tempstatus = 'CANCELED';
                            ?>
                            <option value="<?php echo $b['status'] ?>"><?php echo $tempstatus ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mb-3 col-xs-6 col-sm-3">
                            <label
                            for="phone"
                            >PHONE
                            </label>
                            <input
                            id="phone"
                            name="phone"
                            type="number"
                            class="form-control validate"
                            data-large-mode="true"
                            <?php if(!empty($_GET)) echo "value = ".$_GET['phone'];?>
                            />
                    </div>
                    <div class="form-group mb-3 col-xs-6 col-sm-3">
                        <label
                            >TOTAL</label>
                            <input type="number"
                            name = "total"
                            class="form-control validate"
                            data-large-mode="true"
                            <?php if(!empty($_GET['total'])) echo "value = ".$_GET['total'];?>
                            />
                    </div>
                    <div class="form-group mb-6 col-xs-12 col-sm-6">
                            <label
                            for="date"
                            >DATE
                            </label>
                            <input
                            id="date"
                            name="date"
                            type = "date"
                            class="form-control validate"
                            data-large-mode="true"
                            <?php if(!empty($_GET)) echo "value = ".$_GET['date'];?>
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