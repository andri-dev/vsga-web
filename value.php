<?php 

    // Passing Varible by Value
    function tambahSatu($value) {
        $value = $value + 1;
    }

    // Passing Variable by referense
    function tambahDua(&$value2) {
        $value2 = $value2 + 1;
    }

    $a = 5;
    tambahSatu($a);
    echo 'Tambah Satu'.($a);

    echo '<br>';

    $b = 5;
    tambahDua($b);
    echo 'Tambah Dua'. ($b);
?>