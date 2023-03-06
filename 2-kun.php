<?php

    //date, time
    // Unix time stamp 1970 year 1 january
    echo strtotime("+1 week")."<br>";
    date_default_timezone_set('Asia/Tashkent');
    echo date('Y-m-d H:i:s')."  -  ".date('Y-m-d', strtotime("+1 week"));






    // $str = "Bolajak dasturchi";

    // echo strlen($str)."<br>"; // Satrdagi belgilar sonini sanab beradi
    
    // echo strtolower($str)."<br>"; //satrni kichkina harflar bilan yozib beradi

    // echo strtoupper($str)."<br>"; //satrni katta harflar bilan yozib beradi

    // echo trim($str)."<br>"; //satrni ikki chetidagi probellarni olib tashlaydi

    // echo substr($str, -9)."<br>"; //satrdagi malum bir qismni kesib beradi

    // echo str_replace("dasturchi", "kinochi", $str)."<br>"; //satrdagi malum bir so'zni boshqa so'zga almashtirish imkonini beradi

    // slug web saytga kirgandagi URL link



    
?>