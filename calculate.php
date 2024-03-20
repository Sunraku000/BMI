<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BMI Calculator</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <?php

    $name = "Secretario, Jordan";
    $age = 21;
    $address = "Navotas City";
    $contactNumber = "09982655787";
    $birthday = "2003,10,01";
    $gender = "Male";
    $bloodType = "O";


    $weight_kg = 62;
    $height_cm = 167;


    $bmi_metric = calculateBMI($weight_kg, $height_cm);

    $weight_lbs = $weight_kg * 2.20462;
    $height_inches = $height_cm * 0.393701;


    $bmi_imperial = calculateBMI($weight_lbs, $height_inches, 'imperial');


    function calculateBMI($weight, $height, $unit = 'metric') {
        if ($unit == 'imperial') {
            return ($weight / ($height * $height)) * 703; 
        } else {
            return $weight / (($height / 100) * ($height / 100)); 
        }
    }
    ?>
    
    <h2>Personal Information</h2>
    <div class="info-section">
        <p><strong>Name:</strong> <?php echo $name ?></p>
        <p><strong>Age:</strong> <?php echo $age ?></p>
        <p><strong>Address:</strong> <?php echo $address ?></p>
        <p><strong>Contact Number:</strong> <?php echo $contactNumber ?></p>
        <p><strong>Birthday:</strong> <?php echo $birthday ?></p>
        <p><strong>Gender:</strong> <?php echo $gender ?></p>
        <p><strong>Blood Type:</strong> <?php echo $bloodType ?></p>
    </div>
</div>
    <div class="container">
    <h2>BMI Information</h2>
    <div class="info-section">
        <h3>Metric Units</h3>
        <p><strong>Weight:</strong> <?php echo $weight_kg ?> kg</p>
        <p><strong>Height:</strong> <?php echo $height_cm ?> cm</p>
        <p><strong>BMI:</strong> <?php echo round($bmi_metric, 1) ?></p>
    </div>

    <div class="info-section">
        <h3>Imperial Units</h3>
        <p><strong>Weight:</strong> <?php echo round($weight_lbs, 1) ?> lbs</p>
        <p><strong>Height:</strong> <?php echo round($height_inches, 1) ?> inches</p>
        <p><strong>BMI:</strong> <?php echo round($bmi_imperial, 1) ?></p>
    </div>
</div>
</body>
</html>
