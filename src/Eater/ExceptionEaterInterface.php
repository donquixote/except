<?php

namespace Donquixote\Except\Eater;

interface ExceptionEaterInterface {

  /**
   * Does something with an exception, so that other components don't have to
   * deal with it anymore.
   *
   * @param \Exception $e
   */
  public function eatException(\Exception $e);

}
