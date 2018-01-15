<?php

namespace Drupal\artebike;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Reservatie entity.
 *
 * @see \Drupal\artebike\Entity\Reservatie.
 */
class ReservatieAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\artebike\Entity\ReservatieInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished reservatie entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published reservatie entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit reservatie entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete reservatie entities');

      case 'create':
        return AccessResult::allowedIfHasPermission($account, 'add reservatie entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add reservatie entities');
  }

}
