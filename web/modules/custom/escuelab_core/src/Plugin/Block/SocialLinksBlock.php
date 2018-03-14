<?php

namespace Drupal\escuelab_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'SocialLinksBlock' block.
 *
 * @Block(
 *  id = "social_links_block",
 *  admin_label = @Translation("Social links block"),
 * )
 */
class SocialLinksBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'facebook_link' => $this->t(''),
      'twitter_link' => $this->t(''),
      'youtube_link' => $this->t(''),
    ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['facebook_link'] = [
      // '#type' => 'text_format',
      '#type' => 'textfield',
      '#title' => $this->t('Facebook link'),
      '#description' => $this->t(''),
      '#default_value' => $this->configuration['facebook_link'],
      '#weight' => '0',
    ];

    $form['twitter_link'] = [
      // '#type' => 'text_format',
      '#type' => 'textfield',
      '#title' => $this->t('Twitter link'),
      '#description' => $this->t(''),
      '#default_value' => $this->configuration['twitter_link'],
      '#weight' => '0',
    ];

    $form['youtube_link'] = [
      // '#type' => 'text_format',
      '#type' => 'textfield',
      '#title' => $this->t('YouTube link'),
      '#description' => $this->t(''),
      '#default_value' => $this->configuration['youtube_link'],
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['facebook_link'] = $form_state->getValue('facebook_link');
    $this->configuration['twitter_link'] = $form_state->getValue('twitter_link');
    $this->configuration['youtube_link'] = $form_state->getValue('youtube_link');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'social_links_block',
      '#data' => [
        'facebook_link' => $this->configuration['facebook_link'],
        'twitter_link' => $this->configuration['twitter_link'],
        'youtube_link' => $this->configuration['youtube_link']
      ]
    ];
  }

}
