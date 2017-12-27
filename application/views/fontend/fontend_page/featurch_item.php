<div class="features_items">
    <h2 class="title text-center">Latest Product</h2>
    <?php 
    foreach ($publish_product as $view_product) {?>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="<?php echo base_url().$view_product->product_image; ?>" height="150" width="150" alt="" />
                    <h4><del>BDT<?php echo $view_product->product_price;?></del></h4>
                    <h2> BDT <?php echo $view_product->product_new_price; ?></h2>
                    <p><?php echo $view_product->product_name; ?></p>
                    <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h4><del>BDT<?php echo $view_product->product_price;?></del></h4>
                        <h2><?php echo $view_product->product_new_price; ?></h2>
                        <p><?php echo $view_product->product_name; ?></p>
                        <form action="<?php echo base_url();?>Cart/add_to_cart" method="post">
                            <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            <input type="hidden" name="product_id" value="<?php echo $view_product->product_id; ?>"/>
                            <input type="hidden"  value="1" name="qty"/>
                        </form>
                        <a href="<?php echo base_url();?>Welcome/product_details/<?php echo $view_product->product_id;?>" class="btn btn-info add-to-cart"><i class="fa fa-amazon"></i>Product details</a>
                    </div>
                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php }?>
    

</div>

