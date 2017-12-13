<?php
/**
 * @file
 * Main page template.
 */
?>
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
  <?php if ($page['header_top']): ?>
    <?php print render($page['header_top']); ?>
  <?php endif; ?>
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
              <?php if ($page['header']): ?>
                <?php print render($page['header']) ?>
              <?php endif; ?>
                <!-- /.top-search-holder -->
                <!-- /.top-cart-row -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
  <?php if ($page['nav']): ?>
      <div class="header-nav animate-dropdown">
          <div class="container">
            <?php print render($page['nav']) ?>
          </div>
          <!-- /.container-class -->
      </div>
      <!-- /.header-nav -->
  <?php endif; ?>
    <!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
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

<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <?php if($page['footer']): ?>
                <?php print render($page['footer']) ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <p>Copyright © 2017. License by sieuthibutky.vn. All Right Reserved.</p>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <p><a href="https://www.sieuthibutky.vn">www.sieuthibutky.vn</a></p>
                </div>
                <!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->
