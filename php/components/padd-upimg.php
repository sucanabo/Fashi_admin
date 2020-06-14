<div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
    <div class="row">
        <div class="form-group mb-3 col-xs-12 col-sm-6">
            <label
            for="expiredate"
            >Price
            </label>
            <input required
            id="price"
            name="price"
            type="text"
            class="form-control validate"
            data-large-mode="true"
            />
        </div>
        <div class="form-group mb-3 col-xs-12 col-sm-6">
            <label
            for="stock"
            >Sale Price
            </label>
            <input
            id="sale"
            name="sale"
            type="text"
            class="form-control validate"
            
            />
        </div>
    </div>
    <div class="tm-product-img-dummy mx-auto">
        <i
        class="fas fa-cloud-upload-alt tm-upload-icon"
        onclick="document.getElementById('fileInput').click();"
        ></i>
    </div>
    <div class="custom-file mt-3 mb-3">
        <input required id="fileInput" type="file" name="fileupload" style="display:none;" />
        <input
        type="button"
        class="btn btn-primary btn-block mx-auto"
        value="UPLOAD PRODUCT IMAGE"
        name =""
        onclick="document.getElementById('fileInput').click();"
        />
    </div>
</div>