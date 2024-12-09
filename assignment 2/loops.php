<!-- Loops and Strings -->
<!-- 1 -->
<?php
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo "The total is: $total";
?>
<br>
<!-- 2 -->
<?php
$text = "techstudy";
$count = substr_count($text, "t");
echo "The count of 't' is: $count";
?>
<br>
<!-- 3 -->
<?php
$string = "hello world";
$uppercase = strtoupper($string);
echo $uppercase;
?>
<br>
<!-- 4 -->
<?php
$email = "user@example.com";
$username = strstr($email, '@', true);
echo "The username is: $username";
?>
<br>
<!-- 5 -->
<?php
$string = "HelloWorld";
$lastThree = substr($string, -3);
echo "The last three characters are: $lastThree";
?>
<br>
<!-- 6 -->
<?php
$string = "the quick brown fox jumps over the lazy dog";
$replaced = preg_replace('/\bthe\b/', 'best', $string, 1);
echo $replaced;
?>
<br>
<!-- 7 -->
<?php
$string = "HelloWorld";
$removed = substr($string, 5); // Removes first 5 characters
echo $removed;
?>
<br>
<!-- 8 -->
<?php
$numericString = "1,234,567";
$cleanedString = str_replace(",", "", $numericString);
echo $cleanedString;
?>
<br>
<!-- 9 -->
<?php
$sentence = "Hello World, this is PHP!";
$firstWord = strtok($sentence, " ");
echo "The first word is: $firstWord";
?>
<br>
<!-- 10 -->
<?php
$a = 'Burch Jr, Philip H., The American es';
$array = explode(", ", $a);
print_r($array);
?>
<br>
<!-- 11 -->
<?php
$char = 'a';
while ($char <= 'z') {
    echo $char . " ";
    $char++;
}
?>
<br>
<!-- 12 -->
<?php
$number = 12345;
$firstDigit = intval(substr($number, 0, 1));
$lastDigit = $number % 10;
echo "First digit: $firstDigit, Last digit: $lastDigit";
?>
<br>
<!-- 13 -->
<?php
$number = 12345;
$firstDigit = intval(substr($number, 0, 1));
$lastDigit = $number % 10;
$sum = $firstDigit + $lastDigit;
echo "The sum is: $sum";
?>
<br>
<!-- 14 -->
<?php
$number = 12345;
$numberStr = (string)$number;
$firstDigit = $numberStr[0];
$lastDigit = $numberStr[strlen($numberStr) - 1];
$swapped = $lastDigit . substr($numberStr, 1, -1) . $firstDigit;
echo "Swapped number: $swapped";
?>
<br>
<!-- 15 -->
<?php
$number = 121;
$isPalindrome = strval($number) == strrev(strval($number));
echo $isPalindrome ? "Palindrome" : "Not Palindrome";
?>
<br>
<!-- 16 -->
<?php
$octal = "17";
$binary = base_convert($octal, 8, 2);
echo "Binary equivalent of octal $octal is $binary";
?>