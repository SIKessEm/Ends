<?php namespace Ends;

/**
 * Errors trait
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/ends
 * @license Apache-2.0
 */

trait Errors {

  /**
   * @return array Return the script errors
   */
  public function errors(): array {
    $this->errors;
  }

  /**
   * @var array The script errors
   */
  protected array $errors = [];
}
