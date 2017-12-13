<?php
/**
 * Created by PhpStorm.
 * User: nhanl
 * Date: 12/8/2017
 * Time: 9:52 PM
 */
/**
 * Implements hook_preprocess_HOOK() for HTML document templates.
 *
 * Adds body classes if certain regions have content.
 */
function butky_preprocess_html(&$variables) {
  // Add information about the number of sidebars.
  //dsm($variables);
  if (drupal_is_front_page()) {
    //$variables['classes_array'][] = 'cnt-home';
  }
  $variables['classes_array'][] = 'cnt-home';

}

/**
 * Override or insert variables into the page template.
 */
function butky_preprocess_page(&$variables) {
  //add js to footer
  drupal_add_js(drupal_get_path('theme', 'butky') . '/assets/js/bootstrap.min.js', [
    'type' => 'file',
    'scope' => 'footer'
  ]);
  drupal_add_js(drupal_get_path('theme', 'butky') . '/assets/js/bootstrap-hover-dropdown.min.js', [
    'type' => 'file',
    'scope' => 'footer'
  ]);
  drupal_add_js(drupal_get_path('theme', 'butky') . '/assets/js/owl.carousel.min.js', [
    'type' => 'file',
    'scope' => 'footer'
  ]);
  drupal_add_js(drupal_get_path('theme', 'butky') . '/assets/js/echo.min.js', [
    'type' => 'file',
    'scope' => 'footer'
  ]);
  drupal_add_js(drupal_get_path('theme', 'butky') . '/assets/js/jquery.easing-1.3.min.js', [
    'type' => 'file',
    'scope' => 'footer'
  ]);
  drupal_add_js(drupal_get_path('theme', 'butky') . '/assets/js/bootstrap-slider.min.js', [
    'type' => 'file',
    'scope' => 'footer'
  ]);
  drupal_add_js(drupal_get_path('theme', 'butky') . '/assets/js/jquery.rateit.min.js', [
    'type' => 'file',
    'scope' => 'footer'
  ]);
  drupal_add_js(drupal_get_path('theme', 'butky') . '/assets/js/lightbox.min.js', [
    'type' => 'file',
    'scope' => 'footer'
  ]);
  drupal_add_js(drupal_get_path('theme', 'butky') . '/assets/js/bootstrap-select.min.js', [
    'type' => 'file',
    'scope' => 'footer'
  ]);
  drupal_add_js(drupal_get_path('theme', 'butky') . '/assets/js/wow.min.js', [
    'type' => 'file',
    'scope' => 'footer'
  ]);
  drupal_add_js(drupal_get_path('theme', 'butky') . '/assets/js/scripts.js', [
    'type' => 'file',
    'scope' => 'footer'
  ]);

  //add css
  drupal_add_css(drupal_get_path('theme', 'butky') . '/assets/css/bootstrap.min.css');
  drupal_add_css(drupal_get_path('theme', 'butky') . '/assets/css/main.css');
  drupal_add_css(drupal_get_path('theme', 'butky') . '/assets/css/blue.css');
  drupal_add_css(drupal_get_path('theme', 'butky') . '/assets/css/owl.carousel.css');
  drupal_add_css(drupal_get_path('theme', 'butky') . '/assets/css/owl.transitions.css');
  drupal_add_css(drupal_get_path('theme', 'butky') . '/assets/css/animate.min.css');
  drupal_add_css(drupal_get_path('theme', 'butky') . '/assets/css/rateit.css');
  drupal_add_css(drupal_get_path('theme', 'butky') . '/assets/css/bootstrap-select.min.css');
  drupal_add_css(drupal_get_path('theme', 'butky') . '/assets/css/font-awesome.css');
  drupal_add_css(drupal_get_path('theme', 'butky') . '/assets/css/lightbox.css');

}