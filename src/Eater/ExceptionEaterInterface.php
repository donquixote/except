<?php

namespace Donquixote\Except\Eater;

/**
 * Interface for pluggable exception handlers.
 *
 * The term 'eater' may be misleading. But from the consuming component's
 * perspective, this is exactly what it does. The eater takes the exception, and
 * the consuming component can forget about it.
 */
interface ExceptionEaterInterface {

  /**
   * Handles, or 'eats', an exception.
   *
   * A good implementation will not simply silence the exception, but do
   * something useful, such as, writing to a log.
   *
   * @param \Exception $e
   * @param string|null $message
   *   (optional) Message explaining the consequences of the exception.
   */
  public function eatException(\Exception $e, $message = NULL);

}
