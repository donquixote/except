<?php

namespace Donquixote\Except\Eater;

/**
 * Implementation that prints directly to the cli output, using 'print'.
 *
 * Not really recommended, unless one is surely in a CLI environment. And even
 * then, you probably can do better than this.
 */
class ExceptionEater_PrintCli implements ExceptionEaterInterface {

  /**
   * Handles, or 'eats', an exception.
   *
   * A good implementation will not simply silence the exception, but do
   * something useful, such as, writing to a log.
   *
   * @param \Exception $e
   * @param string|null $message
   */
  public function eatException(\Exception $e, $message = null) {
    // A line break can be a good idea.
    print "\n";
    print 'Eating an exception from line ' . $e->getLine() . " of '" . $e->getFile() . "'.\n";
    print '  Exception class: ' . get_class($e) . ".\n";
    print '  Exception message: ' . $e->getMessage() . "\n";
    if (null !== $message) {
      print '  Consequences: ' . $message . "\n";
    }
  }
}
