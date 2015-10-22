<?php

/**
 * @file
 * Contains \Drupal\pokedex\Controller\HomeController.
 */

namespace Drupal\pokedex\Controller;

use Drupal\Core\Controller\ControllerBase;

class HomeController extends ControllerBase {

  // Render content
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => t('Welcome to my D8 R&D module! This is a Pokedex.'),
    );
  }
}
