<?php

namespace Drupal\escuelab_core\src\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Social' Block.
 *
 * @Block(
 *   id = "social_block",
 *   admin_label = @Translation("Social block"),
 *   category = @Translation("Custom block"),
 * )
 */
class SocialBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Hello, World!'),
    );
  }

}
