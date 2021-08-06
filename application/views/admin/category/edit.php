<div class="col-md-14">
    <div class="grid simple">
        <div class="grid-body no-border">
            <div class="row">
                <?php echo form_open(''); ?>
                <div class="col-md-12">
                    <div class="grid simple">
                        <div class="grid-title no-border">
                        </div>
                        <div class="grid-body no-border">
                            <div class="row column-seperation">
                                <div class="col-md-6">
                                    <h4>Basic Information</h4>
                                    <div class="row form-row">
                                        <div class="col-md-12 date">
                                            <input name="create_date" id="inputDate" type="text"  class="form-control" placeholder="Create Date" value="<?php echo $categoryData->create_date ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="title" id="inputTitle" type="text"  class="form-control" placeholder="Title" value="<?php echo $categoryData->title ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="slug" id="inputSlug" type="text"  class="form-control" placeholder="Slug" value="<?php echo $categoryData->slug ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <h4>Meta Information</h4>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <textarea name="meta_description" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions" ><?php echo $categoryData->meta_description ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input type="text" name="meta_keywords" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="<?php echo $categoryData->meta_keywords ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button id="submit" class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
                        <a href="/admin/category" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>