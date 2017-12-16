<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 12/13/17
 * Time: 3:29 PM
 */
global $user;
?>
<div class="col-xs-12 col-sm-6 col-md-3">
  <div class="module-heading">
    <h4 class="module-title">Liên Hệ</h4>
  </div>
  <!-- /.module-heading -->

  <div class="module-body">
    <ul class="toggle-footer" style="">
      <li class="media">
        <div class="pull-left"><span
              class="icon fa-stack fa-lg"> <i
                class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span>
        </div>
        <div class="media-body">
          <p>73/10F Tân Hải, Phường 13, Quận Tân Bình, Tp. HCM</p>
        </div>
      </li>
      <li class="media">
        <div class="pull-left"><span
              class="icon fa-stack fa-lg"> <i
                class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span>
        </div>
        <div class="media-body">
          <p>08.38120089<br> 08.22448966 <br> 08.38120079</p>
        </div>
      </li>
      <li class="media">
        <div class="pull-left"><span
              class="icon fa-stack fa-lg"> <i
                class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span>
        </div>
        <div class="media-body"><span><a href="mailto:info@sieuthibutky.vn">info@sieuthibutky.vn</a></span>
        </div>
      </li>
    </ul>
  </div>
  <!-- /.module-body -->
</div>


<div class="col-xs-12 col-sm-6 col-md-3">
    <div class="module-heading">
        <h4 class="module-title">Thông Tin Tài Khoản</h4>
    </div>
    <!-- /.module-heading -->

    <div class="module-body">
        <ul class='list-unstyled'>
            <li class="first"><a href="/user" title="my account">Tài khoản</a></li>
            <li><a href="/user/<?php print $user->uid ?>/orders" title="order">Lịch sử đặt hàng</a></li>
          <?php if ($user->uid > 0): ?>
              <li><a href="/user/<?php print $user->uid ?>/wishlist" title="faq">Wishlist</a></li>
          <?php else: ?>
              <li><a href="/user" title="faq">Wishlist</a></li>
          <?php endif; ?>
            <li><a href="/cart/checkout" title="checkout">Thanh toán</a></li>
          <?php if ($user->uid > 0): ?>
              <li class="last"><a href="/user/logout" title="logout">Đăng xuất</a></li>
          <?php else: ?>
              <li class="last"><a href="/user" title="logout">Đăng nhập</a></li>
          <?php endif; ?>
        </ul>
    </div>
    <!-- /.module-body -->
</div>

<!-- /.col -->
<div class="col-xs-12 col-sm-6 col-md-3">
    <div class="module-heading">
        <h4 class="module-title">Hướng dẫn</h4>
    </div>
    <!-- /.module-heading -->

    <div class="module-body">
        <ul class='list-unstyled'>
            <li class="first"><a href="/huong-dan-dat-hang">Hướng dẫn đặt hàng</a></li>
            <li><a href="/huong-dan-thanh-toan" title="">Hướng dẫn thanh toán</a></li>
            <li><a href="/phuong-thuc-giao-hang" title="Company">Phương thức giao hàng</a></li>
            <li><a href="/thoi-gian-giao-hang" title="Company">Thời gian giao hàng</a></li>
            <li><a href="/nha-cung-cap-bao-gia" title="Company">Nhà cung cấp báo giá</a></li>
        </ul>
    </div>
    <!-- /.module-body -->
</div>

<!-- /.col -->
<div class="col-xs-12 col-sm-6 col-md-3">
    <div class="module-heading">
        <h4 class="module-title">CHƯƠNG TRÌNH ƯU ĐÃI</h4>
    </div>
    <!-- /.module-heading -->

    <div class="module-body">
        <ul class='list-unstyled'>
            <li class="first"><a href="/giao-hang-mien-phi">Giao hàng miễn phí</a></li>
            <li><a href="/danh-cho-dai-ly" title="">Dành cho đại lý</a></li>
            <li><a href="/khach-hang-than-thiet" title="Company">Khách hàng thân thiết</a></li>
        </ul>
    </div>
    <!-- /.module-body -->
</div>