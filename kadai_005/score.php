<?php
$scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
$total = 0;
foreach($scores as $score){
    $total += $score;
}
echo "合計".$total;

$mean = $total/count($scores);
echo "平均".$mean;