<?php namespace Ends\Html;

interface Text_Interface extends Node_Interface {
    public function setValue(string $value): static;
    public function getValue(): string;
}
