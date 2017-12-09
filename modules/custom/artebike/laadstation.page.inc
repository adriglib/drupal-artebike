<?php

/**
 * @file
 * Contains laadstation.page.inc.
 *
 * Page callback for Laadstation entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Laadstation templates.
 *
 * Default template: laadstation.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_laadstation(array &$variables) {
  // Fetch Laadstation Entity Object.
  $laadstation = $variables['elements']['#laadstation'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
