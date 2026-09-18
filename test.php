<?php

require __DIR__ . '/vendor/autoload.php';

use Aisultan\Slugger\Slugger;

foreach (['Жаңа пәтер в Астане', 'Тест', 'Құрметті қонақтар!'] as $text) {
    printf("%-22s -> %s\n", $text, Slugger::make($text));
}
