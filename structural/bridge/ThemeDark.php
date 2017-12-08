<?php
namespace structural\bridge;

class ThemeDark implements ThemeInterface
{
    public function getName(): string
    {
        return 'dark theme';
    }
    public function getColor(): string
    {
        return 'black';
    }
}
