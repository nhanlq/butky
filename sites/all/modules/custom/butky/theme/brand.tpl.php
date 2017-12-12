<?php
/**
 * Created by PhpStorm.
 * User: nhanl
 * Date: 12/12/2017
 * Time: 9:06 PM
 */
?>
<div class="sidebar-module-container">
    <div class="sidebar-filter">
        <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
        <div class="sidebar-widget wow fadeInUp">
            <h3 class="section-title">Nhà sản xuất</h3>
            <div class="sidebar-widget-body">
                <div class="accordion">
                  <?php foreach ($terms as $term): ?>
                    <?php if ($term->parents[0] == 0): ?>
                      <?php $brand = taxonomy_term_load($term->tid); ?>
                          <div class="accordion-group">
                              <div class="accordion-heading">
                                  <a href="#collapse<?php print $term->tid ?>"
                                     data-toggle="collapse"
                                     class="accordion-toggle collapsed">
                                    <?php if ($brand->field_image[LANGUAGE_NONE]): ?>
                                      <?php print theme('image_style', [
                                        'path' => $brand->field_image[LANGUAGE_NONE][0]['uri'],
                                        'style_name' => 'brand_nav',
                                      ]) ?>
                                    <?php endif; ?>
                                      &nbsp;&nbsp;<?php print $term->name ?>
                                  </a>
                              </div>
                              <!-- /.accordion-heading -->
                            <?php if ($children = taxonomy_get_children($term->tid)): ?>
                                <div class="accordion-body collapse"
                                     id="collapse<?php print $term->tid ?>"
                                     style="height: 0px;">
                                    <div class="accordion-inner">
                                        <ul>
                                          <?php foreach ($children as $child): ?>
                                              <li>
                                                  <a href="<?php print url('taxonomy/term/' . $child->tid) ?>"><?php print $child->name ?></a>
                                              </li>
                                          <?php endforeach; ?>

                                        </ul>
                                    </div>
                                    <!-- /.accordion-inner -->
                                </div>
                            <?php endif; ?>
                              <!-- /.accordion-body -->
                          </div>
                    <?php endif; ?>
                      <!-- /.accordion-group -->
                  <?php endforeach; ?>
                    <!-- /.accordion-group -->

                </div>
                <!-- /.accordion -->
            </div>
            <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->
    </div>
</div>
