<?php 
// ini_set('display_errors', 1); 
// ini_set('display_startup_errors', 1); 
// error_reporting(E_ALL);

// $var = "Something" ;
// $var = ['name'=>'Ahmed','age'=>20];

// $x = 5;
// $y=10;
// echo add().'<br> ';
// $x = 5;
// $y=15;
// echo add().'<br>';

// function add(){

//     return $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
// echo "<br>";
// echo $_SERVER['REQUEST_METHOD'];

// if($_SERVER['REQUEST_METHOD'] == 'GET'){

//   echo $_GET['search'];
//     // echo 'This is GET REquest ';
// }
function searchByName($array, $name) {
    $result = array();
    // Search about name inside array
    foreach ($array as $item) {
        if ($item['name'] == $name) {
            $result[] = $item;
            // break;
        }
    }

    return $result;
}

// Example usage:
$data = [
    ['age'=>16,'name'=>'Ahmed','grade'=>'Fail','percentage'=>45],
    ['age'=>18,'name'=>'Kamal','grade'=>'Fail','percentage'=>49],
    ['age'=>18,'name'=>'kimo','grade'=>'Accept','percentage'=>55],
    ['age'=>17,'name'=>'Eyad','grade'=>'Good','percentage'=>65],
    ['age'=>20,'name'=>'Omar','grade'=>'Very  Good','percentage'=>85],
    ['age'=>22,'name'=>'Hala','grade'=>'Excellent','percentage'=>96]
];


function search_filter($data){
   // Call Search Array 
    $search_result = searchByName($data, $_GET['search']);

    if(count($search_result) == 0 ){
        echo 'No Data Found ';
       }else{
        echo $search_result[0]['name'];
       }
}
// chak if all data validated 
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['search']) && !empty($_GET['search'])){
    echo search_filter($data);
}
// check if data not valid
elseif(empty($_GET['search']) && isset($_GET['search'])){
    echo 'Please Fill Your Search';
}
// return if User Try Bad Request 
else{
    echo 'Bad Request';
}
// print_r($search_result);


?>