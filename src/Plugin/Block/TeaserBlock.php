<?php

/**
 * @file
 * Contains \Drupal\pokedex\Plugin\Block\TeaserBlock.
 */

namespace Drupal\pokedex\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Teaser' Block
 *
 * @Block(
 *   id = "pokedex_teaser",
 *   admin_label = @Translation("Pokedex Teaser"),
 * )
 */
class TeaserBlock extends BlockBase implements BlockPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function build() {

    // Load block configuration
    $config = $this->getConfiguration();

    // Return rendered HTML
    return array(
      '#markup' => $config['teaser_content'],
    );
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    // Load stored configuration
    $config = $this->getConfiguration();

    // Define new field to store teaser content
    // @see: https://api.drupal.org/api/drupal/developer!topics!forms_api_reference.html/8
    $form['teaser_content'] = array (
      '#type' => 'textarea',
      '#title' => $this->t('Content'),
      '#description' => $this->t('Block content'),
      '#default_value' => isset($config['teaser_content']) ? $config['teaser_content'] : ''
    );

    // Return configuration form
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {

    // Store filed value in configuration value
    $this->setConfigurationValue('teaser_content', $form_state->getValue('teaser_content'));

    // If field were in a fieldset, it would be a little different
    // $this->setConfigurationValue('config_value', $form_state->getValue(array('fieldset_name', 'field_name')));
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {

    // Load config file
    $default_config = \Drupal::config('pokedex.settings');

    // Return default config array
    return array(
      'teaser_content' => $default_config->get('pokedex.teaser.content')
    );
  }
}
