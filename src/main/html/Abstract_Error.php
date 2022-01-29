<?php namespace Ends\Html;

abstract class Abstract_Error extends \Exception implements \Throwable {
    const INVALID_NAME = 0x00001;
}
