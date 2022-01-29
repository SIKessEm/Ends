<?php namespace Ends\Html;

interface Name_Interface {
  public function is(string $name): bool;
  public function getName(): string;
}
