<div class="col-md-14">
    <div class="grid simple">
        <?php $hidden=['old_img'=>$medias->media_img];
        echo form_open_multipart('','',$hidden); ?>
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
                                        <div class="col-md-12">
                                            <input name="create_date" id="inputDate" type="text"  class="form-control" placeholder="Create Date" value="<?php echo $medias->create_date ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <select name="media_gallery" id="dropdownMedia" >
                                                <option>-- Select Media --</option>
                                                <option <?php if ($medias->media_gallery == 'slideshow'){echo 'selected';}?> value="slideshow">Slideshow</option>
                                                <option <?php if($medias->media_gallery == 'gallery'){echo 'selected';} ?> value="gallery">Gallery</option>
                                                <option <?php if($medias->media_gallery == 'video'){echo "selected";} ?> value="video">Video</option>
                                                <option <?php if($medias->media_gallery == 'audio'){echo "selected";} ?> value="audio">Audio</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="title" id="inputTitle" type="text"  class="form-control" placeholder="Title" value="<?php echo $medias->title ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="slug" id="inputSlug" type="text"  class="form-control" placeholder="Slug"readonly value="<?php echo $medias->slug ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <textarea name="description" id="inputDescription" rows="8" class="form-control" placeholder="Description"><?php echo $medias->description; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <textarea name="embed_code" id="inputEmbedCode" rows="8" class="form-control" placeholder="Embed Code"><?php echo $medias->embed_code; ?></textarea>
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
                                            <textarea name="meta_Description" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions"><?php echo $medias->meta_description; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input type="text" name="meta_Keyword" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="<?php echo $medias->meta_keyword ?>">
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
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>