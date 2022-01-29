<?php namespace Ends\Html;

abstract class Abstract_ClassName extends Abstract_Attribute implements ClassName_Interface {

  public function __construct(string $value) {

    parent::__construct('class', $value);
  }
}
