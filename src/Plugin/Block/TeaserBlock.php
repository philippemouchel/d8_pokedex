<?php
namespace Drupal\pokedex\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'Teaser' Block
 *
 * @Block(
 *   id = "pokedex_teaser",
 *   admin_label = @Translation("Pokedex Teaser"),
 * )
 */
class TeaserBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Come & see this full Pokedex'),
    );
  }
}
