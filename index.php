<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br><br>";

#Question 2
echo "2. Replace “-“ in \$date with “/“ and print out the result:<br>";
$date = str_replace("-", "/", $date);
echo "Result: $date<br><br>";

#Question 3
echo "3. Compare \$date with \$tar and then if the result is greater than 0, you should print out “the
future”; if the result is less than 0, you should print out “the past”; if the result is equal to 0,
you should print out “Oops”. You must use if-elseif statement in this question:<br>";
;if (strcmp($date, $tar) > 0) {
    echo "Result: The future<br><br>";
} elseif (strcmp($date, $tar) < 0) {
    echo "Result: The past<br><br>";
} else {
    echo "Result: Oops<br><br>";
}

#Question 4
echo "4. Search for “/“ in \$date and print out all positions. If there are more than one position, please
delimit each position value with space:<br>";
echo "Result: ";
$start = 0;
while (1) {
    $pos = strpos($date, "/", $start);
    if ($pos == FALSE) {
        echo "<br><br>";
        break;
    } else {
        echo "$pos ";
        $start = $pos + 1;
    }
}

#Question 5
echo "5. Count the number of words in \$date and print out the result:<br>";
$word_count = str_word_count($date, 0);
echo "Result: $word_count<br><br>";

#Question 6
echo "6. Return the length of a string and print out the result:<br>";
echo "The string I use is \$date<br>";
$string_length = strlen($date);
echo "Result: $string_length<br><br>";

#Question 7
echo "7. Return the ASCII value of the first character of a string and print out the result<br>";
echo "The string I use is \$date<br>";
$ASCII = ord($date);
echo "Result: $ASCII<br><br>";

#Question 8
echo "8. Return the last two characters in \$date and print out the result:<br>";
$last_two_characters = substr($date, -2);
echo "Result: $last_two_characters<br><br>";

#Question 9
echo "9. Break \$date into an array and set “separator” parameter as “/“ and print out the each array
element and delimit all elements with space:<br>";
$array = explode("/", $date);
echo "Result: ";
foreach ($array as $value) {
    echo "$value ";
}
echo "<br><br>";

#Question 10
echo "Loop through the array \$year and you need to identify whether each year is a leap year. If it
is, print out “True”, otherwise, print out “False”:<br>";
echo "Result - 1: <br>";
foreach ($year as $value){
    switch ($value) {
        case ($value%4 == 0 && $value%100 != 0):
            echo "$value : This is a leap year<br>";
            break;
        case $value%400 == 0:
            echo "$value : This is a leap year<br>";
            break;
        default:
            echo "$value : This is not a leap year<br>";
    }
}
echo "Result - 2: <br>";
for ($i = 0; $i < count($year); $i++) {
    switch ($year[$i]) {
        case ($year[$i]%4 == 0 && $year[$i]%100 != 0):
            echo "$year[$i] : This is a leap year<br>";
            break;
        case $year[$i]%400 == 0:
            echo "$year[$i] : This is a leap year<br>";
            break;
        default:
            echo "$year[$i] : This is not a leap year<br>";
    }
}
echo "Result - 3: <br>";
$i = 0;
while ($i < count($year)){
    switch ($year[$i]) {
        case ($year[$i]%4 == 0 && $year[$i]%100 != 0):
            echo "$year[$i] : This is a leap year<br>";
            break;
        case $year[$i]%400 == 0:
            echo "$year[$i] : This is a leap year<br>";
            break;
        default:
            echo "$year[$i] : This is not a leap year<br>";
    }
    $i++;
}
echo "Result - 4: <br>";
$i = 0;
do {
    switch ($year[$i]) {
        case ($year[$i]%4 == 0 && $year[$i]%100 != 0):
            echo "$year[$i] : This is a leap year<br>";
            break;
        case $year[$i]%400 == 0:
            echo "$year[$i] : This is a leap year<br>";
            break;
        default:
            echo "$year[$i] : This is not a leap year<br>";
    }
    $i++;
} while ($i < count($year))

?>