<?php

function convertWeight($value, $fromUnit, $toUnit) {
    $units = [
        'mg' => 0.001,
        'g' => 1,
        'kg' => 1000,
        'ton' => 1000000,
        'lb' => 453.592,
        'oz' => 28.3495,
    ];
    
    return $value * $units[$fromUnit] / $units[$toUnit];

}

     $result = '';
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $value = $_POST['value'];
         $fromUnit = $_POST['fromUnit'];
         $toUnit = $_POST['toUnit'];
         $result = convertWeight($value, $fromUnit, $toUnit);
     }

     ?>

     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weight Converter</title>
     </head>
     <body>
        <h1>Weight Converter</h1>
        <form action="" method="post">
            <input type="number" name="value" required>
            <select name="fromUnit" required>
                <option value="mg">Milligram</option>
                <option value="g">Gram</option>
                <option value="kg">Kilogram</option>
                <option value="ton">Ton</option>
                <option value="lb">Pound</option>
                <option value="oz">Ounce</option>
            </select>
            <select name="toUnit" required>
                <option value="mg">Milligram</option>
                <option value="g">Gram</option>
                <option value="kg">Kilogram</option>
                <option value="ton">Ton</option>
                <option value="lb">Pound</option>
                <option value="oz">Ounce</option>
            </select>
            <button type="submit">Convert</button>
     </body>
     </html>