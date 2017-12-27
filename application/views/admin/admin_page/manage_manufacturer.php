<div class="inner-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Manage Manufacturer</h3>
                        <hr/>
                        <h3 align="center" style="color: orange;">
                            <?php 
                            $massage= $this->session->userdata('massage');
                            if ($massage) {
                                echo $massage;
                                $this->session->unset_userdata('massage');
                            }
                            ?>
                        </h3>
                        <h3 align="center" style="color: green;">
                            <?php 
                            $massag= $this->session->userdata('massag');
                            if ($massag) {
                                echo $massag;
                                $this->session->unset_userdata('massag');
                            }
                            ?>
                        </h3>
                        <h3 align="center" style="color: red">
                            <?php 
                            $massge=$this->session->userdata('massge');
                            if ($massge) {
                                echo $massge;
                                $this->session->unset_userdata('massge');
                            }
                            ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered tableChart">
                                <tr>
                                    <th>Serial No</th>
                                    <th>Manufacturer id</th>
                                    <th>Manufacturer name</th>
                                    <th>Manufacturer Description</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                                <?php 
                                $i= 1;
                                foreach ($manufacturer_item as $manufacturer) {?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $manufacturer->manufacturer_id;?></td>
                                    <td><?php echo $manufacturer->manufacturer_name;?></td>
                                    <td><?php echo $manufacturer->manufacturer_description;?></td>
                                    <td>
                                        <?php if ($manufacturer->publication_status== 1) {?>
                                        <span class="btn btn-success">published</span>
                                        <?php } else {?>
                                        <span class="btn btn-warning">Unpublished</span>
                                        <?php }?>
                                    </td>
                                    <td>
                                        <?php if ($manufacturer->publication_status ==1) {?>
                                        <a class="btn btn-success" href="<?php echo base_url();?>Supar_Admin/unpublished_manufacturer/<?php echo $manufacturer->manufacturer_id;?>" title="Unpublished"  onclick="return click_unpublish_cate()">
                                            <i class="glyphicon glyphicon-arrow-down"></i>  
                                        </a>
                                        <?php } else {?>
                                        <a class="btn btn-warning" href="<?php echo base_url();?>Supar_Admin/published_manufacturer/<?php echo $manufacturer->manufacturer_id;?>" title="Published"  onclick="return click_publish_cate()">
                                            <i class="glyphicon glyphicon-arrow-up"></i>   
                                        </a>
                                        <?php }?>
                                        <a class="btn btn-info" href="<?php echo base_url();?>Supar_Admin/edit_manufacturer/<?php echo $manufacturer->manufacturer_id;?>" title="Edit Manufacturer">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>
                                        <a class="btn btn-danger" href="<?php echo base_url();?>Supar_Admin/delete_manufacturer/<?php echo $manufacturer->manufacturer_id;?>" title="Delete Manufacturer" onclick="return del_category()">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $i++; }?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
