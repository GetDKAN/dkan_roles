<?php

namespace Drupal\dkan_roles\Commands;

use Drush\Commands\DrushCommands;

/**
 * Drush commands.
 */
class DkanRolesCommands extends DrushCommands {

  /**
   * Drush command for importing shortcuts.
   *
   * @command dkan_roles:shortcuts
   */
  public function shortcuts() {
    \Drupal::service('default_content.importer')->importContent('dkan_roles');
  }

}
