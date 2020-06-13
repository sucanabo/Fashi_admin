<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                <h2 class="tm-block-title">Notification List</h2>
                <div class="tm-notification-items">
                    <?php 
                    foreach ($notification as $noti) {
                        ?>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="<?php echo $level.img_path.$noti['img']?>" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b><?php echo $noti['accountname']?></b> and <b><?php echo $noti['others']?> others</b>
                                <?php if($noti['actstatus'] == 'sendnew'){
                                        $sent = 1;
                                        echo "send you new";
                                    }
                                    
                                    elseif ($noti['actstatus'] == 'sentexisting ') {
                                        $sent= 2;
                                        echo "send you existing ";
                                    }
                                    else {
                                        $sent = 3;
                                        echo "sent you";
                                    }
                                
                                ?> <a href="#"
                                    class="tm-notification-link"><?php echo $noti['status'];?></a>. <?php if($sent == 1) echo "Check new orders."; elseif ($sent == 2) echo "Read more reports."; else echo "Read order information.";?></p>
                                <span class="tm-small tm-text-color-secondary"><?php echo $noti['time'];?>.</span>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>