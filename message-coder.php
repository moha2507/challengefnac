<?php
    $message1 = "0@sn9sirppa@#?ia’jgtvryko1";
    $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
    $message3 = "aopi?sgnirts@#?sedhtg+p9l!";

    $length_message = mb_strlen($message1)/2;
    $substract = mb_substr($message1 , 5 , $length_message);
    $remplace = str_replace( '@#?' , ' ' , $substract);
    $reverse = strrev($remplace);

    $length_message = mb_strlen($message2) / 2;
    $substract = mb_substr($message2 , 5 , $length_message);
    $remplace = str_replace( '@#?' , ' ' , $substract);
    $reverse_message2 = strrev($remplace);

    $length_message = mb_strlen($message3)/ 2;
    $substract = mb_substr($message3 , 5 , $length_message);
    $remplace = str_replace( '@#?' , ' ' , $substract);
    $reverse_message3 = strrev($remplace);

    echo ($reverse . ' ' . $reverse_message2 .' ' . $reverse_message3);