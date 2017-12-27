<div class="inner-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Add Category</h3>
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

                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>Supar_Admin/save_category">
                            <div class="form-group">
                                <label class="control-label col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="category_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Category Description</label>
                                <div class="col-md-8" >
                                    <textarea rows="6" cols="30" class="form-control" name="category_description"></textarea>
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
                                    <input type="reset" name="btn" value="Cancel" class="btn btn-danger"/>
                                    <input type="submit" name="btn" value="Save Category" class="btn btn-success pull-right" onclick="return save_category()" />
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>