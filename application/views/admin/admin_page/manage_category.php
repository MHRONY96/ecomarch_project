<div class="inner-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Manage Category</h2>
                        <hr/>
                        <h3 style="color: red" align="center">
                            <?php
                            $massege = $this->session->userdata('massege');
                            if ($massege) {
                                echo $massege;
                                $this->session->unset_userdata('massege');
                            }
                            ?>
                        </h3>
                        <h3 align="center" style="color: green">
                            <?php
                            $massage = $this->session->userdata('massage');
                            if ($massage) {
                                echo $massage;
                                $this->session->unset_userdata('massage');
                            }
                            ?>
                        </h3>
                        <h3 align="center" style="color: green">
                            <?php
                            $masege = $this->session->userdata('masege');
                            if ($masege) {
                                echo $masege;
                                $this->session->unset_userdata('masege');
                            }
                            ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Serial No</th>
                                    <th>Category id</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                $i = 1;
                                foreach ($manage_cate as $view_category) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $view_category->category_id; ?></td>
                                        <td><?php echo $view_category->category_name; ?></td>
                                        <td><?php echo $view_category->category_description; ?></td>
                                        <td>
                                            <?php if ($view_category->publication_status == 1) { ?>
                                                <span class="btn btn-success">Published</span>
                                            <?php } else { ?>
                                                <span class="btn btn-danger">Unpublished</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($view_category->publication_status == 1) { ?>
                                                <a class="btn btn-success" href="<?php echo base_url(); ?>Supar_Admin/unpublished_category/<?php echo $view_category->category_id; ?>" title="Unpublished" onclick="return click_unpublish_cate()">
                                                    <i class="glyphicon glyphicon-arrow-down"></i>
                                                </a>
                                            <?php } else { ?>
                                                <a class="btn btn-warning" href="<?php echo base_url(); ?>Supar_Admin/published_category/<?php echo $view_category->category_id; ?>" title="Published" onclick="return click_publish_cate()">
                                                    <i class="glyphicon glyphicon-arrow-up"></i>
                                                </a>
                                            <?php } ?>
                                            <a class="btn btn-info" href="<?php echo base_url(); ?>Supar_Admin/edit_category/<?php echo $view_category->category_id; ?>" title="Edit Category">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>
                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>Supar_Admin/delete_category/<?php echo $view_category->category_id; ?>" title="Delete Category" onclick="return del_category()">
                                                <i class="glyphicon glyphicon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

