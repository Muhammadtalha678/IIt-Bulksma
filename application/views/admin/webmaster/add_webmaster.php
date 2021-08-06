<div class="col-md-14">
    <div class="grid simple">
        <div class="grid-body no-border">
            <div class="row">
                <?php $attribute = ['name' => 'formAdd'];
                $hidden = ['status' => 'DEACTIVE'];
                echo form_open_multipart('', $attribute, $hidden); ?>
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
                                        <div class="col-md-12">
                                            <input name="create_date" id="create_date" type="text"  class="form-control <?php if (form_error('create_date')){echo "error";} ?>" placeholder="Create Date" value="<?php echo set_value('create_date') ?>">
                                            <?php echo form_error('create_date','<div class = "error">','</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="full_name" id="full_name" type="text"  class="form-control <?php if (form_error('full_name')){echo "error";} ?>" placeholder="Full name"  value="<?php echo set_value('full_name') ?>">
                                            <?php echo form_error('full_name','<div class = "error">','</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="email" id="email" type="text"  class="form-control <?php if (form_error('email')){echo "error";} ?>" placeholder="Email" value="<?php echo set_value('email') ?>">
                                            <?php echo form_error('email','<div class = "error">','</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <textarea name="profile" id="profile" rows="8" class="form-control" placeholder="Profile | Description" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <h4>Meta Information</h4>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input type="file" name="media_img" id="file" class="<?php if(isset($error)){echo "error";} ?>">
                                            <?php if (isset($error)): ?>
                                            <div class="alert alert-danger">
                                                <?php echo $error; ?>
                                            </div>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <textarea name="meta_description" id="meta_description" rows="8" class="form-control" placeholder="Meta Descriptions"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input type="text" name="meta_keyword" id="meta_keyword" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
                        <a href="/admin/webmaster" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>