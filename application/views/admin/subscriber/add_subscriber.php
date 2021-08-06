<div class="col-md-14">
    <div class="grid simple">
        <div class="grid-body no-border">
            <div class="row">
                <?php echo form_open('', ['id' => 'formAdd'],['status' => 'DEACTIVE']); ?>
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
                                            <input name="create_date" id="create_date" type="text"  class="form-control <?php if (form_error('create_date')) {echo 'error';} ?>" placeholder="Create Date" value="<?php echo set_value('create_date') ?>">
                                            <?php if (form_error('create_date')) {
                                            echo form_error('create_date','<div class="error">','</div>');
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="full_name" id="full_name" type="text"  class="form-control
                                            <?php if (form_error('full_name')) {echo 'error';} ?>" placeholder="Full name" value="<?php echo set_value('full_name') ?>">
                                            <?php if (form_error('full_name')) {
                                            echo form_error('full_name','<div class="error">','</div>');
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-12">
                                            <input name="email" id="email" type="text"  class="form-control
                                            <?php if (form_error('email')) {echo 'error';} ?>" placeholder="Email" value="<?php echo set_value('email') ?>">
                                            <?php if (form_error('email')) {
                                            echo form_error('email','<div class="error">','</div>');
                                            } ?>
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