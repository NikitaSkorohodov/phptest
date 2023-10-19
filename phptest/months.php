<?php
function pr($s) {
    echo '<pre>';
    print_r($s);
    echo '</pre>';
}
function setMonth($days, $dayName) {
    $arrayDays = array('Esmaspaev','Teisipaev','Kolmapaev','Neljapaev','Rede','Laupaev','Puhapaev');
    $start = -1; 
    for ($j = 0; $j < count($arrayDays); $j++) {
        if ($dayName == $arrayDays[$j]) {
            $start = $j;
            break; 
        }
    }

    if ($start != -1) {
        $arMonth = array();

        for ($i = 0; $i < $days; $i++) {
            $dayIndex = ($start + $i) % 7;
            $arMonth[] = $arrayDays[$dayIndex];
        }

        return $arMonth;
    } else {
        $error="valuenimetus";
        return  $error; 
    }
    
}

$arResult = setMonth(31, 'Neljapaev'); 
pr($arResult); 

