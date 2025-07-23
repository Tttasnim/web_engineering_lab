
<?php

    echo "Hello, I am Tasnim from 61_K1 <br>"; //end


    //number print
    $num1 = 23;
    $num2 =7;
    $sum = $num1 + $num2;
    $multi = $num1 * $num2;
    $str = "This is our lab<br>";
    echo $str;
    echo "The sum is: " . $sum . "<br>The Multiply is: " . $multi . "<br>"; //end


    //array print, length
    $stud = array("A", "B", 23);
    foreach ($stud as $a){
        echo $a . "<br>";
    }
    $length = "Hello World";
    echo strtolower($length) . "<br>"; 
    echo strlen($length) . "<br>";  //end

/*
//can also written as:
      
    $str = "This is a demo lab";
    $vowels = ['a','e','i','o','u','A','E','I','O','U'];

    $chars = str_split($str);
    foreach ($chars as $i => $char) {
        if (in_array($char, $vowels)) {
            echo "Vowel '$char' at index $i .<br>";
            
            $str = substr_replace($str, '*', $i, 1);
        }
    }
    echo "\nModified string: $str\n";

    */
    $str = "This is a damo Lab";
    $vowel = ["a", "e", "i", "o", "u"];
    $vowel_found = [];
    $vowel_positions = [];
    $result = "";

    // find vowel, find vowel position and replace with "l"
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if (in_array(strtolower($char), $vowel)) {
            $vowel_found[] = strtolower($char);
            $vowel_positions[] = $i;
        }
    }

    echo "Vowels found: " . implode(", ", $vowel_found) . "<br>";
    echo "Positions of vowels: " . implode(", ", $vowel_positions) . "<br>";

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if (in_array(strtolower($char), $vowel)) {
            $result .= "l";
        } else {
            $result .= $char;
        }
    }
    echo "result: " . $result; //end
?>