<?php namespace Ends;

class Script extends Code {
    /**
     * @var array The list of the script vars
     */
    protected array $vars = [];

    /**
     * @return array The list of the script vars
     */
    public function vars(): array {
        return $this->vars;
    }

    /**
     * Declare a variable
     *
     * @param  string $name The variable name
     * @return self
     */
    public function let(string $name, mixed $value = null): self {
        $this->vars[$name] = $value;
        return $this;
    }

    /**
     * Get a declared variable
     *
     * @param  string $name The variable name
     * @return mixed        The variable value
     */
    public function get(string $name): mixed {
        return $this->vars[$name] ?? null;
    }

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
