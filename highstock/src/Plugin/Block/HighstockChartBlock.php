<?php
namespace Drupal\highstock\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
/**
 * Provides a 'Highstock Chart' block.
 *
 * @Block(
 *   id = "highstock_chart_block",
 *   admin_label = @Translation("Highstock Chart block"),
 *   category = @Translation("Custom Block to display the Highstock chart")
 * )
 */
class HighstockChartBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    protected function blockAccess(AccountInterface $account) {
        return AccessResult::allowedIfHasPermission($account, 'access content');
    }
    /**
     * {@inheritdoc}
     */
    public function build() {
        $items = array();
        return array(
            '#cache' => [
                'max-age' => 0,
            ],
            '#prefix' => '<div id="container" style="height: 400px">',
            '#markup' => '',
            '#suffix' => '</div>',
            '#attached' => [
                'library' => ['highstock/highstock_chart'],
            ],
        );
    }
}