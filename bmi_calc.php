<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>

    <link rel="stylesheet" href="stylesheets/bmistyle.css">
</head>
<body>

    
    <div class="b-form">
    <h1>BMI Calculator</h1>
    <form method="post">
        <label for="weight">Weight (in kilograms):</label>
        <input type="number" name="weight" required><br>

        <label for="height">Height (in centimeters):</label>
        <input type="number" name="height" required><br>

        <input type="submit" value="Calculate BMI" class="btn">
        <a href="index.html">back to home page</a>
    </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from the form
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        
        // Function to calculate BMI
        function calculateBMI($weight, $height) {
            // Convert height from centimeters to meters
            $heightMeters = $height / 100;
            
            // Calculate BMI
            $bmi = $weight / ($heightMeters * $heightMeters);
            
            return $bmi;
        }
        
        $bmi = calculateBMI($weight, $height);
        
        echo "<h2>Your BMI is: " . round($bmi, 2) . "</h2>";

        // Interpret BMI
        if ($bmi < 18.5) {
            echo "You are underweight.";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            echo "You have a normal weight.";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            echo "You are overweight.";
        } else {
            echo "You are obese.";
        }
    }
    ?>

    
</body>
</html>
