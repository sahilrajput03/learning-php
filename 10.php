<?php

// eg from: https://www.w3schools.com/php/php_functions.asp
// In the example above, notice that we did not have to tell PHP which data type the variable is.
// PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

function addNumbers(int $a, int $b) {
	return $a + $b;
}

echo addNumbers(5, '5 days');
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>
