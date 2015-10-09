

<?php
/**
 * @file
 * Contains \Drupal\Pokedex\Controller\HomeController.
 */

namespace Drupal\Pokedex\Controller;

use Drupal\Core\Controller\ControllerBase;

class HomeController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => t('Welcome to my D8 R&D module! This is a Pokedex.'),
    );
  }
}
?>
