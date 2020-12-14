<div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
                <h2 class="tm-block-title">Account Settings</h2>
               <div class="tm-signup-form row">
               <div class="form-group col-lg-6">
                <label for="name">Display Name</label>
                <input id="name" name="name" type="text" class="form-control validate" value = "<?php echo $name; ?>" />
                <input id= "id" name = "id" type="text" hidden="hidden" value="<?php echo($_GET['id'])?>"/>
                </input>
              </div>
              <div class="form-group col-lg-6">
                <label for="email">Account Email</label>
                <input id="email" name="email" type="email" value = "<?php echo $email; ?>" class="form-control validate" />
                </input>
              </div>
              <div class="form-group col-lg-6">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" class="form-control validate" />

              </div>
              <div class="form-group col-lg-6">
                <label for="password2">Re-enter Password</label>
                <input id="password2" name="password2" type="password" class="form-control validate" />
              </div>  
            <?php 
              if($indexAcc[0]['type'] == 1){
                ?>
                    <div class="form-group col-lg-6">
                <label
                    for="type"
                    >Account Type</label
                >
                <select required
                    class="custom-select tm-select-accounts"
                    id="type" name = "type"
                >
                    <option value = 0 >Select Type</option>
                    <?php 
                    foreach($type as $t){
                        ?>
                            <option value=<?php echo $t['typeid']; if($curAcc[0]['type'] == $t['typeid']) echo ' selected';?>><?php echo $t['type']?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-lg-6">
                <label
                    for="active"
                    >Enable Active</label
                >
                <select required
                    class="custom-select tm-select-accounts"
                    id="active" name = "active" required
                >
                    <option value = 0>Select option</option>
                    <option value="active" <?php if($curAcc[0]['active'] == "active") echo "selected"?>>Active</option>
                    <option value="deactive" <?php if($curAcc[0]['active'] == "deactive") echo "selected"?>>Deactive</option>
                </select>
            </div>     
                <?php
              }
            ?>
              <div class="form-group col-lg-12">
                <label class="tm-hide-sm">&nbsp;</label>
                <button type="submit" name ="update" class="btn btn-primary btn-block text-uppercase update" >
                  Update account Profile
                </button>
              </div>
              <?php 
                if($indexAcc[0]["type"] == 1){
                  ?>
                  <div class="col-lg-12">
                    <button type="submit" name = "delete" class="btn btn-primary btn-block text-uppercase">
                      Delete account
                    </button>
                  </div>
                  <div class="col-lg-12">
                    <a href="<?php echo $level.pages_path.'add-account.php'?>"
                      class="btn btn-primary btn-block text-uppercase mt-3">Create new account
                    </a>
                  </div>
                  <?php
                }
              ?>
               </div>
              
            </form>
            </div>
        </div>