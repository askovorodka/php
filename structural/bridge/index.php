<?php
namespace structural\bridge;

$darkTheme = new ThemeDark();
$whiteTheme = new WhiteTheme();

$aboutPage = new AboutPage($darkTheme);
$catalogPage = new CatalogPage($darkTheme);

echo $aboutPage->getContent();
echo $catalogPage->getContent();
