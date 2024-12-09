<!-- 1 -->
<?php
$color = array('white', 'green', 'red');
echo implode(", ", $color) . ",\n";
foreach ($color as $col) {
    echo "$col\n";
}
?>
<br>
<!-- 2 -->
<?php
$ceu = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest",
    "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
);

asort($ceu);
foreach ($ceu as $country => $capital) {
    echo "The capital of $country is $capital\n";
}
?>
<br>
<!-- 3 -->
<?php
$x = array(1, 2, 3, 4, 5);
unset($x[2]); 
$x = array_values($x); 
print_r($x);
?>
<br>
<!-- 4 -->
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
$first = reset($color);
echo $first;
?>
<br>
<!-- 5 -->
<?php
$array = array(1, 2, 3, 4, 5);
array_splice($array, 3, 0, '$');
echo "Original array: " . implode(" ", $array);
?>
<br>
<!-- 6 -->
<?php
$array = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");


asort($array);
print_r($array);


ksort($array);
print_r($array);

arsort($array);
print_r($array);


krsort($array);
print_r($array);
?>
<br>
<!-- 7 -->
<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

foreach ($array1 as $key => $value) {
    array_unshift($value, $array2[$key]);
    $result[] = $value;
}

print_r($result);
?>
<br>
<!-- 8 -->
<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

$lower = array_map('strtolower', $Color);
$upper = array_map('strtoupper', $Color);

print_r($lower);
print_r($upper);
?>
<br>
<!-- 9 -->
<?php
$array = array("abcd", "abc", "de", "hjjj", "g", "wer");

$lengths = array_map('strlen', $array);
echo "The shortest array length is " . min($lengths) . ".\n";
echo "The longest array length is " . max($lengths) . ".\n";
?>
<br>
<!-- 10 -->
<?php
$array = array("  apple  ", "  banana  ", "  cherry  ");
array_walk($array, function (&$item) {
    $item = trim($item);
});
print_r($array);
?>
<br>
<!-- 11 -->
<?php
$array = array(1, 2, 2, 3, 4, 4, 5);
$array = array_unique($array);
print_r($array);
?>
<br>
<!-- 12 -->
<?php
$array = array(" a ", " b c ", " d ");
$array = array_map('trim', $array);
print_r($array);
?>
<br>
<!-- 13 -->
<?php
$keys = array('x', 'y', 'z');
$values = array(10, 20, 30);
$combined = array_combine($keys, $values);
print_r($combined);
?>
<br>
<!-- 14 -->
<?php
$large = array(1, 2, 3, 4, 5, 6);
$small = array(3, 4);

$isSubset = !array_diff($small, $large);
echo $isSubset ? "Yes" : "No";
?>
<br>
<!-- 15 -->
<?php
$array1 = array(1, 2, 3, 4, 5);
$array2 = $array1;
print_r($array2);
?><br>
<!-- 16 -->
<?php
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$merged = array_merge($array1, $array2);
print_r($merged);
?>