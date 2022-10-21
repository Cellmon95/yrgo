<?php

declare(strict_types=1);

function sayHelloTo(string $name):string
{
    return "Hello, " . $name;
}

function getMovieDescription(string $title, string $director, int $year):string
{
    return "The movie $title was released $year and directed by $director.";
}

function getFirstChar(string $value):string
{
    return substr($value, 0, 1);
}

function getStringsLength(array $strings):array
{
    $stringsLength = [];
    foreach ($strings as $string) {
        $stringsLength[] = strlen($string);
    }

    return $stringsLength;
}

function getBlock(int $block):string
{
    $blocks = [
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAFUlEQVR4AWPI7vlPEhrGGkY1jGoAAEwQ9hBqU6EFAAAAAElFTkSuQmCC',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAACVBMVEXnWhD31rUAAABagmvSAAAANklEQVR4AWMQDU0MYXBgUGFCIdRAhNIKIKEahi67gGECE0MUiHBd5QAUCwMRTA5cDForslYAAKVzDEjCrcCGAAAAAElFTkSuQmCC',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAALElEQVR4AWP4fm0rSYjheZQAJmJgwClOogZyAH5TMcXpoIFUQJtgHY0HUgEAQR/y28nnCdAAAAAASUVORK5CYII=',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAADFBMVEVrjP/nWhD/pUIAAABg5DuiAAAAQElEQVR4AWMQDQ0NYchatWo1Q96qVbsZsqZGrWbIir8GJOKmw4h94UBiZT2IqAISq36BWFlgLkjbr90QA/4DAQBLbyVGZjjebAAAAABJRU5ErkJggg==',
    ];

    return $blocks[$block];

}

function getQuote(int $number):string
{
    $quotes = [
        'Different things can be sad... it\'s not all war!',
        'I want you to be the very best version of yourself that you can be.',
        'People go by the names their parents give them, but they don\'t believe in God.',
        'Some people aren\'t built happy, you know.',
        'The only thing exciting about 2002 is that it\'s a palindrome.',
    ];

    $arrLength = count($quotes);

    if($number <= $arrLength && $number > 0){
        return $quotes[$arrLength - 1];
    }
    else{
        return "Error: quote number $number does not exist.";
    }
    
}

function getRandomQuote():string
{
    $quotes = [
        'Different things can be sad... it\'s not all war!',
        'I want you to be the very best version of yourself that you can be.',
        'People go by the names their parents give them, but they don\'t believe in God.',
        'Some people aren\'t built happy, you know.',
        'The only thing exciting about 2002 is that it\'s a palindrome.',
    ];
     
    $arrLength = count($quotes);
    return $quotes[rand(0, $arrLength - 1)];
}

function getMap(int $width = 0, int $height = 0):array
{

    $map = [];

    for ($i=0; $i < $height; $i++) { 
        for ($j=0; $j < $width; $j++) {
            if ($i < $height - 1) {
                $map[$i][$j] = 0;
            }
            else{
                $map[$i][$j] = 1;
            } 
        }
    }
    return $map;
}
