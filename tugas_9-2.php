<?php
$awal = 0; //input 1
$n = 200; //input 2
$n2 = $awal + $n;
$hasil = array();
for ($a = 2; $a <= $n2; $a++) {
    $mod = 1;
    for ($b = 2; $b < $a; $b++) {
        //modulus habis dibagi $b
        if ($a % $b == 0) {
            $mod = 0;
        }
    }
    if ($mod == 1) {
        $hasil[] = $a;
    }
}

$final = array_slice($hasil, $awal, $n, true);
echo implode(" ", $final);
