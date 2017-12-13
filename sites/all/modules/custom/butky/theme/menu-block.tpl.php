<?php
/**
 * Created by PhpStorm.
 * User: nhanl
 * Date: 12/11/2017
 * Time: 10:36 PM
 */
?>
<div class="yamm navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button data-target="#mc-horizontal-menu-collapse"
                data-toggle="collapse"
                class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span> <span
                    class="icon-bar"></span> <span
                    class="icon-bar"></span> <span
                    class="icon-bar"></span></button>
    </div>
    <div class="nav-bg-class">
        <div class="navbar-collapse collapse"
             id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
                <ul class="nav navbar-nav">
                  <?php foreach ($links as $menu): ?>
                  <?php if ($menu['path'] == '<front>' && drupal_is_front_page()): ?>
                    <li class="active dropdown yamm-fw"><a
                                href="<?php print url($menu['path']) ?>"><?php print $menu['menu']->link_title; ?></a>
                    </li>

                    <?php elseif ($menu['path'] == $_GET['q']): ?>
                          <li class="active dropdown yamm-fw"><a
                                      href="<?php print url($menu['path']) ?>"><?php print $menu['menu']->link_title; ?></a>
                          </li>
                    <?php else: ?>
                          <li class="dropdown yamm-fw"><a
                                      href="<?php print url($menu['path']) ?>"><?php print $menu['menu']->link_title; ?></a>
                          </li>
                    <?php endif; ?>
                  <?php endforeach; ?>

                    <li class="dropdown  navbar-right special-menu">
                        <a href="/san-pham/khuyen-mai">Sản phẩm khuyến mãi</a></li>
                </ul>
                <!-- /.navbar-nav -->
                <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.nav-bg-class -->
</div>
<!-- /.navbar-default -->
