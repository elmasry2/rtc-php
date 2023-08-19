<?php
// this is comment line 
/**
 * new comment 
 * ne comment
 * sdsds
 */

 $number1 = "5";
 $number1 = " FB0C students";
 $number2 = 6;
//  $x = 6;

//  for($i=1;$i<=5;$i++){

//    echo "The number is: $i <br>";
// }
//  do {
//    echo "The number is: $x <br>";
//    $x++;
//  } while ($x <= 5);
//  echo $number1/$number2;
// $data = ['name'=>'Ahmed','age'=>20,'job'=>'student'];
//  echo $number1;
// $data = students();
// echo ' Array Length is : '.count($data).'<br>';

//  echo 'age is : '.$data[1]['age'].'<br>'; 

//  foreach($data as $index=>$student){
//     ++$index;
//     $case=$student['grade']; 
//     switch($case){
//         case 'Very  Good':
//         case 'Good':
//         case 'Excellent':
//         case 'Fail':
//                     echo 'SN:'.$index.' Age: '.$student['age'].' Name: '.$student['name'].' Grade: '.$student['grade'].' <br>';
//             break;
//        default:
//        echo 'SN:'.$index.' Age: '.$student['age'].' Name: '.$student['name'].' Grade: '.$student['grade'].' <br>';

    // }
    // if($student['grade'] == 'Fail'){
    //         echo 'SN:'.$index.' Age: '.$student['age'].' Name: '.$student['name'].' Grade: '.$student['grade'].' <br>';

    // }elseif($student['grade'] == 'Good'){
    //     echo 'SN:'.$index.' Age: '.$student['age'].' Name: '.$student['name'].' Grade: '.$student['grade'].' <br>';

    // }
    // if($student['percentage'] <= 50){
    //     echo 'Student: '.$student['name'].' is '.$student['grade'].'<br>';
    // }elseif($student['percentage'] >=50 && $student['percentage']<=64){
    //     echo 'Student: '.$student['name'].' is '.$student['grade'].'<br>';

    // }elseif($student['percentage'] >=65 && $student['percentage']<=64){
    //     echo 'Student: '.$student['name'].' is '.$student['grade'].'<br>';

    // }
    // echo 'SN:'.$index.' Age: '.$student['age'].' Name: '.$student['name'].' Grade: '.$student['grade'].' <br>';
//  }

// echo 'Age of o index: '.$data[0]['grade'];
// $math = array(0, 15000, 30, 20, -8, -200);
// echo (($myNumber = $math[1]) < 0) ? " number is: (".abs($myNumber).')': " number is: ".number_format($myNumber);
// echo " number is: ".abs($math[4]);
//   if($math[4] < 0 ){
//     echo " number is: (".abs($math[4]).')';

//   } else{
//     echo " number is: ".$math[4];
//   }

// echo $number1;
// echo "Hello RTC";'index.php
// if(is_string($number1) && ($number1 === 10)) {
//     echo 'number is string: '.$number1;
// } else {
//     echo 'Reuslt  is : '.($number1+$number2);

// }

$x=5;
$y=10;
 echo calculator($x,$y,'/');

function calculator($x,$y,$operator){
    switch($operator){
        case '-':
            echo minus($x,$y);
            break;
            case '+':
                echo add($x,$y);
                break;
            case '/':
                echo division($x,$y);
                break;
            case '*':
            echo multiply($x,$y);
            break;
                default:
                    echo 'please ad operators (+ , - , * , /)';    
    }
}
function add($x,$y){
    return $x+$y;
}

function multiply($x,$y){
    return $x*$y;
}

function minus($x,$y){
    return $x-$y;
}
function division($x,$y){

    if($y == 0){
        echo 'Cannot Divided By Zero';
    }else{
        return $x/$y;
    }

    
}


function students(){
   return  $data = [
        ['age'=>16,'name'=>'Ahmed','grade'=>'Fail','percentage'=>45],
        ['age'=>18,'name'=>'Kamal','grade'=>'Fail','percentage'=>49],
        ['age'=>18,'name'=>'Kamal','grade'=>'Accept','percentage'=>55],
        ['age'=>17,'name'=>'Eyad','grade'=>'Good','percentage'=>65],
        ['age'=>20,'name'=>'Omar','grade'=>'Very  Good','percentage'=>85],
        ['age'=>22,'name'=>'Hala','grade'=>'Excellent','percentage'=>96]
    ];
}