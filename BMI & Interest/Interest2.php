<?php
    $InitialAmount = $_POST["InitialAmount"];
    $AnnualInterestRate= $_POST["AnnualInterestRate"];
    $NumberofYears= $_POST["NumberofYears"];
    echo "Initial Amount: ", $InitialAmount, "<br>";
    echo "Annual Interest Rate: ", $AnnualInterestRate, "<br>";
    echo "Number of Years: ", $NumberofYears, "<br>";
    $a=1;
    for ( $a=1 ; $a<=$NumberofYears ; $a++ )
        {
            echo "Year", $a," : ", $InitialAmount*(pow((1+($AnnualInterestRate/100)), $a)), " Bath", "<br>";
            
        }
?>