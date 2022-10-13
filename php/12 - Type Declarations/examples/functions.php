<?php

// By default, PHP will coerce values of the wrong type into the expected scalar
// type if possible. For example, a function that is given an integer for a
// parameter that expects a string will get a variable of type string. In strict
// mode, only a variable of exact type of the type declaration will be accepted,
// or a type error will be thrown. From now on, declare strict types in the top
// of all files you write which only contains PHP!
declare(strict_types=1);

// With type declarations you can specify which type an argument must be. In the
// example below the name is of the type string and age of the type integer. We
// also specify which type the function should return by adding colon (:)
// followed by the type, in this case string.
function getUserDescription(string $name, int $age): string
{
    // Please note that if this function doesn't return a string it will throw
    // a type error.
    return "The user $name is $age years old.";
}

// The following types are valid type hint declerations: string, int, float,
// bool, object, array, callable, iterable, self, null and void (void is only
// valid as a return type).
