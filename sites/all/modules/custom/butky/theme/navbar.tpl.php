<?php
/**
 * Created by PhpStorm.
 * User: nhanl
 * Date: 12/12/2017
 * Time: 8:34 PM
 */
?>
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>
        Danh mục
    </div>
    <nav class="yamm megamenu-horizontal">
        <ul class="nav">
          <?php foreach ($terms as $term): ?>
            <?php if ($term->parents[0] == 0): ?>
                  <li class="dropdown menu-item">
                      <a href="<?php print url('taxonomy/term/' . $term->tid) ?>"
                         class="dropdown-toggle"
                         data-toggle="dropdown"><i
                                  class="icon fa fa-pencil-square-o"
                                  aria-hidden="true"></i><?php print $term->name ?>
                      </a>
                      <!-- ================================== MEGAMENU VERTICAL ================================== -->
                    <?php if ($children = taxonomy_get_children($term->tid)): ?>
                        <ul class="dropdown-menu mega-menu">
                          <?php foreach ($children as $child): ?>
                              <li>
                                  <a href="<?php print url('taxonomy/term/' . $child->tid) ?>"><?php print $child->name ?></a>
                              </li>
                          <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                      <!-- ================================== MEGAMENU VERTICAL ================================== -->
                  </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
        <!-- /.nav -->
    </nav>
    <!-- /.megamenu-horizontal -->
</div>
