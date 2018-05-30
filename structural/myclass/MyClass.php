<?php
namespace structural\myclass;

class MyClass
{
    protected function showWord($word){}

    protected function getTemperature() {

    }

    public function getWord(int $temperature) {
        if ($temperature < 15) {
            return 'cold';
        } elseif ($temperature > 25) {
            return 'hot';
        } else {
            return 'warm';
        }
    }

    public function process() {
        $temperature = $this->getTemperature();
        $word = $this->getWord($temperature);
        $this->showWord($word);
    }

    public function getThrow() {
        new \Exception();
    }
}