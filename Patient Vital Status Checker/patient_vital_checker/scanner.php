<?php

function scanFolder($path, $indent = 0)
{
    // Gets all the items in the directory and stores in an array
    $items = scandir($path);

    foreach ($items as $item) {

        // Skip current and parent directory
        if ($item === '.' || $item === '..') {
            continue;
        }

        $fullPath = $path . DIRECTORY_SEPARATOR . $item;

        // Visual indentation helps show folder structure
        echo str_repeat("&nbsp;&nbsp;&nbsp;", $indent);

        if (is_dir($fullPath)) {

            echo "📁 " . $item . "<br>";

            // Recursive call
            scanFolder($fullPath, $indent + 1);
        } else {

            echo "📄 " . $item . "<br>";
            // echo "indent: " . $indent . "<br>";

        }
    }
}
?>