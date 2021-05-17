<?php
function familyName($fname) {
	echo "$fname Yup.<br>";
}

familyName('Jani');
familyName('Hege');
familyName('Stale');
familyName('Kai Jim');
familyName('Borge');

function familyName2($fname, $year) {
	echo "$fname Refsnes. Born in $year <br>";
}

familyName2('Hege', '1975');
familyName2('Stale', '1978');
familyName2('Kai Jim', '1983');
?>
