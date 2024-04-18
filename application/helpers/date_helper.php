<?php
/**
 * 
 * @param type $date Y-m-d
 * @param type $days + 1 days
 * @return type
 */
function addDaysIntoDate($date,$days){
    return date('Y-m-d', strtotime($date. $days));
}
function test(){
    echo "Ram";
}