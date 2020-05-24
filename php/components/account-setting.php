<div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
                <h2 class="tm-block-title">Account Settings</h2>
                <form action="" class="tm-signup-form row">
                <?php 
                foreach ($accsetting as $acc) {
                    ?>
                    <div class="form-group col-lg-6">
                        <label for="name"><?php echo $acc['label']?></label>
                        <input
                        id="<?php echo $acc['id']?>"
                        name="<?php echo $acc['name']?>"
                        type="<?php echo $acc['type']?>"
                        class="form-control validate"
                        />
                    </div>
                    <?php
                }
                ?>
                <div class="form-group col-lg-6">
                    <label class="tm-hide-sm">&nbsp;</label>
                    <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                    >
                    Update Your Profile
                    </button>
                </div>
                <div class="col-12">
                    <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                    >
                    Delete Your Account
                    </button>
                </div>
                </form>
            </div>
        </div>