<?php

namespace Drupal\artebike\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Laadstation entities.
 *
 * @ingroup artebike
 */
interface LaadstationInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Laadstation name.
   *
   * @return string
   *   Name of the Laadstation.
   */
  public function getName();

  /**
   * Sets the Laadstation name.
   *
   * @param string $name
   *   The Laadstation name.
   *
   * @return \Drupal\artebike\Entity\LaadstationInterface
   *   The called Laadstation entity.
   */
  public function setName($name);

  /**
   * Gets the Laadstation creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Laadstation.
   */
  public function getCreatedTime();

  /**
   * Sets the Laadstation creation timestamp.
   *
   * @param int $timestamp
   *   The Laadstation creation timestamp.
   *
   * @return \Drupal\artebike\Entity\LaadstationInterface
   *   The called Laadstation entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Laadstation published status indicator.
   *
   * Unpublished Laadstation are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Laadstation is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Laadstation.
   *
   * @param bool $published
   *   TRUE to set this Laadstation to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\artebike\Entity\LaadstationInterface
   *   The called Laadstation entity.
   */
  public function setPublished($published);

}
