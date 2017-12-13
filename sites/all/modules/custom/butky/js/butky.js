(function ($) {

    Drupal.behaviors.initArtline = {
        attach: function (context, settings) {
          $("select#category-search").chosen();
        }
    };

})(jQuery);