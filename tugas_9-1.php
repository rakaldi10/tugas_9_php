<?php
$awal = 0; //input 1
$n = 22; //input 2
$a = 0;
$b = 1;
$c = 0;
$n2 = $awal + $n;
$hasil = array();
//Fn = Fn-2 + Fn-1;
for ($i = 1; $i <= $n2; $i++) {
    if ($i == 1) {
        $hasil[] = $a;
    } else if ($i == 2) {
        $hasil[] = $b;
    } else { //0,1,1
        $c = $a + $b;
        $a = $b;
        $b = $c;
        /*
        0 1 1 3
        a b c
          a b c
            a b c
        */
        // Mencetak deret bilangan fibonacci berikutnya.
        $hasil[] = $c;
    }
}
$final = array_slice($hasil, $awal, $n, true);
echo implode(" ", $final);
