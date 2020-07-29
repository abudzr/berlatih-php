<?php

function papan_catur($angka) {
// tulis kode di sini
    for($row=1; $row<=$angka; $row++) {
        echo "<br/>";
        for($col=1; $col<=($angka*2); $col++) {
            $total=$row+$col;
            if($total % 2 == 0) {
                echo "# ";
            }else {
                echo "&nbsp";
            }
        }
        
    }
    echo "<hr/>";
}
echo "papan catur: 4";
papan_catur(4);
echo "papan catur: 8";
papan_catur(8);
echo "papan catur: 5";
papan_catur(5);


?>