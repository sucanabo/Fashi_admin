<div class="col-xl-6 col-lg-6 col-md-12">
    <form action="<?php echo $level.php_path.function_path.'add_account.php'?>" method ="post" enctype="multipart/form-data" class="tm-edit-product-form">
    <div class="form-group mb-3">
            <label
                for="username"
                >User name
            </label>
            <input
                id="username"
                name="username"
                type="text"
                class="form-control validate"
                required
            />
    </div>
    <div class="form-group mb-3">
        <label
            for="password"
            >Password</label
        >
        <input type = "password"
            class="form-control validate"
            rows="3"
            required name="password"
        ></input>
    </div>
    <div class="form-group mb-3">
        <label
            for="cfpassword"
            >Confirm Password</label
        >
        <input type = "password"
            class="form-control validate"
            rows="3"
            required name="cfpassword"
        ></input>
    </div>
    <div class="form-group mb-3">
        <label
            for="type"
            >Account Type</label
        >
        <select required
            class="custom-select tm-select-accounts"
            id="type" name = "type"
        >
            <option selected value = 0 >Select Type</option>
            <?php 
            foreach($type as $t){
                ?>
                    <option value="<?php echo $t['typeid'];?>"><?php echo $t['type']?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <div class="form-group mb-3">
        <label
            for="active"
            >Enable Active</label
        >
        <select required
            class="custom-select tm-select-accounts"
            id="active" name = "active" required
        >
            <option selected>Select option</option>
            <option value="active">Active</option>
            <option value="deactive">Deactive</option>
        </select>
    </div>     
</div>