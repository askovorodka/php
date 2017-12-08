<?php
namespace structural\bridge;

interface WebPageInterface {
    public function getContent(): string ;
    public function getThemeName(): string ;
}
