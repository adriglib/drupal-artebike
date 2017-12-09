<?php

/**
 * @file
 * Contains reservatie.page.inc.
 *
 * Page callback for Reservatie entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Reservatie templates.
 *
 * Default template: reservatie.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_reservatie(array &$variables) {
  // Fetch Reservatie Entity Object.
  $reservatie = $variables['elements']['#reservatie'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
