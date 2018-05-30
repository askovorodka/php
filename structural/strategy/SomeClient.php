<?php
namespace structural\strategy;

class SomeClient
{
    /**
     * @var $client
     */
    private $client;

    public function setOutput(OutputInterface $output) {
        $this->client = $output;
    }

    public function loadOutput() {
        return $this->client->load();
    }
}