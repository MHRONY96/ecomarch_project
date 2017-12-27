<div class="inner-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Edit Manufacturer</h3>
                        <hr/>
                        <h3 align="center" style="color: green">
                            <?php
                            $massage = $this->session->userdata('massage');
                            if ($massage) {
                                echo $massage;
                                $this->session->unset_userdata('massage');
                            }
                            ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" name="edit_manufacturer_from" method="post" action="<?php echo base_url(); ?>Supar_Admin/update_manufacturer">
                            <div class="form-group">
                                <label class="control-label col-md-4">Manufacturer Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="manufacturer_name" value="<?php echo $edit_manufacturer->manufacturer_name;?>" class="form-control"/>
                                    <input type="hidden" name="manufacturer_id" value="<?php echo $edit_manufacturer->manufacturer_id;?>" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Manufacturer Description</label>
                                <div class="col-md-8">
                                    <textarea rows="6" cols="40" class="form-control" name="manufacturer_description"><?php echo $edit_manufacturer->manufacturer_description;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Publication Status</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="publication_status">
                                        <option>Select option</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-8">
                                    <input type="submit" name="btn" class="btn btn-success" value="Save Manufacturer" onclick="return update_category()"/>
                                    <input type="reset" name="btn" class="btn btn-info pull-right" value="Cancel" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
document.forms['edit_manufacturer_from'].elements['publication_status'].value='<?php echo $edit_manufacturer->publication_status;?>';
</script>




