<?php

namespace Drupal\artebike\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Reservatie entities.
 *
 * @ingroup artebike
 */
interface ReservatieInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Reservatie name.
   *
   * @return string
   *   Name of the Reservatie.
   */
  public function getName();

  /**
   * Sets the Reservatie name.
   *
   * @param string $name
   *   The Reservatie name.
   *
   * @return \Drupal\artebike\Entity\ReservatieInterface
   *   The called Reservatie entity.
   */
  public function setName($name);

  /**
   * Gets the Reservatie creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Reservatie.
   */
  public function getCreatedTime();

  /**
   * Sets the Reservatie creation timestamp.
   *
   * @param int $timestamp
   *   The Reservatie creation timestamp.
   *
   * @return \Drupal\artebike\Entity\ReservatieInterface
   *   The called Reservatie entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Reservatie published status indicator.
   *
   * Unpublished Reservatie are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Reservatie is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Reservatie.
   *
   * @param bool $published
   *   TRUE to set this Reservatie to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\artebike\Entity\ReservatieInterface
   *   The called Reservatie entity.
   */
  public function setPublished($published);

}
