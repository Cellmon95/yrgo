<?php

declare(strict_types=1);

// It is common to declare the functions within a "functions only" file and then
// load the functions into another PHP file using require. Try to never execute
// a function within your functions.php file. Keep it dumb.
require __DIR__ . '/functions.php';

// Since we loaded the functions from the functions.php file, we can now call
// and execute them within this file.
$description = getUserDescription('Lady Bird', 18);

echo $description; // The user Lady Bird is 18 years old.
