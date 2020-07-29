<?php
function ubah_huruf($string){

//kode di sini

    $splits = str_split($string);
    $word = '';
    foreach ($splits as $split) {
        $word .= chr(ord($split)+1);
    }
    echo $word . "<br/>";
    }

    $cases = ['wow', 'developer', 'laravel', 'keren', 'semangat'];
    foreach ($cases as $case) {
        echo "Kata ".$case.": ";
        ubah_huruf($case);

    }

// TEST CASES
// echo ubah_huruf('wow'); // xpx
// echo ubah_huruf('developer'); // efwfmpqfs
// echo ubah_huruf('laravel'); // mbsbwfm
// echo ubah_huruf('keren'); // lfsfo
// echo ubah_huruf('semangat'); // tfnbohbu

?>