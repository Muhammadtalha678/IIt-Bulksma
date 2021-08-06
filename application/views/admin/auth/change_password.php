 <div class="col-md-14">
                        <div class="grid simple">
                            <?php if ($this->session->flashdata('error_message')) {?>
                                <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('error_message'); ?>
                                </div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('success_message')): ?>
                                <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('success_message'); ?>
                                </div>
                            <?php endif ?>
                            <div class="grid-body no-border">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php echo form_open('', ['name' => 'formChangePassword
                                        ']); ?>
                                        <div class="grid simple">
                                            <div class="grid-title no-border">
                                                &nbsp;
                                            </div>
                                            <div class="grid-body no-border">
                                                <div class="row column-seperation">
                                                    <div class="col-md-6">
                                                        <div class="row form-row">
                                                            <div class="col-md-12">
                                                                <input type="password" name="old_password" id="inputOldPassword" class="form-control <?php if (form_error('old_password')) {echo 'error';}?>" placeholder="Old Password">
                                                                <?php echo (form_error('old_password','<div class="error">','</div>'))?>
                                                            </div>
                                                        </div>
                                                        <div class="row form-row">
                                                            <div class="col-md-12">
                                                                <input type="password" name="new_password" id="new_password" class="form-control <?php if (form_error('new_password')) {echo 'error';}?>" placeholder="New Password">
                                                                 <?php echo (form_error('new_password','<div class="error">','</div>'))?>
                                                            </div>
                                                        </div>
                                                        <div class="row form-row">
                                                            <div class="col-md-12">
                                                                <input type="password" name="confirm_password" id="confirm_password" class="form-control <?php if (form_error('confirm_password')) {echo 'error';}?>" placeholder="Confirm Password">
                                                                 <?php echo (form_error('confirm_password','<div class="error">','</div>'))?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
                                            <a href="/admin/category/" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
 </div>