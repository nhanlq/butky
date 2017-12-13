<?php
/**
 * Created by PhpStorm.
 * User: nhanl
 * Date: 12/11/2017
 * Time: 8:47 PM
 */
?>
<div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

    <div class="dropdown dropdown-cart">
        <a href="#"
           class="dropdown-toggle lnk-cart"
           data-toggle="dropdown">
            <div class="items-cart-inner">
                <div class="basket"><i
                            class="glyphicon glyphicon-shopping-cart"></i></div>
                <div class="basket-item-count"><span
                            class="count"><?php print $qty ?></span>
                </div>
                <div class="total-price-basket"><span
                            class="lbl">giỏ hàng</span></div>
            </div>
        </a>
      <?php if ($qty > 0): ?>
          <ul class="dropdown-menu">
              <li>
                  <div class="cart-item product-summary">
                    <?php foreach ($items as $item): ?>
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="name col-xs-5"><a
                                            href="<?php print url($item->commerce_display_path[LANGUAGE_NONE][0]['value']) ?>">
                                        <?php print $item->line_item_label ?>
                                    </a></h3>
                                <div class="price col-xs-6"><?php print commerce_currency_format($item->commerce_total[LANGUAGE_NONE][0]['amount'],'đ') ?>đ</div>
                                <div class="col-xs-1 action"><a href="<?php print url('item/cart/'.$item->line_item_id.'/deleted',array('query'=>array('destination'=>$_GET['q']))) ?>"><i
                                                class="fa fa-trash"></i></a></div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                  </div>
                  <!-- /.cart-item -->
                  <div class="clearfix"></div>
                  <hr>
                  <div class="clearfix cart-total">
                      <div class="pull-right"><span
                                  class="text">Tổng cộng :</span><span
                                  class='price'><?php print commerce_currency_format($total,'đ') ?>đ</span>
                      </div>
                      <div class="clearfix"></div>
                      <a href="<?php print url('cart/checkout') ?>"
                         class="btn btn-upper btn-primary btn-block m-t-20">Thanh
                          toán</a>
                  </div>
                  <!-- /.cart-total-->

              </li>
          </ul>
      <?php endif; ?>
        <!-- /.dropdown-menu-->
    </div>
    <!-- /.dropdown-cart -->

    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
</div>
<!-- /.top-cart-row -->
</div>