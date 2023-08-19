<?php
$description = "W3Schools offers free online tutorials, references and exercises in all the major languages of the web. Covering popular subjects like HTML, CSS, JavaScript, Python, SQL, Java, and many, many more."; 
$keywords = "HTML, Python, CSS, SQL, JavaScript, How to, PHP, Java, C, C++, C#, jQuery, Bootstrap, Colors, W3.CSS, XML, MySQL, Icons, NodeJS, React, Graphics, Angular, R, AI, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Training, Learning, Quiz, Exercises, Courses, Lessons, References, Examples, Learn to code, Source code, Demos, Tips, Website";
$ErrorMessage='';
$url=$_SERVER['HTTP_REFERER'];
parse_str(parse_url($url)['query'], $params);
echo $params['email']; // xyz2@test.com
// chak if all data validated 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])&& isset($_POST['password']) && !empty($_POST['username'])&& !empty($_POST['password'])){
    $username = $_POST['username'];

    $password = $_POST["password"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $emailErr = "Invalid email format";
    }

}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])&& isset($_POST['password']) && (empty($_POST['username']) || empty($_POST['password']))){
   
    $ErrorMessage = ' please fill required inputs';
}elseif($_SERVER['REQUEST_METHOD'] != 'POST'){
    // count parms in url get 
    $count_get_parameters=0;
    // loop parms in url get 
    foreach ($_GET as $key => $value) {
        $count_get_parameters++; 
    }
    // check parms in url get if > 0 
    if($count_get_parameters > 0 ){
        $ErrorMessage =  '<span style="color:red;"> Bad Request </span> ';

    }
  }
// Home Work 
/**
 * Validate username is string
 * validate username length > 6 
 * validate password length > 8 
 * validate password type is contains character & numbers
 */
?>

