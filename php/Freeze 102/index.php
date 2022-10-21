<?php


$actors = [
    ['name' => 'Barry Nelson', 'character' => 'Stuart Ullman'],
    ['name' => 'Danny Lloyd', 'character' => 'Danny Torrance'],
    ['name' => 'Jack Nicholson', 'character' => 'Jack Torrance'],
    ['name' => 'Scatman Crothers', 'character' => 'Dick Hallorann'],
    ['name' => 'Shelley Duvall', 'character' => 'Wendy Torrance'],
];


$func = function(array $actor) {
    $tmp = str_split($actor['name']);
    $tmp = array_reverse($tmp);
    $tmp = implode($tmp);
    return $tmp;
};

$reverseActorArray = array_map($func, $actors);

foreach ($reverseActorArray as $reverseActor) {
    ?><p><?php echo $reverseActor; ?></p><?php
}

?>