<?php
/**
 * Created by PhpStorm.
 * User: nhanl
 * Date: 12/12/2017
 * Time: 9:38 PM
 */
?>
<div class="product">
    <div class="product-micro">
        <div class="row product-micro-row">
            <div class="col col-xs-4">
                <div class="product-image">
                    <div class="image">
                        <?php print $fields['field_product_image']->content ?>
                    </div>
                    <!-- /.image -->

                </div>
                <!-- /.product-image -->
            </div>
            <!-- /.col -->
            <div class="col col-xs-8">
                <div class="product-info">
                    <h3 class="name"><?php print $fields['title']->content ?></h3>
                    <?php print $fields['field_vote']->content ?>
                    <div class="product-price">
                        <span class="price"> <?php print _get_price_by_product($fields['nid']->raw) ?>đ </span>
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

