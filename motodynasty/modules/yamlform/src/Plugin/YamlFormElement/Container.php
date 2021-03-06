<?php

namespace Drupal\yamlform\Plugin\YamlFormElement;

/**
 * Provides a 'container' element.
 *
 * @YamlFormElement(
 *   id = "container",
 *   api = "https://api.drupal.org/api/drupal/core!lib!Drupal!Core!Render!Element!Container.php/class/Container",
 *   label = @Translation("Container"),
 *   category = @Translation("Containers"),
 * )
 */
class Container extends ContainerBase {

  /**
   * {@inheritdoc}
   */
  public function getDefaultProperties() {
    return [
      // Custom attributes.
      'attributes__class' => '',
      'attributes__style' => '',
      // Flexbox.
      'flex' => 1,
      // Conditional logic.
      'states' => [],
    ];
  }

}
