<div class="col-md-14">
    <div class="grid simple">
        <div class="grid-body no-border">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $array=['id'=>'formAdd'];
                    $hiddenField=['status'=>'DEACTIVATE'];
                    echo form_open('', $array, $hiddenField); ?>
                    <div class="grid simple">
                        <div class="grid-title no-border">
                        </div>
                        <div class="grid-body no-border">
                            <div class="row column-seperation">
                                <div class="col-md-6">
                                    <h4>Basic Information</h4>
                                    <div class="row form-row">
                                        <div class="col-md-12 date">
                                            <input name="create_date" id="create_date" type="text"  class="form-control <?php if (form_error('create_date')) {echo 'error';} ?>" placeholder="Create Date" value="<?php  echo set_value('create_date') ?>">
                                            <?php echo form_error('create_date','<div class="error">','</div>') ?>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="title" id="title" type="text"  class="form-control <?php if (form_error('title')) {echo 'error';} ?>" placeholder="Title" value="<?php  echo set_value('title'); ?>">
                                            <?php echo form_error('title','<div class="error">','</div>') ?>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="slug" id="slug" type="text"  class="form-control <?php if (form_error('slug')) {echo 'error';} ?>" placeholder="Slug" readonly="readonly"  value="<?php if(validation_errors()){ echo $this->form_validation->set_value('slug');} ?>">
                                            <?php echo form_error('slug','<div class="error">','</div>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <h4>Meta Information</h4>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <textarea name="meta_descriptions" id="meta_descriptions" rows="8" class="form-control" placeholder="Meta Descriptions"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button id="submit" class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
                        <a href="/admin/category/index" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>