<?php use Ends\Script;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$script = new Script('index');

$script->put('Hello world !');

$script->end();
