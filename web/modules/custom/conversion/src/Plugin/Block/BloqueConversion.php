<?php

namespace Drupal\conversion\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'BloqueConversion' block.
 *
 * @Block(
 *  id = "bloque_conversion",
 *  admin_label = @Translation("Bloque conversion"),
 * )
 */
class BloqueConversion extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'bloque_conversion';
     $build['bloque_conversion']['#markup'] = 'Implement BloqueConversion.';

    return $build;
  }

  public function blockForm($form, FormStateInterface $form_state) {
    $list['blank'] = '----';
    $types = NodeType::loadMultiple();
    foreach($types as $key => $type ) {
      $list[$key] = $type->get('name');
  }
  $form['node_block_types'] = array(
    '#type' => 'select',
    '#title' => t('Select the node type'),
    '#default_value' => $this->configuration['content_type'],
    '#options' => $list,
  );
  $form['node_block_number'] = array(
    '#type' => 'textfield',
    '#title' => t('Select the number of node to show, default 20'),
    '#default_value' => $this->configuration['number_nodes'],
  );
  $form['node_block_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Select the title of the list'),
    '#default_value' => $this->configuration['block_title'],
  );
  return $form;
  }
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['block_title'] = $form_state->getValue('node_block_title');
    $this->configuration['number_nodes'] = $form_state->getValue('node_block_number');
    $this->configuration['content_type'] = $form_state->getValue('node_block_types');
  }
  public function defaultConfiguration() {
    return array(
      'block_title' => 'Block title',
      'number_nodes' => 20,
      'content_type' => 'blank',
    );
  }


}
