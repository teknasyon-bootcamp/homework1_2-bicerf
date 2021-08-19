<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 456; // kilo (kg)
$height = 1354; // boy (cm)
$age = 1325; // yaş (sene)

$guess = "5173.215"; 
$guess=(float)$guess;

if ($gender == "male") { 
    $bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
    $bmr=number_format($bmr,3,".","");

    if ($bmr>$guess) {
        echo "BMR: $bmr\n<br />Tahmin değerinden büyük";
    }
    elseif ($bmr<$guess) {
        echo "BMR: $bmr\n<br />Tahmin değerinden düşük";

    }
    else {
        echo "BMR: $bmr\n<br />Tahmin değerine eşit";
    }
} elseif ($gender=="female"){
    $bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
    $bmr=number_format($bmr,3,".","");

    if ($bmr>$guess) {
        echo "BMR: $bmr\n<br />Tahmin değerinden büyük";
    }
    elseif ($bmr<$guess) {
        echo "BMR: $bmr\n<br />Tahmin değerinden düşük";

    }
    else {
        echo "BMR: $bmr\n<br />Tahmin değerine eşit";
    }
}
else {
    echo "Cinsiyet belirtiniz!!!";
}
