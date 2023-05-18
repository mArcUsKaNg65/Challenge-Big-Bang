<?php

$outputArray = [];

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $outputArray[] = "BIGBANG";
    } elseif ($i % 3 == 0) {
        $outputArray[] = "BIG";
    } elseif ($i % 5 == 0) {
        $outputArray[] = "BANG";
    } else {
        $outputArray[] = strval($i);
    }
}

$outputJSON = json_encode($outputArray);

$file = fopen('output.json', 'w');
fwrite($file, $outputJSON);
fclose($file);

echo "Output has been written to output.json file.";

?>