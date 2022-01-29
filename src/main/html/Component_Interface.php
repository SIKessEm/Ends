<?php namespace Ends\Html;

interface Component_Interface extends \Stringable {

  public function render(): string;
}
