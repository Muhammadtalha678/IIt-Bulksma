<div class="col-md-14">
    <div class="grid simple ">
        <div class="grid-body no-border">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <a href="#" id="activeAll" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
                    <a href="#" id="deactiveAll" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
                    <a href="#" id="deleteAll" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
                    <a href="/admin/media/add" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
                </div>
                <div class="col-md-6">
                    <?php echo form_open('', ['name' => 'formSearch' ,'method' => 'get']); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="per_page"  class="form-control" onchange="javascript:document.forms['formSearch'].submit();">
                                    <option <?php if($this->input->get('per_page') == '10'){echo "selected";} ?> value="10">10</option>
                                    <option <?php if($this->input->get('per_page') == '20'){echo "selected";} ?> value="20">20</option>
                                    <option <?php if($this->input->get('per_page') == '30'){echo "selected";} ?> value="30">30</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" name="search" placeholder="Search Here" class="form-control" value="<?php echo $this->input->get('search'); ?>">
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
                <?php if ($medias){?>
                <thead>
                    <tr>
                        <th style="width:1%">
                            <div class="checkbox check-default">
                                <input id="checkbox10" type="checkbox" value="1" class="checkall">
                                <label for="checkbox10"></label>
                            </div>
                        </th>
                        <th style="width:40%">Title</th>
                        <th style="width:15%">Media Type</th>
                        <th style="width:15%">Media Image</th>
                        <th style="width:15%">Status</th>
                        <th style="width:20%">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($medias as $media) {?>
                    <tr>
                        <td>
                            <div class="checkbox check-default">
                                <input id="checkbox10" type="checkbox" value="1" class="checkall">
                                <label for="checkbox10"></label>
                            </div>
                        </td>
                        <td><?php echo $media->title; ?></td>
                        <td><?php echo $media->media_gallery; ?></td>
                        <td>
                            <img src="/uploads/<?php echo $media->media_img ?>" alt="<?php echo $media->title?>" class="img-thumbnail" width="100" height="50">
                        </td>
                        <td>
                            <?php if ($media->status == 'DEACTIVE') {?>
                            <a class="singleStatus" href="/admin/media/status/<?php echo $media->id ?>" > <span class="label label-important btn-small"><i class="fa fa-thumbs-o-down"></i></span></a>
                            <?php } else{ ?>
                            <a class="singleStatus" href="/admin/media/status/<?php echo $media->id ?>"> <span class="label label-info btn-small"><i class="fa fa-thumbs-o-up"></i></span> </a>
                            <?php } ?>
                        </td>
                        <td>
                            <a href="/admin/media/edit/<?php echo $media->id ?>" class="label label-info"> <i class="fa fa-edit"></i></a>
                            <a href="/admin/media/delete/<?php echo $media->id ?>" class="label label-important singleDelete" onclick="return  confirm('Are you sure do you wan\'t to delete this user?')"> <i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <?php } else{?>
                <div class="alert alert-danger">
                    No record found
                </div>
                <?php } ?>
            </table>
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>