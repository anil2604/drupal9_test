<?php
/**
 * @file
 * Contains \Drupal\article\Plugin\Block\XaiBlock.
 */
namespace Drupal\article\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'article' block.
 *
 * @Block(
 *   id = "article_block",
 *   admin_label = @Translation("Article block"),
 *   category = @Translation("Custom article block example")
 * )
 */

class ArticleBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
        '#theme' => 'my_template',
        '#test_var' => $this->t('Test Value'),
    ];
    /*
    return array(
      '#type' => 'markup',
      '#markup' => 'This block list the article.',
    );
    */
  }
}