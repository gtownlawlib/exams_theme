<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

 /**
  * Override Bootstrap base theme's implementation.
  */
 function exams_theme_menu_local_action($variables) {
   return theme_menu_local_action($variables);
 }

 function exams_theme_menu_link(array $variables) {
   return theme_menu_link($variables);
 }
