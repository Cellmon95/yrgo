<?php

declare(strict_types=1);

require __DIR__ . '/functions.php';

$map = getMap
(
    width:20,
    height:4
);

// TODO: Implement the map loops.

foreach ($map as $row) {
    foreach ($row as $block) {
        ?>
            <img src="<?php echo getBlock($block); ?>" />       
        <?php
    }
    echo "<br>";

}