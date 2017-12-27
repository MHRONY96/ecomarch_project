<div class="row">
    <div class="col-sm-12">
        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#slider-carousel" data-slide-to="1"></li>
                <li data-target="#slider-carousel" data-slide-to="2"></li>
            </ol>
            <?php
            $slider_item = $this->Welcome_Model->all_slider_image_by_info();
            ?>
            <div class="carousel-inner">
                <?php
                $i=1;
                foreach ($slider_item as $view_slider) {
                    if ($i==1) {
                        echo " <div class='item active'>";
                    } else {
                        echo " <div class='item'>";
                    }
                    ?>
                   
                        <div class="col-sm-6">
                            <h1><span>E</span>-SHOPPER</h1>
                            <h2><?php echo $view_slider->product_name;?></h2>
                            <p><?php echo $view_slider->product_short_descrip;?></p>
                            <button type="button" class="btn btn-default get">Get it now</button>
                        </div>
                        <div class="col-sm-6">
                            <img src="<?php echo base_url().$view_slider->product_image; ?>" class="girl img-responsive" alt="" height="450" width="500"/>
                            <img src="<?php echo base_url(); ?>asset/font_asset/images/home/pricing.png"  class="pricing" alt="" />
                        </div>
                    </div>
                <?php $i++; }?>
            </div>

            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>

    </div>
</div>