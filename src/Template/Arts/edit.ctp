

<div class="row clearfix">
    <div class="col s12 m6 l9">
        <h3 style="margin-top:0px;"><?= __('Add Arts') ?></h3>
    </div>
</div>
<div class="row">
    <form class="col s12" method="POST" action="<?php echo $this->Url->build(array('controller'=>'Arts','action'=>'edit',$art->id)); ?>" enctype="multipart/form-data">
      <!-- <div class="row">
        <div class="input-field col s12">
          <select class="browser-default" id="category_id" name="category_id" required>
            <option value="">Choose your option</option>
            <?php foreach($categories as $category) {
              ?>
              <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
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
            <img src="<?php echo $this->Url->build('/img/art_image/', TRUE).$art->image_url; ?>" style="width:150px;height:150px;" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="name" name="name" type="text" class="validate" value="<?php echo $art->name;?>" required>
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="description" name="description" class="materialize-textarea"><?php echo $art->name;?></textarea>
          <label for="description">Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="is_free" type="radio" id="free" value="1" <?php if($art->is_free==1){echo "checked";}?>/>
          <label for="free">Free</label>
          <input name="is_free" type="radio" id="paid" value="0" <?php if($art->is_free==0){echo "checked";}?>/>
          <label for="paid">Paid</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 text-center">
            <button onClick="window.history.back();" type="reset" class="btn waves-effect waves-light">Cancel</button>
            <button type="submit"
                class="btn waves-effect waves-light light-blue darken-2">
                Edit Art
            </button>
        </div>
      </div>
    </form>
  </div>
