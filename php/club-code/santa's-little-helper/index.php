<?php

$currentTimeInDays = ((strtotime("now") / 60) / 60) / 24;
$timeUntilChristmasInDays = ((strtotime("24 December 2022") / 60) / 60) / 24;
$daysUntilChristmas = $timeUntilChristmasInDays - $currentTimeInDays;

echo ceil($daysUntilChristmas), " dagar tills Jul!";