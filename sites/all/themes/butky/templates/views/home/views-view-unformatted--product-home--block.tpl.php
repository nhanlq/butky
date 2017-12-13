<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<section class="section featured-product wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <h3 class="section-title">Sản phẩm mới</h3>
    <div class="search-result-container ">
        <div class="category-product">
            <div class="row">
              <?php foreach ($rows as $id => $row): ?>
                <?php print $row; ?>
              <?php endforeach; ?>
            </div>
            <!-- /.row -->
        </div>

    </div>
</section>
