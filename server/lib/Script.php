<?php namespace Ends;

/**
 * The script class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/ends
 * @license Apache-2.0
 */
class Script {

  /**
   * Create a new script
   *
   * @param protected $name The script name
   */
  public function __construct(protected string $name) {}

    /**
     * Put a content into output
     *
     * @param  string $content The content to put
     * @return void
     */
  public function put(string $content): void {
    echo $content;
  }

  /**
   * End the script
   *
   * @param  null|int $status [description]
   * @return void
   */
  public function end(?int $status = null): void {
    isset($status) ? exit($status) : exit;
  }

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
