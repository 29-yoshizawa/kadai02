<?php echo 'hello php!' ;
function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
    $result += $i;
    }
    return $result;
}
echo sum(100);
echo "\n";

$string = "ABCDEF";
echo strlen($string);
echo "\n";

$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;
echo "\n";

$array = array(1, 2, 3, 11, 7, 17, 27, 8, 9, 10);
echo count($array);
echo "\n";

$array = array(2, 5, 9, 7, 1, 8, 6, 4);
asort($array);
print_r($array);
arsort($array);
print_r($array);
echo "\n";