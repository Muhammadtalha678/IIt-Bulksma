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
                                            <input name="create_date" id="create_date" type="text"  class="form-control" placeholder="Create Date"  value="<?php echo $singleData->create_date ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="full_name" id="full_name" type="text"  class="form-control" placeholder="Fullname" value="<?php echo $singleData->full_name ?>">
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="email" id="email" type="text"  class="form-control" placeholder="Email" value="<?php echo $singleData->email ?>">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
                        <a href="/admin/subscriber" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>