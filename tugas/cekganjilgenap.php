<?php 
$platNomor = array('B4356DX', 'B435DX', 'DK433DX', 'B4AD');

function cekGanjilGenap($plat) {

    $val = preg_split("/(,?\s+)|((?<=[a-z])(?=\d))|((?<=\d)(?=[a-z]))/i", $plat);

    if ($val[1] % 2 == 0){
        echo ($plat).'   ===>  true <br>';
    }else{
        echo ($plat).'   ===>  false <br>';
    }
}

foreach($platNomor as $plat){
    cekGanjilGenap($plat);
}

// Ooutput
/* 
    B435DX ===> false
    DK433DX ===> false
    B4AD ===> true
    B4356DX   ===>  true 
*/

?>