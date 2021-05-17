<?php declare(strict_types=1);
// In PHP 7, "type declarations" were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
// To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.

// The Example is from: https://www.w3schools.com/php/php_functions.asp

function addNumbers(int $a, int $b) {
	return $a + $b;
}

// echo addNumbers(5, '5 days'); // 🛑︎ This throws error..
echo addNumbers(1, 3); // 🥝︎ This doesn't throw error.
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>
