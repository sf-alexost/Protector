<?php

namespace Drupal\protector\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Check_status.
   *
   * @return string
   *   Return Hello string.
   */
  public function check_status() {
    \Drupal::logger('protector')->notice("Controller is working!");
  }

}
