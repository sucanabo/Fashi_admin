<div class="col-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
        <h2 class="tm-block-title">Orders List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ORDER NO.</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">OPERATORS</th>
                    <th scope="col">LOCATION</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">ORDER DATE</th>
                    <th scope="col">TOTAL</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            foreach ($order as $o) {
                if($o['status']==1)
                    $status = 'PENDING';
                else if($o['status']==2)
                    $status = 'MOVING';
                else if($o['status']==3)
                    $status = 'FINISHED';
                else
                    $status = 'CANCELED';
                ?>
                <tr>
                    <th scope="row"><b><?php echo "#".$o['id']?></b></th>
                    <td>
                        <div class="tm-status-circle <?php echo strtolower($status)?>">
                        </div><?php echo $status?>
                    </td>
                    <td><b><?php echo $o['customername']?></b></td>
                    <td><b><?php echo $o['address']?></b></td>
                    <td><b><?php echo $o['phone']?></b></td>
                    <td><?php echo $o['datef']?></td>
                    <td><?php echo $o['total']?></td>
                </tr>

                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>