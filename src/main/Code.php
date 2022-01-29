<?php namespace Ends;

abstract class Code {
    public function __construct(protected string $source, protected string $target) {}
}
