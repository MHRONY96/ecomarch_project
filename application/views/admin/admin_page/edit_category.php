<div class="inner-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Edit Category</h3>
                        <hr/>
                          <h3 style="color: green" align="center">
                            <?php
                            $massage = $this->session->userdata('massage');
                            if ($massage) {
                                echo $massage;
                                $this->session->unset_userdata('massage');
                            }
                            ?>
                        </h3>
                        <h3 align="center" style="color: red">
                            <?php
                            $massege = $this->session->userdata('massege');
                            if ($massege) {
                                echo $massege;
                                $this->session->unset_userdata('massege');
                            }
                            ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" name="edit_category_from" action="<?php echo base_url(); ?>Supar_Admin/update_category">
                            <div class="form-group">
                                <label class="control-label col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text"  value="<?php echo $edit_categor->category_name; ?>" name="category_name" class="form-control"/>
                                    <input type="hidden"  value="<?php echo $edit_categor->category_id; ?>" name="category_id" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Category Description</label>
                                <div class="col-md-8" >
                                    <textarea rows="6" cols="30" class="form-control" name="category_description"><?php echo $edit_categor->category_description; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Publication Status</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="publication_status">
                                        <option>Select option</option>
                                        <option value="1">published</option>
                                        <option value="0">upanishad</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class=" col-md-offset-8 col-md-4">
                                    <input type="submit" name="btn" value="Update Category" class="btn btn-success" onclick="return update_category()" />
                                    <input type="reset" name="btn" value="Cancel" class="btn btn-primary pull-right"/>
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
    document.forms['edit_category_from'].elements['publication_status'].value = '<?php echo $edit_categor->publication_status; ?>';
</script>