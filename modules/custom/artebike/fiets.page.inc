<?php

/**
 * @file
 * Contains fiets.page.inc.
 *
 * Page callback for Fiets entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Fiets templates.
 *
 * Default template: fiets.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_fiets(array &$variables) {
  // Fetch Fiets Entity Object.
  $fiets = $variables['elements']['#fiets'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
