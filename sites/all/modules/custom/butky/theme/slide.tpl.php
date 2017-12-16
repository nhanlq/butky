<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 12/13/17
 * Time: 12:16 PM
 */
?>

<!-- ========================================== SECTION – HERO ========================================= -->
<?php if ($nodes): ?>
<div id="hero">
    <div id="owl-main"
         class="owl-carousel owl-inner-nav owl-ui-sm">
        <?php foreach($nodes as $node): ?>
        <div class="item"
             style="background-image: url(<?php print image_style_url('slide',$node->field_image['und'][0]['uri']) ?>);">
            <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left"></div>
                <!-- /.caption -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.item -->
        <?php endforeach; ?>

    </div>
</div>
    <!-- /.owl-carousel -->
  <?php endif; ?>

    <!-- ========================================= SECTION – HERO : END ========================================= -->

