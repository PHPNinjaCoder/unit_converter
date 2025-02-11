<?php

function convertTemperature($value, $fromUnit, $toUnit) {
    if ($fromUnit == $toUnit) {
        return $value;
    }

    if ($fromUnit == 'celsius') {
        if ($toUnit == 'fahrenheit') {
            return $value * 9 / 5 + 32;
        } elseif ($toUnit == 'kelvin') {
            return $value + 273.15;
        }
    } elseif ($fromUnit == 'fahrenheit') {
        if ($toUnit == 'celsius') {
            return ($value - 32) * 5 / 9;
        } elseif ($toUnit == 'kelvin') {
            return ($value + 459.67) * 5 / 9;
        }
    } elseif ($fromUnit == 'kelvin') {
        if ($toUnit == 'celsius') {
            return $value - 273.15;
        } elseif ($toUnit == 'fahrenheit') {
            return $value * 9 / 5 - 459.67;
        }
    }

    $result = '';
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $value = $_POST['value'];
         $fromUnit = $_POST['fromUnit'];
         $toUnit = $_POST['toUnit'];
         $result = convertTemperature($value, $fromUnit, $toUnit);
     }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>
    <form method="post">
        <input type="number" name="value" required>
        <select name="fromUnit" required>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>
        <select name="toUnit" required>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>
        <button type="submit">Convert</button>
</body>
</html>