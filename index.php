<?php
// $marks = 89;

// if ($marks>=80){
//     echo "The Grade is A+";
// }
// else if ($marks>=70){
//     echo "The Grade is A";
// }
// else if ($marks>=60){
//     echo "The Grade is A-". "<br>";
// }


// switch($marks){
//     case 80;
//     echo "The Grade is A+";
//     break;

//      case 70;
//     echo "The Grade is A";
//     break;

//      case 60;
//     echo "The Grade is A-";
//     break;

//     default:
//     echo "The Grade is F";
//     break;

// }

// $rahim = "Nothing";

// switch($rahim){
//     case "car";
//     echo "Long Tour";
//     break;


//     case "bike";
//     echo "Hang Out";
//     break;


//     case "cycle";
//     echo "Go to Field";
//     break;


// default:
//     echo "Stay Home";
//     break;
// }

function sum($number1, $number2){
    $x = $number1;
    $y = $number2;
    $result = $x+$y;
    // echo $result;
    return $result;
}
// sum($number1, $number2);
sum(56,60);

$sumValue = sum(56,60);
echo $sumValue."<br>";

$number3 = 200;

// $sumValue + $number3
$secondSumValue = $sumValue + $number3;

echo $secondSumValue;
?>