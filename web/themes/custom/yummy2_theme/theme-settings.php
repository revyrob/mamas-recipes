<?php

/**
 * @file
 * Functions to support Ice Cream theme settings.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter() for system_theme_settings.
 */
function yummy2_theme_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $form['yummy2_settings']['yummy2_colors'] = [
    '#type' => 'fieldset',
    '#title' => t('Yummy2 colors'),
  ];
  $form['yummy2_settings']['yummy2_colors']['site_branding_bg_color'] = [
    '#type' => 'select',
    '#title' => t('Header site branding background color'),
    '#options' => [
      'strawberry' => t('Strawberry'),
      'vanilla' => t('Vanilla'),
      'chocolate' => t('Chocolate'),
    ],
    '#default_value' => theme_get_setting('site_branding_bg_color'),
  ];
}