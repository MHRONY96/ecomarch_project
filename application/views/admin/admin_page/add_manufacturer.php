<div class="inner-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Add Manufacturer</h3>
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
                        <form class="form-horizontal" name="" method="post" action="<?php echo base_url(); ?>Supar_Admin/save_manufacturer">
                            <div class="form-group">
                                <label class="control-label col-md-4">Manufacturer Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="manufacturer_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <select name="category_id" class="form-control">
                                        <option>Select category</option>
                                        <?php
                                        foreach ($published_category as $category) {
                                            ?>
                                        <option value="<?php echo $category->category_id;?>"><?php echo $category->category_name;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Manufacturer Description</label>
                                <div class="col-md-8">
                                    <textarea rows="6" cols="40" class="form-control" name="manufacturer_description"></textarea>
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
                                    <input type="submit" name="btn" class="btn btn-success" value="Save Manufacturer" onclick="return save_brands();"/>
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



