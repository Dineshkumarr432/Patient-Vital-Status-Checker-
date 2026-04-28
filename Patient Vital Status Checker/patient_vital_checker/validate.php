<?php

//Higher order function which accepts one {vital record -> $vitalData } and one {callbackfunction -> $ruleFunction} 

function validateVital($vitalData, $ruleFunction){

    return $ruleFunction($vitalData);
}


?>