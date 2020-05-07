<div class="col-xl-6 col-lg-6 col-md-12">
    <form action="" class="tm-edit-product-form">
        <div class="form-group mb-3">
            <label
                for="name"
                >Product Name
            </label>
            <input
                id="name"
                name="name"
                type="text"
                class="form-control validate"
                required
            />
        </div>
        <div class="form-group mb-3">
        <label
            for="description"
            >Description</label
        >
        <textarea
            class="form-control validate"
            rows="3"
            required
        ></textarea>
    </div>
    <div class="form-group mb-3">
        <label
            for="category"
            >Category</label
        >
        <select
            class="custom-select tm-select-accounts"
            id="category"
        >
            <option selected>Select category</option>
            <option value="1">New Arrival</option>
            <option value="2">Most Popular</option>
            <option value="3">Trending</option>
        </select>
    </div>
    <div class="row">
        <div class="form-group mb-3 col-xs-12 col-sm-6">
            <label
            for="expire_date"
            >Expire Date
            </label>
            <input
            id="expire_date"
            name="expire_date"
            type="text"
            class="form-control validate"
            data-large-mode="true"
            />
        </div>
        <div class="form-group mb-3 col-xs-12 col-sm-6">
            <label
            for="stock"
            >Units In Stock
            </label>
            <input
            id="stock"
            name="stock"
            type="text"
            class="form-control validate"
            required
            />
        </div>
    </div>
        
</div>