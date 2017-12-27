<div class="features_items"><!--features_items-->
    <h2 class="title text-center">All Product</h2>
    <?php
    foreach ($all_featch_product as $featch_product) {
        ?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="<?php echo base_url().$featch_product->product_image; ?>" height="150" width="150" alt="" />
                        <h4><del>BDT <?php echo $featch_product->product_price; ?></del></h4>
                        <h2>BDT <?php echo $featch_product->product_new_price; ?></h2>
                        <p><?php echo $featch_product->product_name; ?></p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h4><del>BDT <?php echo $featch_product->product_price; ?></del></h4>
                            <h2>BDT <?php echo $featch_product->product_new_price; ?></h2>
                            <p><?php echo $featch_product->product_name; ?></p>
                            <a href="<?php echo base_url();?>Welcome/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            <a href="<?php echo base_url();?>Welcome/product_details/<?php echo $featch_product->product_id; ?>" class="btn btn-info add-to-cart"><i class="fa fa-amazon"></i>Product details</a>
                        </div>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                        <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>

    <ul class="pagination">
        <li class="active"><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">&raquo;</a></li>
    </ul>
</div><!--features_items-->

