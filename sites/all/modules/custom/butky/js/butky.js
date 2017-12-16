(function ($) {

    Drupal.behaviors.initArtline = {
        attach: function (context, settings) {
          $("select#category-search").chosen();

          $("td.component-title").text('Tổng Cộng');
          $("span.line-item-total-label").text('Tổng Cộng')
        }
    };

})(jQuery);