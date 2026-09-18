<?php

namespace Aisultan\Slugger;

class Slugger
{
    private const MAP = [
        'а' => 'a',  'ә' => 'a',  'б' => 'b',  'в' => 'v',  'г' => 'g',
        'ғ' => 'g',  'д' => 'd',  'е' => 'e',  'ё' => 'e',  'ж' => 'zh',
        'з' => 'z',  'и' => 'i',  'й' => 'i',  'к' => 'k',  'қ' => 'q',
        'л' => 'l',  'м' => 'm',  'н' => 'n',  'ң' => 'n',  'о' => 'o',
        'ө' => 'o',  'п' => 'p',  'р' => 'r',  'с' => 's',  'т' => 't',
        'у' => 'u',  'ұ' => 'u',  'ү' => 'u',  'ф' => 'f',  'х' => 'h',
        'һ' => 'h',  'ц' => 'c',  'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ъ' => '',   'ы' => 'y',  'і' => 'i',  'ь' => '',   'э' => 'e',
        'ю' => 'yu', 'я' => 'ya',
    ];

    public static function make(string $text): string
    {
        $text = mb_strtolower($text, 'UTF-8');
        $text = strtr($text, self::MAP);
        $text = preg_replace('/[^a-z0-9]+/u', '-', $text);

        return trim($text, '-');
    }
}
