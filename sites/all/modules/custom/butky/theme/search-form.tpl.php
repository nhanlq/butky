<?php
/**
 * Created by PhpStorm.
 * User: nhanl
 * Date: 12/8/2017
 * Time: 11:24 PM
 */
?>
<div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
    <!-- /.contact-row -->
    <!-- ============================================================= SEARCH AREA ============================================================= -->
    <div class="search-area">
        <form action="/search" method="get">
            <div class="control-group">
                        <select name="cat" id="category-search">
                            <option value="All">Danh mục</option>
                          <?php foreach ($terms as $term): ?>
                            <?php if ($term->parents[0] == 0): ?>
                                  <option value="<?php print $term->tid ?>"><?php print $term->name ?></option>
                              <?php $childs = taxonomy_get_children($term->tid); ?>
                              <?php if ($childs): ?>
                                <?php foreach ($childs as $child): ?>
                                          <option value="<?php print $child->tid ?>">-<?php print $child->name ?></option>
                                <?php endforeach; ?>
                              <?php endif; ?>
                            <?php endif ?>
                          <?php endforeach; ?>

                        </select>
                <input name="keyword" class="search-field"
                       placeholder="Tìm sản phẩm..."/>
                <button class="search-button" type="submit"></button>
            </div>
        </form>
    </div>
    <!-- /.search-area -->
    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
</div>
