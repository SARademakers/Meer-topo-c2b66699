<?php
$array = array();
echo ("Hoeveel landen ga je toevoegen?" . PHP_EOL);
$aantal = readline();
if (is_numeric($aantal)) {
} else {
    exit("$aantal" . " " . "is niet numeric");
}
for ($i = 1; $i <= $aantal; $i++) {
    echo ("Welk land wil je toevoegen?"). PHP_EOL; {
        $land = readline();
    echo ("Wat is de hoofdstad van " . $land . "?" . PHP_EOL);
    	$stad = readline();
        $array[$land] = $stad;
    }
}
print_r ($array);