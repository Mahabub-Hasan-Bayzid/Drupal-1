<?php

namespace Drupal\hello_form\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloFormController extends ControllerBase {

  public function printName($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, @name!', ['@name' => $name]),
    ];
  }

}
