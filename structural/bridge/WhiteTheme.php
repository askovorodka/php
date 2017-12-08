<?php
namespace structural\bridge;

class WhiteTheme implements ThemeInterface
{
    public function getColor(): string
    {
        return 'white';
    }
    public function getName(): string
    {
        return 'white theme';
    }
}
