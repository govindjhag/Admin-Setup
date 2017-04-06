<div class="row clearfix">
    <div class="col s12 m6 l9">
        <h3 style="margin-top:0px;"><?= __('Add Category') ?></h3>
    </div>
</div>
<div class="row">
    <form class="col s12" method="POST" action="<?php echo $this->Url->build(array('controller'=>'Categories','action'=>'edit',$category->id)); ?>"  enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12">
          <select class="browser-default" id="user_id" name="user_id" required>
            <option value="">Choose your option</option>
            <?php foreach($users as $user) {
              ?>
              <option value="<?php echo $user['id'];?>" <?php if($user['id']==$category->user_id){ echo "selected";}?> ><?php echo $user['name'];?></option>
            <?php } ?>

          </select>
          <label for="category_id" class="active">Users</label>
        </div>
      </div>
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
            <?php if(!empty($category->image_url)){ ?>
                <img src="<?php echo $this->Url->build('/img/category_image/', TRUE).$category->image_url; ?>" style="width:150px;height:150px;" />
            <?php }else{ ?>
                <img src="<?php echo $this->Url->build('/img/No_icon_red.svg', TRUE); ?>" style="width:150px;height:150px;" />
            <?php } ?>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="name" name="name" type="text" class="validate" value="<?php echo $category->name;?>" required>
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="description" name="description" class="materialize-textarea"><?php echo $category->description;?></textarea>
          <label for="description">Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 text-center">
            <button onClick="window.history.back();" type="reset" class="btn waves-effect waves-light">Cancel</button>
            <button type="submit"
                class="btn waves-effect waves-light light-blue darken-2">
                Edit Category
            </button>
        </div>
      </div>
    </form>
  </div>
