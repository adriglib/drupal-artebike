<?php

namespace Drupal\artebike;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Fiets entity.
 *
 * @see \Drupal\artebike\Entity\Fiets.
 */
class FietsAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\artebike\Entity\FietsInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished fiets entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published fiets entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit fiets entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete fiets entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add fiets entities');
  }

}
