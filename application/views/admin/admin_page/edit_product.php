<div class="inner-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Edit Product</h3>
                        <hr/>
                        <h3 align="center" style="color: green;">
                            <?php
                            $massag = $this->session->userdata('massag');
                            if ($massag) {
                                echo $massag;
                                $this->session->unset_userdata('massag');
                            }
                            ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form form-horizontal" enctype="multipart/form-data"  method="post" action="<?php echo base_url(); ?>Supar_Admin/update_product" name="edit_product_from">
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product Name</label>
                                <div class="col-lg-8">
                                    <input type="text" name="product_name" value="<?php echo $edit_data->product_name; ?>" class="form-control"/>
                                    <input type="hidden" name="product_id"  value="<?php echo $edit_data->product_id; ?>"class="form-control"/>
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
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product Short Description</label>
                                <div class="col-lg-8">
                                    <textarea rows="6" cols="30" class="form-control" name="product_short_descrip"><?php echo $edit_data->product_short_descrip; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product long Description</label>
                                <div class="col-lg-8">
                                    <textarea rows="6" cols="30" class="form-control" name="product_long_descrip"><?php echo $edit_data->product_long_descrip; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product price</label>
                                <div class="col-lg-8">
                                    <input type="text" name="product_price" value="<?php echo $edit_data->product_price; ?>" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product New price</label>
                                <div class="col-lg-8">
                                    <input type="text" name="product_new_price" value="<?php echo $edit_data->product_new_price; ?>" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label" for="typeahead">Product Quantity</label>
                                <div class="col-lg-8">
                                    <input type="text" name="product_quantity"  value="<?php echo $edit_data->product_quantity; ?>" class="form-control" placeholder="Enter your product quantity"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label" >Is Featured</label>
                                <div class="col-lg-2 checkbox">
                                    <?php
                                    if ($edit_data->is_featured == 1) {
                                        ?>
                                    <input type="checkbox" name="is_featured"  value="<?php echo $edit_data->is_featured; ?>" class="form-control" checked/>
                                    <?php } else { ?>
                                        <input type="checkbox" name="is_featured"  value="<?php echo $edit_data->is_featured; ?>" class="form-control"/>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Product Image</label>
                                <div class="col-lg-4">
                                    <input type="file" name="product_image" value="<?php echo base_url().$edit_data->product_image; ?>" class="form-control" width="50" height="50"/>
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
                                    <input type="submit" name="btn" value="Update" class="btn btn-success"  onclick="return update_brands();" />
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
<script type="text/javascript">
    document.forms['edit_product_from'].elements['publication_status'].value = '<?php echo $edit_data->publication_status; ?>';
    document.forms['edit_product_from'].elements['category_id'].value = '<?php echo $edit_data->category_id; ?>';
    document.forms['edit_product_from'].elements['manufacturer_id'].value = '<?php echo $edit_data->manufacturer_id; ?>';
    document.forms['edit_product_from'].elements['brand_id'].value = '<?php echo $edit_data->brand_id; ?>';
</script>

