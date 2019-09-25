<?php
$layers = array(
    1 => "*" . PHP_EOL,
    2 => "**" . PHP_EOL,
    3 => "***" . PHP_EOL,
    4 => "****" . PHP_EOL,
    5 => "*****" . PHP_EOL
);
$aantal = count($layers);

for ($x = 0; $x <= $aantal; $x++) {
    echo $layers[$x];
};
