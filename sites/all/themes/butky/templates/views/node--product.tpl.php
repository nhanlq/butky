<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 12/13/17
 * Time: 4:55 PM
 */
dsm($node);
?>
<div class="single-product">
    <div class="detail-block ">
        <div class="row  wow fadeInUp">

            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product">
                      <?php foreach ($node->field_product_image[LANGUAGE_NONE] as $key => $img): ?>
                          <div class="single-product-gallery-item" id="slide<?php print $key ?>">
                              <a data-lightbox="image-<?php print $key ?>" data-title="Gallery"
                                 href="<?php print image_style_url('original', $img['uri']) ?>">
                                  <img class="img-responsive" alt=""
                                       src="<?php print image_style_url('detail_large', $img['uri']) ?>"
                                       data-echo="<?php print image_style_url('original', $img['uri']) ?>"/>
                              </a>
                          </div><!-- /.single-product-gallery-item -->
                      <?php endforeach; ?>

                    </div><!-- /.single-product-slider -->


                    <div class="single-product-gallery-thumbs gallery-thumbs">

                        <div id="owl-single-product-thumbnails">
                          <?php foreach ($node->field_product_image[LANGUAGE_NONE] as $key2 => $img2): ?>
                              <div class="item">
                                  <a class="horizontal-thumb active" data-target="#owl-single-product"
                                     data-slide="<?php print $key2 ?>"
                                     href="#slide<?php print $key2 ?>">
                                      <img class="img-responsive" width="85" alt=""
                                           src="<?php print image_style_url('product_detail_thumb', $img2['uri']) ?>"
                                           data-echo="<?php print image_style_url('detail_large', $img2['uri']) ?>"/>
                                  </a>
                              </div>
                          <?php endforeach; ?>

                        </div><!-- /#owl-single-product-thumbnails -->


                    </div><!-- /.gallery-thumbs -->

                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->
            <div class='col-sm-6 col-md-7 product-info-block'>
                <div class="product-info">
                    <h1 class="name"><?php print $node->title ?></h1>

                    <div class="rating-reviews m-t-20">
                        <div class="row">
                            <div class="col-sm-3">
                              <?php print render($content['field_vote']) ?>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.rating-reviews -->

                    <div class="price-container info-container m-t-20">
                        <div class="row">


                            <div class="col-sm-6">
                                <div class="price-box">
                                    <span class="price"><?php print _get_price_by_product($node->nid) ?>đ</span>
                                  <?php if ($node->field_old_price[LANGUAGE_NONE][0]['value'] > 0): ?>
                                      <span class="price-strike"><?php print _price_format($node->field_old_price[LANGUAGE_NONE][0]['value']) ?></span>
                                  <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="favorite-button m-t-10">
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                       title="Wishlist" href="/butky/wishlist/<?php print $node->nid ?>?destination=<?php print $_GET['q'] ?>">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>

                        </div><!-- /.row -->
                    </div><!-- /.price-container -->

                    <div class="quantity-container info-container">
                        <div class="row">
                            <?php //print render($content['field_product']) ?>

                            <div class="col-sm-2">
                                <span class="label">Qty :</span>
                            </div>

                            <div class="col-sm-2">
                                <div class="cart-quantity">
                                    <div class="quant-input">
                                        <div class="arrows">
                                            <div class="arrow plus gradient"><span class="ir"><i
                                                            class="icon fa fa-sort-asc"></i></span></div>
                                            <div class="arrow minus gradient"><span class="ir"><i
                                                            class="icon fa fa-sort-desc"></i></span></div>
                                        </div>
                                        <input type="number" class="product-qty" value="1">
                                        <input type="hidden" value="<?php print $node->nid ?>" class="product-nid">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-7">
                                <a href="#" class="btn btn-primary product-add-cart"><i class="fa fa-shopping-cart inner-right-vs"></i>
                                    ADD TO CART</a>
                            </div>

                        </div><!-- /.row -->
                    </div><!-- /.quantity-container -->
                </div><!-- /.product-info -->
            </div><!-- /.col-sm-7 -->
        </div><!-- /.row -->
    </div>

    <div class="product-tabs inner-bottom-xs  wow fadeInUp">
        <div class="row">
            <div class="col-sm-3">
                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                    <li class="active"><a data-toggle="tab" href="#description">THÔNG TIN SẢN PHẨM</a></li>
                    <li><a data-toggle="tab" href="#review">BÌNH LUẬN</a></li>
                </ul><!-- /.nav-tabs #product-tabs -->
            </div>
            <div class="col-sm-9">

                <div class="tab-content">

                    <div id="description" class="tab-pane in active">
                        <div class="product-tab">
                          <?php print render($content['body']) ?>
                        </div>
                    </div><!-- /.tab-pane -->

                    <div id="review" class="tab-pane">
                        <div class="product-tab">

                            <div class="product-reviews">
                              <?php print render($content['comments']); ?>
                            </div><!-- /.product-reviews -->


                        </div><!-- /.product-tab -->
                    </div><!-- /.tab-pane -->


                </div><!-- /.tab-content -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.product-tabs -->
</div><!-- /.product-tabs -->


