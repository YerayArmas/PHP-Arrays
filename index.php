<?php

// Iteration 1 - Warm Up
// 1.1

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function sumEvenNumbers($arr2)
{
    $sum = 0;

    foreach ($arr2 as $num)
        if ($num % 2 === 0) {
            $sum += $num; {
            }
        } echo "Iteration 1.1:" . "\n" . "The total amount of even numbers in the array is " . $sum . "!" . "\n \n";
};

sumEvenNumbers($arr);


// 1.2

$one = ["Let me tell you that ", "you are awesome !!"];

function callMeEx($two) {
    echo $two[0] . $two[1] . "\n \n";
}
echo "Iteration 1.2:" . "\n";
callMeEx($one);


// 1.3

$three = [1, 2, 3, 4, 5];
function maxAndMin($two) {
    echo "Iteration 1.3:" . "\n" . "The greater number in the array is " . max($two) . ", and the smalles number in the array is " . min($two) . ". \n \n";
}

maxAndMin($three);


// 1.4

$string = "246810";
$str1 = str_split($string);

echo "Iteration 1.4: ";
echo var_export($str1, true) . "\n";
print_r(array_reverse($str1));
echo "\n";


// Iteration 2

$uniques = [1, 2, 3, 4, 5, 3, 7, 1];

$output = array_unique($uniques);

echo "Iteration 2: ";
print_r($output);
echo "\n";


// Iteration 3

$text = ["too much", "Let me tell you that ", "you!!"];
$n = 1; // This value will find "the longest string, $n = 2; this will find the second longes string, and so on 

function longestStr($strings, $n) {
    usort($strings, function ($a, $b) {
        return strlen(trim($b)) - strlen(trim($a));
    });
    return $strings[$n - 1];
}

echo "Iteration 3: \n" . "Nth Largest -> " . longestStr($text, $n);
echo "\n \n";

// Iteration 4

	$numbers = [1, 3, 5, 7, 7, 8, 0];
	$valid = [1, 2, 3, 5];

function unique($a, $b) {
    return array_merge($a, $b); // Here we merge both numeric arrays
}

$result = unique($numbers, $valid); // First pass the values trhough the function
$result1 = sort($result); // Second we sort the arrays in order asc
$result = array_unique($result); // Third we keep only the unique values

echo "Iteration 4: \n";
print_r($result);
echo  "\n";


// Iteration 5

$arrSum1 = [1, 2, 3];
$arrSum2 = [4, 5, 6];
$arrSum3 = [7, 8, 9];

function sum($a, $b, $c) {
    echo "First array sum result is " . ($a[0] + $b[0] + $c[0]) . "!" . "\n";
    echo "Second array sum result is " . ($a[1] + $b[1] + $c[1]) . "!" . "\n";
    echo "Third array sum result is " . ($a[2] + $b[2] + $c[2]) . "!" . "\n";
}

echo "Iteration 5: \n";
echo sum($arrSum1, $arrSum2, $arrSum3);
echo "\n";


// Iteration 6

$arrSum1 = [1, 2, 3];
$arrSum2 = [4, 5, 6];
$arrSum3 = [7, 8, 9];

$averageFunction = function ($a) {
    $a = array_filter($a);
    $total = array_sum($a) / count($a);
    return $total;
};

echo "Iteration 6: \n";
$result = $averageFunction($arrSum1);
print_r("The average number of the first array is $result \n");

$result = $averageFunction($arrSum2);
print_r("The average number of the second array is $result \n");

$result = $averageFunction($arrSum3);
print_r("The average number of the third array is $result \n \n");


// BONUS
function areAnagrams($str1, $str2)
{
    return count_chars($str1, 1) == count_chars($str2, 1);
}

$string1 = "'bored'"; // Change the value to check if anagram
$string2 = "'robed'"; // Change the value to check if anagram

if (areAnagrams($string1, $string2)) {
    echo "Bonus 1: $string1 and $string2 are anagrams.";
} else {
    echo "Bonus 1: $string1 and $string2 are not anagrams.";
};

echo "\n \n";

// Bonus 2

function rearrangeArray($arr)
{
    $negatives = [];
    $nonNegatives = [];
    // First create two arrays for negatives and nonNegatives numbers, then add to the respectives
    foreach ($arr as $num) {
        if ($num < 0) {
            $negatives[] = $num;
        } else {
            $nonNegatives[] = $num;
        }
    }
    return array_merge($negatives, $nonNegatives); // We merge both arrays into one
}

$inputArray = [10, -20, 0, 30, 40, 50];
$resultArray = rearrangeArray($inputArray); // Re-arrange the array

print_r($resultArray);



	$fruits = array("apple" => 1, "banana" => 2, "orange" => 3, "mango" => 4);

	foreach($fruits as $fruit){
		 echo "The current value in array is $fruit\n";
	}
	
	// But if we want to know what key we are trying to access in detail, do:
	
	foreach($fruits as $key => $fruit) {
		echo "Fruit $key has a value of $fruit.\n";
	}
