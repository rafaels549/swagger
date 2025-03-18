<?php
require("../vendor/autoload.php");

$openapi = \OpenApi\Generator::scan(['../src/Controllers']);

header('Content-Type: application/json');
echo $openapi->toJson();
