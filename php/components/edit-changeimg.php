<div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
    <div class="tm-product-img-edit mx-auto">
        <img src="<?php echo $level.'../fashishop/'.img_path.$epr[0]['img'];?>" alt="Product image" class="img-fluid d-block mx-auto">
        <i
        class="fas fa-cloud-upload-alt tm-upload-icon"
        onclick="document.getElementById('fileInput').click();"
        ></i>
    </div>
    <div class="custom-file mt-3 mb-3">
        <input id="fileInput" type="file" name ="fileupload" style="display:none;" />
        <input
        type="button"
        class="btn btn-primary btn-block mx-auto"
        value="CHANGE IMAGE NOW"
        onclick="document.getElementById('fileInput').click();"
        />
    </div>
    </div>
    <div class="col-12">
        <button type="submit" name="edit"  value="Uadate Now"class="btn btn-primary btn-block text-uppercase">Update Now</button>
    </div>
</form>