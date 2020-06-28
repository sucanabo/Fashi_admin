<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Create New Account</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
          <?php
            //product infomation 
            include_once ($level.php_path.comp_path.'accadd-info.php');
            //upload-img
            include_once ($level.php_path.comp_path.'accadd-upimg.php');
          ?>
          <div class="col-12">
            <button type="submit" name ="add" class="btn btn-primary btn-block text-uppercase">Create Now</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  </div>
