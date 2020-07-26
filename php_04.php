<?php
function twice($i){
    $result = 2 * $i;
    return $result;
}
$result = twice(10);
echo $result;
echo "\n";

function f($a, $b){
    $result = $a + $b;
    return $result;
}
$result = f(4, 5);
echo $result;
echo "\n";


function kakezan($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    echo $result;
}

kakezan(array(1, 3, 5, 7, 9));
echo "\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a)
        $max_number = $a;
    }
    return $max_number;
}

echo max_array(array( 4, 9, -2, 7));
echo "\n";

$html_body = '赤<br><p>青</p><strong>緑</strong>';
echo $html_body;
echo "\n";
echo strip_tags($html_body);
echo "\n";

$book = array("大型本", "文庫");
array_push($book, "リーフレット", "参考図書");
print_r($book);
echo "\n";

$array1 = ["7月", "夜"];
$array2 = ["台風", "停電", "電源落ちる"];
$array = array_merge($array1, $array2);
print_r($array);
echo "\n";

echo time();
echo "\n";

echo mktime();
echo "\n";

echo date("l", mktime(0, 0, 0, 3, 11, 2011));
echo "\n";

echo date('l j m');
echo "\n";
?>