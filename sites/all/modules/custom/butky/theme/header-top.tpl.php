<?php
/**
 * Created by PhpStorm.
 * User: nhanl
 * Date: 12/8/2017
 * Time: 11:03 PM
 */
?>
<div class="top-bar animate-dropdown">
    <div class="container">
        <div class="header-top-inner">
            <div class="cnt-account">
                <ul class="list-unstyled">
                    <li><a href="/user"><i class="icon fa fa-user"></i>My
                            Account</a></li>
                  <?php if ($user->uid <= 0): ?>
                    <li><a href="/user"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                    <?php else: ?>
                      <li><a href="/user/<?php print $user->uid ?>/wishlist"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                    <?php endif; ?>
                    <li><a href="/cart"><i class="icon fa fa-shopping-cart"></i>My
                            Cart</a></li>
                    <li><a href="/cart/checkout"><i class="icon fa fa-check"></i>Checkout</a>
                    </li>
                    <li>
                      <?php if ($user->uid <= 0): ?>
                          <a href="/user"><i class="icon fa fa-lock"></i>Đăng
                              nhập </a>
                      <?php else: ?>
                          <a href="/user/logout"><i class="icon fa fa-lock"></i>Đăng
                              xuất </a>
                      <?php endif; ?>

                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
</div>