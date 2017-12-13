<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
$i = 0;
?>
<div style="margin-top: 30px" class="clearfix"></div>
<div class="sidebar-widget outer-bottom-small wow fadeInUp">
    <h3 class="section-title">Sản phẩm nổi bật</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
          <?php foreach ($rows as $id => $row): $i++; ?>
            <?php if ($id % 3 == 0): ?>
                  <div class="item">
                  <div class="products special-product">
            <?php endif ?>
            <?php print $row; ?>
            <?php if ($id % 3 == 2 || count($rows) == $i): ?>
                  </div>
                  </div>
            <?php endif; ?>


          <?php endforeach; ?>

        </div>
    </div>
    <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->
<!-- ============================================== SPECIAL OFFER : END ============================================== -->
