<?php namespace Ends;

/**
 * The statement class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/ends
 * @license Apache-2.0
 */
class Statement {

  use Errors;

  /**
   * Create a new statement
   *
   * @param Script $script The statement script
   * @param string $name The statement name
   * @param mixed $name The statement value
   */
  public function __construct(protected Script $script, protected string $name, protected mixed $value = null) {}
}
