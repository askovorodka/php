<?php
namespace structural\bridge;

class AboutPage implements WebPageInterface
{
    /**
     * @var ThemeInterface $theme
     */
    private $theme;

    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    public function getContent(): string
    {
        return $this->theme->getColor();
    }
    public function getThemeName(): string
    {
        return $this->theme->getName();
    }
}
