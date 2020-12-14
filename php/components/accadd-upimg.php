<div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
    <div class="form-group mb-3">
        <label
            for="d_name"
            >Display name</label
        >
        <input type = "text"
            class="form-control validate"
            rows="3"
            required name="d_name"
        ></input>
    </div>
    <div class="form-group mb-3">
        <label
            for="email"
            >Email</label
        >
        <input type = "email"
            class="form-control validate"
            rows="3"
            required name="email"
        ></input>
    </div>
    <div class="tm-product-img-dummy mx-auto">
        <i name = ""
        class="fas fa-cloud-upload-alt tm-upload-icon"
        onclick="document.getElementById('fileInput').click();"
        ></i>
    </div>
    <div class="custom-file mt-3 mb-3">
        <input id="fileInput" type="file" name="fileupload" style="display:none;" />
        <input
        type="button"
        class="btn btn-primary btn-block mx-auto"
        value="UPLOAD IMAGE"
        name =""
        onclick="document.getElementById('fileInput').click();"
        />
    </div>
</div>