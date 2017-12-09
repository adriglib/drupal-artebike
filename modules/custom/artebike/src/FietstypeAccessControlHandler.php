<?php

namespace Drupal\artebike;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Fietstype entity.
 *
 * @see \Drupal\artebike\Entity\Fietstype.
 */
class FietstypeAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\artebike\Entity\FietstypeInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished fietstype entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published fietstype entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit fietstype entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete fietstype entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add fietstype entities');
  }

}
