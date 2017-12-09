<?php

/**
 * @file
 * Contains fietstype.page.inc.
 *
 * Page callback for Fietstype entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Fietstype templates.
 *
 * Default template: fietstype.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_fietstype(array &$variables) {
  // Fetch Fietstype Entity Object.
  $fietstype = $variables['elements']['#fietstype'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
