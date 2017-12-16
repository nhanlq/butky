<?php
/**
 * @file
 * Main page template.
 */
?>
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
<<<<<<< HEAD
    <?php if($page['header_top']): ?>
     <?php print render($page['header_top']); ?>
    <?php endif; ?>
=======
  <?php if ($page['header_top']): ?>
    <?php print render($page['header_top']); ?>
  <?php endif; ?>
>>>>>>> dev
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                  <?php if ($logo): ?>
                      <div class="logo">
                          <a href="<?php print $front_page; ?>"
                             title="<?php print t('Home'); ?>" rel="home">
                              <img src="<?php print $logo; ?>"
                                   alt="<?php print t('Home'); ?>"/>
                          </a>
                      </div>
                  <?php endif; ?>
                    <!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div>
                <!-- /.logo-holder -->
<<<<<<< HEAD
                <?php if($page['header']): ?>
                    <?php print render($page['header']) ?>
                <?php endif; ?>
=======
              <?php if ($page['header']): ?>
                <?php print render($page['header']) ?>
              <?php endif; ?>
>>>>>>> dev
                <!-- /.top-search-holder -->
                <!-- /.top-cart-row -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
<<<<<<< HEAD
    <?php if($page['nav']): ?>
    <div class="header-nav animate-dropdown">
        <div class="container">
            <?php print render($page['nav']) ?>
        </div>
        <!-- /.container-class -->
    </div>
    <!-- /.header-nav -->
    <?php endif; ?>
=======
  <?php if ($page['nav']): ?>
      <div class="header-nav animate-dropdown">
          <div class="container">
            <?php print render($page['nav']) ?>
          </div>
          <!-- /.container-class -->
      </div>
      <!-- /.header-nav -->
  <?php endif; ?>
>>>>>>> dev
    <!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
<<<<<<< HEAD
            <?php if($page['sidebar_left']): ?>
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <!-- ================================== TOP NAVIGATION ================================== -->
                <?php print render($page['sidebar_left']); ?>
                <!-- ============================================== SPECIAL OFFER ============================================== -->

                 <!-- ============================================== PRODUCT TAGS ============================================== -->
                <div class="sidebar-widget product-tag wow fadeInUp">
                    <h3 class="section-title">Product tags</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="tag-list"><a class="item" title="Phone"
                                                 href="category.html">Phone</a>
                            <a class="item active" title="Vest"
                               href="category.html">Vest</a> <a class="item"
                                                                title="Smartphone"
                                                                href="category.html">Smartphone</a>
                            <a class="item" title="Furniture"
                               href="category.html">Furniture</a> <a
                                    class="item" title="T-shirt"
                                    href="category.html">T-shirt</a> <a
                                    class="item" title="Sweatpants"
                                    href="category.html">Sweatpants</a> <a
                                    class="item" title="Sneaker"
                                    href="category.html">Sneaker</a> <a
                                    class="item" title="Toys"
                                    href="category.html">Toys</a> <a
                                    class="item" title="Rose"
                                    href="category.html">Rose</a></div>
                        <!-- /.tag-list -->
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                <!-- ============================================== SPECIAL DEALS ============================================== -->

                <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                    <h3 class="section-title">Special Deals</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p28.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print Shirt</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p15.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print Shirt</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p26.jpg"
                                                                     alt="image">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print Shirt</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p18.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print Shirt</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p17.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print Shirt</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p16.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print Shirt</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p15.jpg"
                                                                     alt="images">
                                                                <div class="zoom-overlay"></div>
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print Shirt</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p14.jpg"
                                                                     alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print Shirt</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p13.jpg"
                                                                     alt="image">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print Shirt</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL DEALS : END ============================================== -->
                <!-- ============================================== NEWSLETTER ============================================== -->
                <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
                    <h3 class="section-title">Newsletters</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <p>Sign Up for Our Newsletter!</p>
                        <form>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail1">Email
                                    address</label>
                                <input type="email" class="form-control"
                                       id="exampleInputEmail1"
                                       placeholder="Subscribe to our newsletter">
                            </div>
                            <button class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== NEWSLETTER: END ============================================== -->

                <!-- ============================================== Testimonials============================================== -->
                <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                    <div id="advertisement" class="advertisement">
                        <div class="item">
                            <div class="avatar"><img
                                        src="/sites/all/themes/butky/assets/images/testimonials/member1.png"
                                        alt="Image"></div>
                            <div class="testimonials"><em>"</em> Vtae sodales
                                aliq uam morbi non sem lacus port mollis. Nunc
                                condime tum metus eud molest sed
                                consectetuer.<em>"</em></div>
                            <div class="clients_author">John Doe <span>Abc Company</span>
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                        <div class="item">
                            <div class="avatar"><img
                                        src="/sites/all/themes/butky/assets/images/testimonials/member3.png"
                                        alt="Image"></div>
                            <div class="testimonials"><em>"</em>Vtae sodales
                                aliq uam morbi non sem lacus port mollis. Nunc
                                condime tum metus eud molest sed
                                consectetuer.<em>"</em></div>
                            <div class="clients_author">Stephen Doe <span>Xperia Designs</span>
                            </div>
                        </div>
                        <!-- /.item -->

                        <div class="item">
                            <div class="avatar"><img
                                        src="/sites/all/themes/butky/assets/images/testimonials/member2.png"
                                        alt="Image"></div>
                            <div class="testimonials"><em>"</em> Vtae sodales
                                aliq uam morbi non sem lacus port mollis. Nunc
                                condime tum metus eud molest sed
                                consectetuer.<em>"</em></div>
                            <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span>
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                    </div>
                    <!-- /.owl-carousel -->
                </div>

                <!-- ============================================== Testimonials: END ============================================== -->

                <div class="home-banner"><img
                            src="/sites/all/themes/butky/assets/images/banners/LHS-banner.jpg"
                            alt="Image"></div>
            </div>
            <!-- /.sidemenu-holder -->
            <?php endif; ?>
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main"
                         class="owl-carousel owl-inner-nav owl-ui-sm">
                        <div class="item"
                             style="background-image: url(/sites/all/themes/butky/assets/images/sliders/01.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">Top
                                        Brands
                                    </div>
                                    <div class="big-text fadeInDown-1"> New
                                        Collections
                                    </div>
                                    <div class="excerpt fadeInDown-2 hidden-xs">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    </div>
                                    <div class="button-holder fadeInDown-3"><a
                                                href="index.php?page=single-product"
                                                class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                            Now</a></div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                        <div class="item"
                             style="background-image: url(/sites/all/themes/butky/assets/images/sliders/02.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color txt-white vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">
                                        Spring 2016
                                    </div>
                                    <div class="big-text fadeInDown-1"> Electro
                                        Sale
                                    </div>
                                    <div class="excerpt fadeInDown-2 hidden-xs">
                                        <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span>
                                    </div>
                                    <div class="button-holder fadeInDown-3"><a
                                                href="index.php?page=single-product"
                                                class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                            Now</a></div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                    </div>
                    <!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->

                <!-- ============================================== INFO BOXES ============================================== -->
                <div class="info-boxes wow fadeInUp">
                    <div class="info-boxes-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">
                                                money back</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">30 Days Money Back
                                        Guarantee</h6>
                                </div>
                            </div>
                            <!-- .col -->

                            <div class="hidden-md col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">
                                                free shipping</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">Shipping on orders over
                                        $99</h6>
                                </div>
                            </div>
                            <!-- .col -->

                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">
                                                Special Sale</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">Extra $5 off on all
                                        items </h6>
                                </div>
                            </div>
                            <!-- .col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.info-boxes-inner -->

                </div>
                <!-- /.info-boxes -->
                <!-- ============================================== INFO BOXES : END ============================================== -->
                <!-- ============================================== SCROLL TABS ============================================== -->
                <div id="product-tabs-slider"
                     class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">New
                            Products</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right"
                            id="new-products-1">
                            <li class="active"><a
                                        data-transition-type="backSlide"
                                        href="#all" data-toggle="tab">All</a>
                            </li>
                            <li><a data-transition-type="backSlide"
                                   href="#smartphone"
                                   data-toggle="tab">Clothing</a></li>
                            <li><a data-transition-type="backSlide"
                                   href="#laptop"
                                   data-toggle="tab">Electronics</a></li>
                            <li><a data-transition-type="backSlide"
                                   href="#apple" data-toggle="tab">Shoes</a>
                            </li>
                        </ul>
                        <!-- /.nav-tabs -->
                    </div>
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme"
                                     data-item="4">
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p1.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button data-toggle="tooltip"
                                                                        class="btn btn-primary icon"
                                                                        type="button"
                                                                        title="Add Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a data-toggle="tooltip"
                                                                   class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        data-toggle="tooltip"
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p2.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p4.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p3.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p30.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p29.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="smartphone">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p5.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p6.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p7.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p8.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p9.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p10.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="laptop">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p11.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p12.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p13.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p14.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p15.jpg"
                                                                    alt="image"></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p16.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Apple
                                                            Iphone 5s 32GB</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="apple">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p18.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p18.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p17.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p16.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p13.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Floral
                                                            Print Buttoned</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                                href="detail.html"><img
                                                                    src="/sites/all/themes/butky/assets/images/products/p14.jpg"
                                                                    alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                                href="detail.html">Samsung
                                                            Galaxy S4</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> $450.99 </span>
                                                        <span class="price-before-discount">$ 800</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown"
                                                                        type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                        type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"
                                                                   href="detail.html"
                                                                   title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a></li>
                                                            <li class="lnk"><a
                                                                        class="add-to-cart"
                                                                        href="detail.html"
                                                                        title="Compare">
                                                                    <i class="fa fa-signal"
                                                                       aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.scroll-tabs -->
                <!-- ============================================== SCROLL TABS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="wide-banner cnt-strip">
                                <div class="image"><img class="img-responsive"
                                                        src="/sites/all/themes/butky/assets/images/banners/home-banner1.jpg"
                                                        alt=""></div>
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-5 col-sm-5">
                            <div class="wide-banner cnt-strip">
                                <div class="image"><img class="img-responsive"
                                                        src="/sites/all/themes/butky/assets/images/banners/home-banner2.jpg"
                                                        alt=""></div>
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.wide-banners -->

                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">Featured products</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/products/p5.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/products/p6.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/blank.gif"
                                                        data-echo="/sites/all/themes/butky/assets/images/products/p7.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/products/p8.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/products/p9.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/products/p10.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wide-banner cnt-strip">
                                <div class="image"><img class="img-responsive"
                                                        src="/sites/all/themes/butky/assets/images/banners/home-banner.jpg"
                                                        alt=""></div>
                                <div class="strip strip-text">
                                    <div class="strip-inner">
                                        <h2 class="text-right">New Mens
                                            Fashion<br>
                                            <span class="shopping-needs">Save up to 40% off</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="new-label">
                                    <div class="text">NEW</div>
                                </div>
                                <!-- /.new-label -->
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.wide-banners -->
                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                <!-- ============================================== BEST SELLER ============================================== -->

                <div class="best-deal wow fadeInUp outer-bottom-xs">
                    <h3 class="section-title">Best seller</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p20.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print
                                                                Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p21.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print
                                                                Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p22.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print
                                                                Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p23.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print
                                                                Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p24.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print
                                                                Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p25.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print
                                                                Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p26.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print
                                                                Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"><a
                                                                    href="#">
                                                                <img src="/sites/all/themes/butky/assets/images/products/p27.jpg"
                                                                     alt="">
                                                            </a></div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                    href="#">Floral
                                                                Print
                                                                Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price"> $450.99 </span>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== BEST SELLER : END ============================================== -->

                <!-- ============================================== BLOG SLIDER ============================================== -->
                <section
                        class="section latest-blog outer-bottom-vs wow fadeInUp">
                    <h3 class="section-title">latest form blog</h3>
                    <div class="blog-slider-container outer-top-xs">
                        <div class="owl-carousel blog-slider custom-carousel">
                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image"><a
                                                    href="blog.html"><img
                                                        src="/sites/all/themes/butky/assets/images/blog-post/post1.jpg"
                                                        alt=""></a></div>
                                    </div>
                                    <!-- /.blog-post-image -->

                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Voluptatem
                                                accusantium doloremque
                                                laudantium</a></h3>
                                        <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                                        <p class="text">Sed quia non numquam
                                            eius modi tempora incidunt ut labore
                                            et dolore magnam aliquam quaerat
                                            voluptatem.</p>
                                        <a href="#" class="lnk btn btn-primary">Read
                                            more</a></div>
                                    <!-- /.blog-post-info -->

                                </div>
                                <!-- /.blog-post -->
                            </div>
                            <!-- /.item -->

                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image"><a
                                                    href="blog.html"><img
                                                        src="/sites/all/themes/butky/assets/images/blog-post/post2.jpg"
                                                        alt=""></a></div>
                                    </div>
                                    <!-- /.blog-post-image -->

                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Dolorem eum
                                                fugiat quo voluptas nulla
                                                pariatur</a></h3>
                                        <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                        <p class="text">Sed quia non numquam
                                            eius modi tempora incidunt ut labore
                                            et dolore magnam aliquam quaerat
                                            voluptatem.</p>
                                        <a href="#" class="lnk btn btn-primary">Read
                                            more</a></div>
                                    <!-- /.blog-post-info -->

                                </div>
                                <!-- /.blog-post -->
                            </div>
                            <!-- /.item -->

                            <!-- /.item -->

                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image"><a
                                                    href="blog.html"><img
                                                        src="/sites/all/themes/butky/assets/images/blog-post/post1.jpg"
                                                        alt=""></a></div>
                                    </div>
                                    <!-- /.blog-post-image -->

                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Dolorem eum
                                                fugiat quo voluptas nulla
                                                pariatur</a></h3>
                                        <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                        <p class="text">Sed ut perspiciatis unde
                                            omnis iste natus error sit
                                            voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read
                                            more</a></div>
                                    <!-- /.blog-post-info -->

                                </div>
                                <!-- /.blog-post -->
                            </div>
                            <!-- /.item -->

                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image"><a
                                                    href="blog.html"><img
                                                        src="/sites/all/themes/butky/assets/images/blog-post/post2.jpg"
                                                        alt=""></a></div>
                                    </div>
                                    <!-- /.blog-post-image -->

                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Dolorem eum
                                                fugiat quo voluptas nulla
                                                pariatur</a></h3>
                                        <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                        <p class="text">Sed ut perspiciatis unde
                                            omnis iste natus error sit
                                            voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read
                                            more</a></div>
                                    <!-- /.blog-post-info -->

                                </div>
                                <!-- /.blog-post -->
                            </div>
                            <!-- /.item -->

                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image"><a
                                                    href="blog.html"><img
                                                        src="/sites/all/themes/butky/assets/images/blog-post/post1.jpg"
                                                        alt=""></a></div>
                                    </div>
                                    <!-- /.blog-post-image -->

                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Dolorem eum
                                                fugiat quo voluptas nulla
                                                pariatur</a></h3>
                                        <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                        <p class="text">Sed ut perspiciatis unde
                                            omnis iste natus error sit
                                            voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read
                                            more</a></div>
                                    <!-- /.blog-post-info -->

                                </div>
                                <!-- /.blog-post -->
                            </div>
                            <!-- /.item -->

                        </div>
                        <!-- /.owl-carousel -->
                    </div>
                    <!-- /.blog-slider-container -->
                </section>
                <!-- /.section -->
                <!-- ============================================== BLOG SLIDER : END ============================================== -->

                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <section class="section wow fadeInUp new-arriavls">
                    <h3 class="section-title">New Arrivals</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/products/p19.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/products/p28.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/products/p30.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/products/p1.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/products/p2.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"><a
                                                    href="detail.html"><img
                                                        src="/sites/all/themes/butky/assets/images/products/p3.jpg"
                                                        alt=""></a></div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span>
                                        </div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral
                                                Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"><span
                                                    class="price"> $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon"
                                                            data-toggle="dropdown"
                                                            type="button"><i
                                                                class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn"
                                                            type="button">Add to
                                                        cart
                                                    </button>
                                                </li>
                                                <li class="lnk wishlist"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Wishlist"> <i
                                                                class="icon fa fa-heart"></i>
                                                    </a></li>
                                                <li class="lnk"><a
                                                            class="add-to-cart"
                                                            href="detail.html"
                                                            title="Compare"> <i
                                                                class="fa fa-signal"
                                                                aria-hidden="true"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

            </div>
            <!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div>
        <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">
            <div class="logo-slider-inner">
                <div id="brand-slider"
                     class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15"><a href="#" class="image"> <img
                                    data-echo="/sites/all/themes/butky/assets/images/brands/brand1.png"
                                    src="/sites/all/themes/butky/assets/images/blank.gif"
                                    alt=""> </a></div>
                    <!--/.item-->

                    <div class="item m-t-10"><a href="#" class="image"> <img
                                    data-echo="/sites/all/themes/butky/assets/images/brands/brand2.png"
                                    src="/sites/all/themes/butky/assets/images/blank.gif"
                                    alt=""> </a></div>
                    <!--/.item-->

                    <div class="item"><a href="#" class="image"> <img
                                    data-echo="/sites/all/themes/butky/assets/images/brands/brand3.png"
                                    src="/sites/all/themes/butky/assets/images/blank.gif"
                                    alt=""> </a></div>
                    <!--/.item-->

                    <div class="item"><a href="#" class="image"> <img
                                    data-echo="/sites/all/themes/butky/assets/images/brands/brand4.png"
                                    src="/sites/all/themes/butky/assets/images/blank.gif"
                                    alt=""> </a></div>
                    <!--/.item-->

                    <div class="item"><a href="#" class="image"> <img
                                    data-echo="/sites/all/themes/butky/assets/images/brands/brand5.png"
                                    src="/sites/all/themes/butky/assets/images/blank.gif"
                                    alt=""> </a></div>
                    <!--/.item-->

                    <div class="item"><a href="#" class="image"> <img
                                    data-echo="/sites/all/themes/butky/assets/images/brands/brand6.png"
                                    src="/sites/all/themes/butky/assets/images/blank.gif"
                                    alt=""> </a></div>
                    <!--/.item-->

                    <div class="item"><a href="#" class="image"> <img
                                    data-echo="/sites/all/themes/butky/assets/images/brands/brand2.png"
                                    src="/sites/all/themes/butky/assets/images/blank.gif"
                                    alt=""> </a></div>
                    <!--/.item-->

                    <div class="item"><a href="#" class="image"> <img
                                    data-echo="/sites/all/themes/butky/assets/images/brands/brand4.png"
                                    src="/sites/all/themes/butky/assets/images/blank.gif"
                                    alt=""> </a></div>
                    <!--/.item-->

                    <div class="item"><a href="#" class="image"> <img
                                    data-echo="/sites/all/themes/butky/assets/images/brands/brand1.png"
                                    src="/sites/all/themes/butky/assets/images/blank.gif"
                                    alt=""> </a></div>
                    <!--/.item-->

                    <div class="item"><a href="#" class="image"> <img
                                    data-echo="/sites/all/themes/butky/assets/images/brands/brand5.png"
                                    src="/sites/all/themes/butky/assets/images/blank.gif"
                                    alt=""> </a></div>
                    <!--/.item-->
                </div>
                <!-- /.owl-carousel #logo-slider -->
            </div>
            <!-- /.logo-slider-inner -->

        </div>
        <!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div>
    <!-- /.container -->
</div>
<?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
        <?php print $messages; ?>
        </div></div> <!-- /.section, /#messages -->
<?php endif; ?>
<?php print render($page['content']); ?>
<!-- /#top-banner-and-menu -->
=======
          <?php if ($page['sidebar_left']): ?>
              <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                  <!-- ================================== TOP NAVIGATION ================================== -->
                <?php print render($page['sidebar_left']); ?>

              </div>
              <!-- /.sidemenu-holder -->
          <?php endif; ?>
            <!-- ============================================== SIDEBAR : END ============================================== -->
            <!-- ============================================== CONTENT ============================================== -->

          <?php if ($page['content_before']): ?>
              <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <?php print render($page['content_before']) ?>
              </div>
          <?php endif; ?>


            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
              <?php if ($messages): ?>
                  <div id="messages"><div class="section clearfix">
                      <?php print $messages; ?>
                      </div></div> <!-- /.section, /#messages -->
              <?php endif; ?>
                <a id="main-content"></a>
              <?php print render($title_prefix); ?>
              <?php if ($title): ?>
                  <h1 class="title" id="page-title">
                    <?php print $title; ?>
                  </h1>
              <?php endif; ?>
              <?php print render($title_suffix); ?>
              <?php if ($tabs): ?>
                  <div class="tabs">
                    <?php print render($tabs); ?>
                  </div>
              <?php endif; ?>
              <?php print render($page['help']); ?>
              <?php if ($action_links): ?>
                  <ul class="action-links">
                    <?php print render($action_links); ?>
                  </ul>
              <?php endif; ?>
              <?php print render($page['content']); ?>
              <?php print $feed_icons; ?>
            </div>


        </div>
        <!-- /.homebanner-holder -->
        <!-- ============================================== CONTENT : END ============================================== -->
    </div>
</div>
<!-- /.container -->
>>>>>>> dev

<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
<<<<<<< HEAD
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
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
                                    <p>ThemesGround, 789 Main rd, Anytown, CA
                                        12345 USA</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-left"><span
                                            class="icon fa-stack fa-lg"> <i
                                                class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span>
                                </div>
                                <div class="media-body">
                                    <p>+(888) 123-4567<br>
                                        +(888) 456-7890</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-left"><span
                                            class="icon fa-stack fa-lg"> <i
                                                class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span>
                                </div>
                                <div class="media-body"><span><a href="#">Hexino@themesground.com</a></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Customer Service</h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="Contact us">My
                                    Account</a></li>
                            <li><a href="#" title="About us">Order History</a>
                            </li>
                            <li><a href="#" title="faq">FAQ</a></li>
                            <li><a href="#"
                                   title="Popular Searches">Specials</a></li>
                            <li class="last"><a href="#"
                                                title="Where is my order?">Help
                                    Center</a></li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Corporation</h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a title="Your Account" href="#">About
                                    us</a></li>
                            <li><a title="Information" href="#">Customer
                                    Service</a></li>
                            <li><a title="Addresses" href="#">Company</a></li>
                            <li><a title="Addresses" href="#">Investor
                                    Relations</a></li>
                            <li class="last"><a title="Orders History" href="#">Advanced
                                    Search</a></li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Why Choose Us</h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="About us">Shopping
                                    Guide</a></li>
                            <li><a href="#" title="Blog">Blog</a></li>
                            <li><a href="#" title="Company">Company</a></li>
                            <li><a href="#" title="Investor Relations">Investor
                                    Relations</a></li>
                            <li class=" last"><a href="contact-us.html"
                                                 title="Suppliers">Contact
                                    Us</a></li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
=======
                <?php if($page['footer']): ?>
                <?php print render($page['footer']) ?>
                <?php endif; ?>
>>>>>>> dev
            </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
<<<<<<< HEAD
                <ul class="link">
                    <li class="fb pull-left"><a target="_blank" rel="nofollow"
                                                href="#" title="Facebook"></a>
                    </li>
                    <li class="tw pull-left"><a target="_blank" rel="nofollow"
                                                href="#" title="Twitter"></a>
                    </li>
                    <li class="googleplus pull-left"><a target="_blank"
                                                        rel="nofollow" href="#"
                                                        title="GooglePlus"></a>
                    </li>
                    <li class="rss pull-left"><a target="_blank" rel="nofollow"
                                                 href="#" title="RSS"></a></li>
                    <li class="pintrest pull-left"><a target="_blank"
                                                      rel="nofollow" href="#"
                                                      title="PInterest"></a>
                    </li>
                    <li class="linkedin pull-left"><a target="_blank"
                                                      rel="nofollow" href="#"
                                                      title="Linkedin"></a></li>
                    <li class="youtube pull-left"><a target="_blank"
                                                     rel="nofollow" href="#"
                                                     title="Youtube"></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li>
                            <img src="/sites/all/themes/butky/assets/images/payments/1.png"
                                 alt=""></li>
                        <li>
                            <img src="/sites/all/themes/butky/assets/images/payments/2.png"
                                 alt=""></li>
                        <li>
                            <img src="/sites/all/themes/butky/assets/images/payments/3.png"
                                 alt=""></li>
                        <li>
                            <img src="/sites/all/themes/butky/assets/images/payments/4.png"
                                 alt=""></li>
                        <li>
                            <img src="/sites/all/themes/butky/assets/images/payments/5.png"
                                 alt=""></li>
                    </ul>
=======
                <p>Copyright © 2017. License by sieuthibutky.vn. All Right Reserved.</p>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <p><a href="https://www.sieuthibutky.vn">www.sieuthibutky.vn</a></p>
>>>>>>> dev
                </div>
                <!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->
