<?php

namespace Drupal\artebike\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Fiets entities.
 *
 * @ingroup artebike
 */
interface FietsInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Fiets name.
   *
   * @return string
   *   Name of the Fiets.
   */
  public function getName();

  /**
   * Sets the Fiets name.
   *
   * @param string $name
   *   The Fiets name.
   *
   * @return \Drupal\artebike\Entity\FietsInterface
   *   The called Fiets entity.
   */
  public function setName($name);

  /**
   * Gets the Fiets creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Fiets.
   */
  public function getCreatedTime();

  /**
   * Sets the Fiets creation timestamp.
   *
   * @param int $timestamp
   *   The Fiets creation timestamp.
   *
   * @return \Drupal\artebike\Entity\FietsInterface
   *   The called Fiets entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Fiets published status indicator.
   *
   * Unpublished Fiets are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Fiets is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Fiets.
   *
   * @param bool $published
   *   TRUE to set this Fiets to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\artebike\Entity\FietsInterface
   *   The called Fiets entity.
   */
  public function setPublished($published);

}
