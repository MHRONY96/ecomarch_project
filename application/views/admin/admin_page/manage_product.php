<div class="inner-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Manage Product</h3>
                        <hr/>
                        <h3 align="center" style="color: orange;">
                            <?php 
                            $massage= $this->session->userdata('massage');
                            if ($massage){
                                echo $massage;
                                $this->session->unset_userdata('massage');
                            }
                            ?>
                        </h3>
                        <h3 align="center" style="color: green;">
                            <?php 
                            $massag= $this->session->userdata('massag');
                            if ($massag){
                                echo $massag;
                                $this->session->unset_userdata('massag');
                            }
                            ?>
                        </h3>
                        <h3 align="center" style="color: red;">
                            <?php 
                            $massa= $this->session->userdata('massa');
                            if ($massa){
                                echo $massa;
                                $this->session->unset_userdata('massa');
                            }
                            ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="table table-responsive">
                            <table class="table table-condensed table-striped">
                                <tr>
                                    <th>Product id</th>
                                    <th>product name</th>
                                    <th>short description</th>
                                    <th>long description</th>
                                    <th>product price</th>
                                    <th>product new price</th>
                                    <th>product quantity</th>
                                    <th>is featured</th>
                                    <th>product image</th>
                                    <th>publication status</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                foreach ($take_product as $view_product){  
                                    
                                    ?>
                                <tr>
                                  
                                    <td><?php echo $view_product->product_id;?></td>
                                    <td><?php echo $view_product->product_name;?></td>
                                    <td><?php echo $view_product->product_short_descrip;?></td>
                                    <td><?php echo $view_product->product_long_descrip;?></td>
                                    <td><?php echo $view_product->product_price;?></td>
                                    <td><?php echo $view_product->product_new_price;?></td>
                                    <td><?php echo $view_product->product_quantity;?></td>
                                    <td><?php echo $view_product->is_featured;?></td>
                                    <td class="center"><img src="<?php echo base_url().$view_product->product_image;?>" height="50" width="50"></td>
                                    <td>
                                        <?php if ($view_product->publication_status==1){?>
                                        <span class="btn btn-success">Active</span>
                                        <?php } else {?>
                                        <span class="btn btn-warning">Unactive</span>
                                        <?php }?>
                                    </td>
                                    <td>
                                        <?php if ($view_product->publication_status==1){?>
                                        <a class="btn btn-success" href="<?php echo base_url()?>Supar_Admin/unpublish_product/<?php echo $view_product->product_id;?>" title="Unpublish Product" onclick="return click_unpublish_cate()">
                                            <i class="glyphicon glyphicon-arrow-down"></i>   
                                        </a>
                                        <?php } else {?>
                                        <a class="btn btn-warning" href="<?php echo base_url();?>Supar_Admin/publish_product/<?php echo $view_product->product_id;?>" title="Publish Product" onclick="return click_publish_cate()">
                                            <i class="glyphicon glyphicon-arrow-up"></i>
                                        </a>
                                        <?php }?>
                                        <a class="btn btn-info" href="<?php echo base_url();?>Supar_Admin/edit_product/<?php echo $view_product->product_id;?>" title="Edit Product">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>
                                        <a class="btn btn-danger" href="<?php echo base_url();?>Supar_Admin/delete_product/<?php echo $view_product->product_id;?>" title="Delete Product" onclick="return del_category()">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </a>
                                    </td>
                                   
                                </tr>
                                <?php 
                                }?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

