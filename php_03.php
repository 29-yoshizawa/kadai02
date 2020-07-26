<?php
$name = "吉澤";
if ($name = "吉澤") {
    echo "私は吉澤です。";
} else {
    echo "吉澤ではありません。";
}
echo "\n";

$total = 0;
for($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple", "orange", "lemon", "blueberry", "melon");
foreach($fruit as $fruits){
echo "ひとつは" . $fruits;
echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
    if ($i % 5 == 0) {
        echo $i;
        echo "\n";
    }
}