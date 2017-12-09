<?php

namespace Drupal\artebike\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Fietstype entities.
 *
 * @ingroup artebike
 */
interface FietstypeInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Fietstype name.
   *
   * @return string
   *   Name of the Fietstype.
   */
  public function getName();

  /**
   * Sets the Fietstype name.
   *
   * @param string $name
   *   The Fietstype name.
   *
   * @return \Drupal\artebike\Entity\FietstypeInterface
   *   The called Fietstype entity.
   */
  public function setName($name);

  /**
   * Gets the Fietstype creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Fietstype.
   */
  public function getCreatedTime();

  /**
   * Sets the Fietstype creation timestamp.
   *
   * @param int $timestamp
   *   The Fietstype creation timestamp.
   *
   * @return \Drupal\artebike\Entity\FietstypeInterface
   *   The called Fietstype entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Fietstype published status indicator.
   *
   * Unpublished Fietstype are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Fietstype is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Fietstype.
   *
   * @param bool $published
   *   TRUE to set this Fietstype to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\artebike\Entity\FietstypeInterface
   *   The called Fietstype entity.
   */
  public function setPublished($published);

}
