<?php

namespace Donquixote\Except\Eater;

/**
 * Implementation that silently sweeps the exception under the rug.
 *
 * Not recommended.
 */
class ExceptionEater_Silent implements ExceptionEaterInterface {

  /**
   * @param \Exception $e
   * @param string|null $message
   *   (optional) Message with additional information.
   */
  public function eatException(\Exception $e, $message = NULL) {
    // Do nothing.
  }
}
