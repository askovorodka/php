<?php
namespace structural\bridge;

$darkTheme = new ThemeDark();
$whiteTheme = new WhiteTheme();

$aboutPage = new AboutPage($darkTheme);
$catalogPage = new CatalogPage($darkTheme);

echo $aboutPage->getContent();
echo $catalogPage->getContent();

$array1 = [21,23,24,40,75,76,78];
$array2 = [10,11,41,50,65,86,98];

$result = [];
$buf = null;

for($i=0; $i<count($array1); $i++) {
    if (!empty($buf)) {
        if ($buf < $array1[$i])
    }
    if ($array1[$i] < $array2[$i]){
        $result[] = $array1[$i];
        $buf = $array2[$i];
    } else {
        $result[] = $array2[$i];
        $buf = $array1[$i];
    }
}
