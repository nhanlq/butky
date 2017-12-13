<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 12/13/17
 * Time: 1:24 PM
 */
?>
<div class="col-sm-6 col-md-3 wow fadeInUp">
    <div class="products">
        <div class="product">
            <div class="product-image">
                <div class="image"><?php print $fields['field_product_image']->content ?></div>
                <!-- /.image -->
              <?php if (strip_tags($fields['field_old_price']->content) > 0): ?>
                  <div class="tag sale"><span>sale</span></div>
              <?php endif; ?>
            </div>
            <!-- /.product-image -->

            <div class="product-info text-left">
                <h3 class="name"><?php print $fields['title']->content ?></h3>
              <?php print $fields['field_vote']->content ?>
                <div class="description"></div>
                <div class="product-price">
                    <span class="price"> <?php print _get_price_by_product($fields['nid']->raw) ?>đ </span>
                    <span class="price-before-discount"><?php print _price_format(strip_tags($fields['field_old_price']->content)) ?>
                        đ</span>
                </div>
                <!-- /.product-price -->

            </div>
            <!-- /.product-info -->
            <div class="cart clearfix animate-effect">
                <div class="action">
                    <ul class="list-unstyled">
                        <li class="lnk wishlist add-cart-button btn-group">
                            <a class="add-to-cart"
                               href="/butky/cart/<?php print $fields['nid']->raw ?>?destination=<?php print $_GET['q'] ?>"
                               title="Add to cart"> <i
                                        class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk wishlist"><a class="add-to-cart"
                                                    href="/butky/wishlist/<?php print $fields['nid']->raw ?>?destination=<?php print $_GET['q'] ?>"
                                                    title="Wishlist"> <i
                                        class="icon fa fa-heart"></i> </a></li>
                        <li class="lnk"><a class="add-to-cart" href="<?php print url('node/' . $fields['nid']->raw) ?>"
                                           title="Compare"> <i
                                        class="fa fa-pencil-square-o"></i> </a></li>
                    </ul>
                </div>
                <!-- /.action -->
            </div>
            <!-- /.cart -->
        </div>
    </div>
</div>
