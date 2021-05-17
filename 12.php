<?php declare(strict_types=1);
// 🤹︎🤹︎🤹︎ Amazing we can still use loosely typed bindings with php even though we specified "strict declaration" for php, yikes!
function addNumbers($a, $b) {
	return $a + $b;
}

// echo addNumbers(5, '5 days'); // 🛑︎ This throws error..
echo addNumbers(1, 200); // 🥝︎ This doesn't throw error.
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>
