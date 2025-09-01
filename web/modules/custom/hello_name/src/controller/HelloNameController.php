<?php

namespace Drupal\hello_name\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloNameController.
 */
class HelloNameController extends ControllerBase {

  /**
   * Returns a simple page with your name.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, my name is Mahbub Hasan Bayzid!'),
    ];
  }

}
