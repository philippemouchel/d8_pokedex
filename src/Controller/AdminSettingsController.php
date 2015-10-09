<?php
/**
 * @file
 * Contains \Drupal\pokedex\Controller\AdminSettingsController.
 */

namespace Drupal\pokedex\Controller;

use Drupal\Core\Controller\ControllerBase;

class AdminSettingsController extends ControllerBase {

  // Render content
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => t('Here you can configure your Pokedex.'),
    );
  }
}
