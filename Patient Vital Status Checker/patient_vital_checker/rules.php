<?php

function createResult()
{
    return [
        "status" => "",
        "message" => ""
    ];
}


function checkTemperature($vitalData){

    $result = createResult();

switch(true){
    case($vitalData['value'] < 98):
        $result['status'] = "Low";
            $result['message'] = "Hypothermia Detected";
            return $result;
        case ($vitalData['value'] >= 98 && $vitalData['value'] <= 99):
            $result['status'] = "Normal";
            $result['message'] = "Normal Temperature Detected";
            return $result;
        case ($vitalData['value'] > 99):
            $result['status'] = "High";
            $result['message'] = "Fever Detected";
            return $result;
        default:
            return $result;

    }

}


function checkPulse($vitalData)
{
    $result = createResult();
    switch (true) {
        case ($vitalData['value'] < 60):
            $result['status'] = "Low";
            $result['message'] = "Low Pulse Detected";
            return $result;
        case ($vitalData['value'] >= 60 && $vitalData['value'] <= 100):
            $result['status'] = "Normal";
            $result['message'] = "Normal Pulse Detected";
            return $result;
        case ($vitalData['value'] > 100):
            $result['status'] = "High";
            $result['message'] = "High Pulse Detected";
            return $result;
        default:
            return $result;
    }
}


function checkBloodPressure($vitalData)
{
    $result = createResult();
    switch (true) {
        case ($vitalData['value'] < 60):
            $result['status'] = "Low";
            $result['message'] = "Low BP Detected";
            return $result;
        case ($vitalData['value'] >= 60 && $vitalData['value'] <= 100):
            $result['status'] = "Normal";
            $result['message'] = "Normal BP Detected";
            return $result;
        case ($vitalData['value'] > 100):
            $result['status'] = "High";
            $result['message'] = "High BP Detected";
            return $result;
        default:
            return $result;
    }
}



?>