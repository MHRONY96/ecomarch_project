<div class="inner-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Add Product</h3>
                        <hr/>
                        <h3 align="center" style="color: green;">
                            <?php 
                            $massage= $this->session->userdata('massage');
                            if ($massage) {
                                echo $massage;
                                $this->session->unset_userdata('massage');
                            }
                            ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>Supar_Admin/save_product">
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product Name</label>
                                <div class="col-lg-8">
                                    <input type="text" name="product_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Category Name</label>
                                <div class="col-lg-8">
                                    <select name="category_id" class="form-control" >
                                        <option>Select Option</option>
                                        <?php foreach ($published_category as $category) { ?>

                                            <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Manufacturer Name</label>
                                <div class="col-lg-8">
                                    <select name="manufacturer_id" class="form-control">
                                        <option>Select Option</option>
                                        <?php foreach ($published_manufacturer as $manufacturer) { ?>
                                            <option value="<?php echo $manufacturer->manufacturer_id; ?>"><?php echo $manufacturer->manufacturer_name; ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product Short Description</label>
                                <div class="col-lg-8">
                                    <textarea rows="6" cols="30" class="form-control" name="product_short_descrip"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product long Description</label>
                                <div class="col-lg-8">
                                    <textarea rows="6" cols="30" class="form-control" name="product_long_descrip"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product price</label>
                                <div class="col-lg-8">
                                    <input type="text" name="product_price" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product New price</label>
                                <div class="col-lg-8">
                                    <input type="text" name="product_new_price" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label" for="typeahead">Product Quantity</label>
                                <div class="col-lg-8">
                                    <input type="text" name="product_quantity" class="form-control" placeholder="Enter your product quantity"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label" >Is Featured</label>
                                <div class="col-lg-2 checkbox">
                                    <input type="checkbox" name="is_featured" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product Image</label>
                                <div class="col-lg-8">
                                    <input type="file" name="product_image" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Publication status</label>
                                <div class="col-lg-8">
                                    <select class="form-control" name="publication_status">
                                        <option>Select Option</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-8 col-lg-4">
                                    <input type="submit" name="btn" value="Save Product" class="btn btn-success" onclick="return save_brands();" />
                                    <input type="reset" name="btn" value="Cancel" class="btn btn-info pull-right"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>