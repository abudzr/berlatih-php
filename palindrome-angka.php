<?php

function palindrome_angka($angka) {
  // tulis kode di sini
    $result = '';
    $strangka = strval($angka);
    $revesedstring = '';
    for($a = strlen($strangka) - 1; $a >= 0; $a--){
        $revesedstring .= $strangka[$a];
    }
    if ($revesedstring == $angka){
        $angka += 1;
    }
    while(true){
        $strangka = strval($angka);
        $revesedstring = '';
        for($a = strlen($strangka) - 1;$a >= 0; $a--){
            $revesedstring .= $strangka[$a];
        }
        if ($revesedstring == $angka){
            global $result;
            $result = $strangka .'<br>';
            return $result;
        } else {
            $angka += 1;
        }
        ;
    }
    ;
};

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>