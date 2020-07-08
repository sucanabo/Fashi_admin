<div class="tm-block-col tm-col-avatar">
    <div class="tm-bg-primary-dark tm-block tm-block-avatar">
        <h2 class="tm-block-title">Change Avatar</h2>
        <div class="tm-avatar-container">
        <img
            src="<?php echo $level.'../fashi_admin/'.img_path.'account/'.$curAcc[0]['img'];?>"
            alt="Avatar"
            class="tm-avatar img-fluid mb-4"
        />
        <a href="#" class="tm-avatar-delete-link">
            <i class="far fa-trash-alt tm-product-delete-icon"></i>
        </a>
        </div>
        <form action="<?php echo $level.php_path.function_path.'update_del_Account.php'?>"   method ="post" enctype="multipart/form-data">
            <input  required id="fileInput" class="btn btn-primary btn-block text-uppercase "  type="file" name="fileupload" style="display:none;">
            </input>
            <input
            type="button"
            class="btn btn-primary btn-block mx-auto"
            value="UPLOAD NEW PHOTO"
            name =""
            onclick="document.getElementById('fileInput').click();"/>
        
    </div>
</div>