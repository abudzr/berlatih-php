<?php

//kode di sini
function tukar_besar_kecil($string) {
    $alphabets = str_split($string);
    $word = '';
    foreach ($alphabets as $alphabet) {
        if(ctype_lower($alphabet)) {
            $word .= strtoupper($alphabet);
        }else {
            $word .= strtolower($alphabet);
        }
        
    }
    echo $word. "<br/>";
}

    $cases = ['Hello World', 'I aM aLAY', 'My Name is Bond!!', 'IT sHOULD bE me', '001-A-3-5TrdYW'];
    foreach ($cases as $case) {
    tukar_besar_kecil($case);

}

// TEST CASES
// echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
// echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
// echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
// echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
// echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>