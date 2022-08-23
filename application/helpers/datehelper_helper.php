<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getMonthName($monthIndex){
    if($monthIndex > 0 && $monthIndex <13){
        $monthNameArray = array(
            'Január', 'Február', 'Március', 'Április', 'Május',
            'Június', 'Július', 'Augusztus', 'Szeptember', 'Október',
            'November', 'December'
        );

        return $monthNameArray[$monthIndex-1];
    }
    return '';
}