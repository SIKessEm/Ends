<?php namespace Ends\Html;

interface Attribute_Interface extends Component_Interface, Name_Interface {
  public function setValue(string $value): static;
  public function getValue(): string;
}
