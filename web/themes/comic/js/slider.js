(function ($, Drupal, drupalSettings) {

  Drupal.behaviors.slider = {
    attach: function (context, settings) {
      $('.main-slider').slick({
        infinite: true
      })
    }
  };

})(jQuery, Drupal, drupalSettings);
