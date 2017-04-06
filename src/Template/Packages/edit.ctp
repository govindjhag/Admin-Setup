<?php //pr($package); exit; ?>
<div class="row clearfix">
    <div class="col s12 m6 l9">
        <h3 style="margin-top:0px;"><?= __('Edit Package') ?></h3>
    </div>
</div>
<div class="row">
    <form class="col s12" method="POST" action="<?php echo $this->Url->build(array('controller'=>'Packages','action'=>'edit',$package->id)); ?>" enctype="multipart/form-data">
      <input type="hidden" name="id" id="id" value="<?php echo $package->id; ?>">
      <input type="hidden" name="category_id" id="category_id" value="<?php echo $package->category_id; ?>">
      <!-- <div class="row">
        <div class="input-field col s12">
          <select class="browser-default" id="category_id" name="category_id" required>
            <?php foreach($categories as $category) {
              ?>
              <option value="<?php echo $category['id'];?>" <?php if($category['id']==$package->category_id){ echo "selected"; } ?>><?php echo $category['name'];?></option>
            <?php } ?>

          </select>
          <label for="category_id" class="active">Category</label>
        </div>
      </div> -->
      <div class="row">
        <div class="input-field col s12">
          <div class="file-field input-field">
            <div class="btn">
              <span>Icon</span>
              <input type="file" name="image_url" id="image_url">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
            <img src="<?php echo $this->Url->build('/img/package_image/', TRUE).$package->image_url; ?>" style="width:150px;height:150px;" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="name" name="name" type="text" class="validate" value="<?php echo $package->name;?>" required>
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="description" name="description" class="materialize-textarea"><?php echo $package->description;?></textarea>
          <label for="description">Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 text-center">
            <button onClick="window.history.back();" type="reset" class="btn waves-effect waves-light">Cancel</button>
            <button type="submit"
                class="btn waves-effect waves-light light-blue darken-2">
                Edit Package
            </button>
        </div>
      </div>
    </form>
  </div>
