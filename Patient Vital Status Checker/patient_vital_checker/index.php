<?php
include 'vitals.php';
include 'rules.php';
include 'validate.php';
include 'scanner.php';

foreach ($vitals as $vital) {
    $result = [
        "status" => "",
        "message" => ""
    ];
    switch ($vital['vital_type']) {
        case "Temperature":
            $result = validateVital($vital, 'checkTemperature');
            break;
        case "Pulse":
            $result = validateVital($vital, 'checkPulse');
            break;
        case "BP":
            $result = validateVital($vital, 'checkBloodPressure');
            break;
        default:
            $result = [
                "status" => "Invalid",
                "message" => "Unknown Vital Type"
            ];
    }
    echo "Patient: " . $vital["patient_name"] . "<br>"
        . "Vital: " . $vital["vital_type"] . "<br>"
        . "Value: " . $vital["value"] . "<br>";

    echo "Status: " . $result['status'] . "<br>";
    echo "Message: " . $result['message'] . "<br>";



    echo "-----------------------------------<br>";

}

echo "<h3>Project Files:</h3>";

scanFolder(__DIR__);
// $items = scandir(__DIR__);
// foreach ($items as $item) {
//     echo $item . "<br>";
// }


?>