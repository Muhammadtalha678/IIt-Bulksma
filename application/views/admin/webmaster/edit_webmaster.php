<div class="col-md-14">
    <div class="grid simple">
        <div class="grid-body no-border">
            <div class="row">
                <?php
                $hidden = ['old_img' => $websingData->media_img];
                echo form_open_multipart('','',$hidden); ?>
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
                                            <input name="create_date" id="inputDate" type="text"  class="form-control" placeholder="Create Date" value="<?php echo $websingData->create_date ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="full_name" id="inputFullname" type="text"  class="form-control" placeholder="Fullname"  value="<?php echo $websingData->full_name ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="email" id="inputEmail" type="text"  class="form-control" placeholder="Email" value="<?php echo $websingData->email?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <textarea name="profile" id="inputProfile" rows="8" class="form-control" placeholder="Profile | Description" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <h4>Meta Information</h4>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input type="file" name="media_img" id="file">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <textarea name="meta_description" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input type="text" name="meta_keyword" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="<?php echo $websingData->meta_keyword ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
                        <a href="webmaster.html" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>