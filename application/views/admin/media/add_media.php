<div class="col-md-14">
  <div class="grid simple">
    <div class="grid-body no-border">
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              &nbsp;
            </div>
            <div class="grid-body no-border">
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>
                  <div class="row form-row">
                    <?php echo form_open_multipart('', ['id' => 'formAdd'], ['status' => 'DEACTIVE']); ?>
                    <div class="col-md-12">
                      <input name="create_date" id="create_date" type="text"  class="form-control <?php if(form_error('create_date')){echo 'error';} ?>" placeholder="Create Date" value="<?php echo set_value('create_date'); ?>" >
                      <?php echo form_error('create_date','<div class="error">','</div>') ?>
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-12">
                      <select name="media_gallery" id="dropdownMedia">
                        <option>-- Select Media --</option>
                        <option value="slideshow">Slideshow</option>
                        <option value="gallery">Gallery</option>
                        <option value="video">Video</option>
                        <option value="audio">Audio</option>
                      </select>
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-12">
                      <input name="title" id="title" type="text"  class="form-control <?php if(form_error('title')){echo 'error';} ?>" placeholder="Title" value="<?php echo set_value('title'); ?>">
                      <?php echo form_error('title','<div class="error">','</div>') ?>
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-12">
                      <input name="slug" id="slug" type="text"  class="form-control <?php if(form_error('slug')){echo 'error';} ?>" placeholder="Slug"readonly value="<?php echo set_value('slug'); ?>">
                      <?php echo form_error('slug','<div class="error">','</div>') ?>
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-12">
                      <textarea name="description" id="inputDescription" rows="8" class="form-control" placeholder="Description"></textarea>
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-12">
                      <textarea name="embed_Code" id="inputEmbedCode" rows="8" class="form-control" placeholder="Embed Code"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  
                  <h4>Meta Information</h4>
                  <div class="row form-row">
                    <div class="col-md-12">
                      <input type="file" name="media_img" id="file" class="<?php if(isset($error)){echo 'error';} ?>">
                      <?php if (isset($error)): ?>
                      <div class="alert alert-danger">
                        <?php echo $error ?>
                      </div>
                      <?php endif ?>
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-12">
                      <textarea name="meta_Description" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions"></textarea>
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-12">
                      <input type="text" name="meta_Keyword" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-actions">
            <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
            <a href="/admin/media" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>