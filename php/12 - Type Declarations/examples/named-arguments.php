<?php

// Named arguments allow you to pass in values to a function, by specifying the
// value name, so that you don't have to take their order into consideration,
// and you can also skip optional parameters!

$birthDate = date(format: 'Y-m-d', timestamp: 766108800);

echo $birthDate;
