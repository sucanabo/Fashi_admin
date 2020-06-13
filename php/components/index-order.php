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
                    <th scope="col">DISTANCE</th>
                    <th scope="col">START DATE</th>
                    <th scope="col">EST DELIVERY DUE</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            foreach ($order as $o) {
                ?>
                <tr>
                    <th scope="row"><b><?php echo "#".$o['orderid']?></b></th>
                    <td>
                        <div class="tm-status-circle <?php echo $o['classprop']?>">
                        </div><?php echo $o['status']?>
                    </td>
                    <td><b><?php echo $o['operator']?></b></td>
                    <td><b><?php echo $o['location']?></b></td>
                    <td><b><?php echo $o['distance']?></b></td>
                    <td><?php echo $o['startdate']?></td>
                    <td><?php echo $o['estdeliverdue']?></td>
                </tr>

                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>