<?php
    $Name= $_POST["Name"];
    $Height= $_POST["Height"];
    $Weight= $_POST["Weight"];
    $cal=$Weight/pow($Height/100,2);
    echo "Name: ", $Name, "<br>";
    echo "Height: ", $Height, "<br>";
    echo "Weight: ", $Weight, "<br>";
    echo "Result", "<br>";
    printf(("BMI: %.2f<br>"), $cal);
    if ($cal < 18.5) {
        echo "BMI Categories: Underweight", "<br>";
    } elseif ($cal >= 18.5 && $cal <= 24.9) {
        echo "BMI Categories: Normal weight", "<br>";
    } elseif ($cal >= 25 && $cal <= 29.9) {
        echo "BMI Categories: Overweight", "<br>";
    }else{
        print "BMI Categories: Obese";
        }
?>
