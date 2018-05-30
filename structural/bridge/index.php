<?php
namespace structural\bridge;

$darkTheme = new ThemeDark();
$whiteTheme = new WhiteTheme();

$aboutPage = new AboutPage($darkTheme);
$catalogPage = new CatalogPage($darkTheme);

echo $aboutPage->getContent();
echo $catalogPage->getContent();




$printer = new Printer();
for ($i=0; $i<13; $i++) {
    $array1[$i] = rand(0,100);
}

echo $printer->setArray($array1)->printer();
$middle = (int) (count($array1) / 2);
echo $printer->setString($middle)->printString();

die;

$start = time();
$t = true;
while ($t) {
    $t = false;
    for ($i=0; $i<count($array1)-1; $i++) {
        if ($array1[$i] > $array1[$i+1]) {
            $temp = $array1[$i];
            $array1[$i] = $array1[$i+1];
            $array1[$i+1] = $temp;
            $t = true;
        }
    }
}
$end = time()-$start;
echo  "<br>" . $printer->setArray($array1)->printer();
echo "<br> time of sorting: " . $end . " sec.";

for ($i=0; $i<10000; $i++) {
    $array1[$i] = rand(0,10000);
}
echo  "<br>" . $printer->setArray($array1)->printer();
$start = time();
sort($array1);
$end = time()-$start;
echo  "<br>" . $printer->setArray($array1)->printer();
echo "<br> time of sorting: " . $end . " sec.";

/*
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
}*/
