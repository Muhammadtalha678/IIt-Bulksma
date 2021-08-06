 <div class="col-md-14">
            <div class="grid simple ">
                <div class="grid-body no-border">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" id="activeAll" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
                            <a href="#" id="deactiveAll" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
                            <a href="#" id="deleteAll" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
                            <a href="/admin/category/add" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
                        </div>
                        <div class="col-md-6">  
                            <?php echo form_open('', ['name' => 'formSearch' , 'method' => 'GET'] ); ?>
                            <div class="row">
                               <div class="col-md-4">
                                  <div class="form-group">
                                     <select name="per_page"  class="form-control" onchange="javascript:document.forms['formSearch'].submit();">
                                        <option value="10"<?php if($this->input->get('per_page') == '10'){ echo 'selected'; }?>>10</option>

                                        <option value="20" <?php if($this->input->get('per_page') == '20'){ echo 'selected'; } ?>>20</option>

                                        <option value="30" <?php if($this->input->get('per_page') == '30'){ echo 'selected'; } ?>>30</option>
                                       
                                     </select>
                                  </div>
                               </div>
                               <div class="col-md-8">
                                  <div class="input-group">
                                     <input type="text" name="search" placeholder="Search Here" class="form-control" value="<?php echo $this->input->get('search') ?>">
                                     <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                                     </span>
                                  </div>
                               </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                        
                    <br>
                       <table class="table table-bordered table-hover">
                        <thead>
                            <?php if ($categories) {?>

                                    
                            <tr>
                                <th style="width:1%">
                                    <div class="checkbox check-default">
                                        <input id="checkbox" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox"></label>
                                    </div>
                                </th>
                                <th style="width:40%">Title</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php foreach ($categories as $category){?>
                                    
                            <tr>
                                <td>
                                    <div class="checkbox check-default">
                                        <input id="checkbox" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox"></label>
                                    </div>
                                </td>
                                <td><?php echo $category->title; ?></td>
                                <td>
                                    <?php if ($category->status == 'DEACTIVE') {?>
                                       
                                    <a class="singleStatus" href="/admin/category/status/<?php echo $category->id ?>" > <span class="label label-important btn-small"><i class="fa fa-thumbs-o-down"></i></span></a>
                                   <?php } else{?>
                                       <a class="singleStatus" href="/admin/category/status/<?php echo $category->id ?>"> <span class="label label-info btn-small"><i class="fa fa-thumbs-o-up"></i></span> </a>
                                   <?php }?>
                                </td>
                                <td>
                                    <a href="/admin/category/edit/<?php echo $category->id ?>" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <a href="/admin/category/delete/<?php echo $category->id; ?>" class="label label-important singleDelete" onclick=" return confirm('Are you sure do you wan\'t to delete this user?') "> <i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                                <?php } ?>
                            <?php }else{ ?>
                                <div class="alert alert-danger">
                                    No record found
                                </div>
                            <?php } ?>
                        </tbody>
                    </table>
                            <div class=" text-center">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                </div>
            </div>
        </div>