<?php


function searchEmojis(string $search)
{
    $emojis = [
        'joy' => '😂',
        'rage' => '😡',
        'scream' => '😱',
        'shit' => '💩',
        'smirk' => '😏',
        'sunglasses' => '😎',
        'thumbsdown' => '👎',
        'thumbsup' => '👍',
        'unicorn' => '🦄',
    ];

    $result = array();

    foreach ($emojis as $name => $emoji) {
        if(strpos($name, $search) !== false)
        {
            array_push($result, $emoji);
        } 
    }

    return $result;
}

$result = searchEmojis('thumb');
//print_r(searchEmojis("thumb"));
foreach ($result as $key) {
    echo $key;
}

