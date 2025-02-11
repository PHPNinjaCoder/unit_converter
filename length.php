<?php
function convertLength($value, $fromUnit, $toUnit) {
    $units = [
        'mm' => 0.001,
        'cm' => 0.01,
        'm' => 1,
        'km' => 1000,
        'in' => 0.0254,
        'ft' => 0.3048,
        'yd' => 0.9144,
        'mi' => 1609.34,

    ];

    return $value * $units[$fromUnit] / $units[$toUnit];
}

$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $value = $_POST['value'];
    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];
    $result = convertLength($value, $fromUnit, $toUnit);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Converter</title>
</head>
<body>
    <h1>Length Converter</h1>

    <form method = "post">
        <input type="number" name="value" required>
        <select name="fromUnit">
            <option value="mm">Millimeter</option>
            <option value="cm">Centimeter</option>
            <option value="m">Meter</option>
            <option value="km">Kilometer</option>
            <option value="in">Inch</option>
            <option value="ft">Foot</option>
            <option value="yd">Yard</option>
            <option value="mi">Mile</option>
        </select>
        <select name="toUnit">
            <option value="mm">Millimeter</option>
            <option value="cm">Centimeter</option>
            <option value="m">Meter</option>
            <option value="km">Kilometer</option>
            <option value="in">Inch</option>
            <option value="ft">Foot</option>
            <option value="yd">Yard</option>
            <option value="mi">Mile</option>
        </select>
        <button type="submit">Convert</button>


    </form>
    <?php if ($result !== ''): ?>
        <h2>Result: <?= $result ?></h2>
        <?php endif; ?>
        <a href="index.php">Back to Main</a>
    
</body>
</html>
