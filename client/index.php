<?php use Ends\Script;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$script = new Script('index');

$script->let('app_name', 'Ends');

$script->put('Welcome to ' . $script->get('app_name') . ' !');

$script->end();
