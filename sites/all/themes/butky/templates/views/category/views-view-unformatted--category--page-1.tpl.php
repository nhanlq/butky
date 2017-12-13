<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<section class="section featured-product wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
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
