<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 456; // kilo (kg)
$height = 1354; // boy (cm)
$age = 1325; // yaş (sene)

$guess = "5173.215"; 
$guess=(float)$guess; //burada string guess değişkenini floata çeviriyoruz.

if ($gender == "male") { //erkek için BMR hesaplaması
    $bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
    $bmr=number_format($bmr,3,".",""); //bu kısımda ondalık sayıyı virgülden sonra 3 basamak yuvarlıyoruz

    if ($bmr>$guess) {//büyüklük durumunda olacaklar
        echo "BMR: $bmr\n<br />Tahmin değerinden büyük";
    }
    elseif ($bmr<$guess) {//düşük olma durumunda olacaklar
        echo "BMR: $bmr\n<br />Tahmin değerinden düşük";

    }
    else {//eşitlik durumunda olacaklar
        echo "BMR: $bmr\n<br />Tahmin değerine eşit";
    }
} elseif ($gender=="female"){ //kadın için BMR hesaplaması
    $bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
    $bmr=number_format($bmr,3,".",""); //bu kısımda ondalık sayıyı virgülden sonra 3 basamak yuvarlıyoruz

    if ($bmr>$guess) {//büyüklük durumunda olacak
        echo "BMR: $bmr\n<br />Tahmin değerinden büyük";
    }
    elseif ($bmr<$guess) { //düşük olma durumunda olacaklar
        echo "BMR: $bmr\n<br />Tahmin değerinden düşük";

    }
    else { //eşitlik durumunda olacaklar
        echo "BMR: $bmr\n<br />Tahmin değerine eşit";
    }
}
else { //bu kısım cinsiyet belirtilmemesi durumunda ekrana verilir
    echo "Cinsiyet belirtiniz!!!";
}
