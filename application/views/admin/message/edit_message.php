<div class="col-md-14">
    <div class="grid simple">
        <div class="grid-body no-border">
            <div class="row">
                <?php echo form_open(''); ?>
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
                                            <input name="create_date" id="create_date" type="text"  class="form-control" placeholder="Create Date" value="<?php echo $messageData->create_date ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <select name="category_id" id="CategoryId" class="form-control">
                                                <option >-- Select Category --</option>
                                                <?php foreach ($categories as $category) {?>
                                                <option value="<?php echo $category->id ?>"><?php echo $category->title ?></option>
                                                <?php } ?>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="title" id="title" type="text"  class="form-control" placeholder="Title" value="<?php echo $messageData->title ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="slug" id="slug" type="text"  class="form-control" placeholder="Slug" readonly value="<?php echo $messageData->slug ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <textarea name="message" id="message" rows="8" class="form-control" placeholder="SMS"><?php echo $messageData->message ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <h4>Meta Information</h4>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <textarea name="meta_description" id="meta_description" rows="8" class="form-control" placeholder="Meta Descriptions"><?php echo $messageData->meta_description ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="<?php echo $messageData->meta_keywords ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
                        <a href="/admin/message/" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>