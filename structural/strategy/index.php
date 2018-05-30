<?php
namespace structural\strategy;

$client = new SomeClient();
$client->setOutput(new OutputJson());
print_r($client->loadOutput());

$client->setOutput(new OutputArray());
print_r($client->loadOutput());