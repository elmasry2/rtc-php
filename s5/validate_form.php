<?php
// define variables and set to empty values
$full_nameErr = $emailErr = $passwordErr = $phoneErr = "";
// $full_name = $email = $password = $phone = "";
$username = rand(111111111,999999999);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["full_name"])) {
    $full_nameErr = "Full Name is required";
  } else {
    $full_name = test_input($_POST["full_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$full_name)) {
      $full_nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  } else {
    if (preg_match('/^[0-9]{11}$/', $_POST['phone'])) {
       
        $phone = test_input($_POST["phone"]);
      }else{
        $phoneErr = "Phone is Invalid and must be at least 11 numbers";

        }
  }
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
  if(empty($phoneErr) && empty($emailErr) && empty($full_nameErr) && empty($passwordErr)){
    insertUser($conn,$username,$full_name,$email,$password,$phone);
  
  // insert user into Database 
  $conn = null;
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function insertUser($conn,$username,$full_name,$email,$password,$phone){
    try {
 // Encrypt the password using bcrypt
 $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // insert data into Datbase 
        $sql = "INSERT INTO users (username, full_name, phone, email,password)
        VALUES ('$username', '$full_name', '$phone', '$email', '$hashed_password($password)')";
        // use exec() because no results are returned
  
        $conn->exec($sql);
        echo "<p style='color:green;'></p>New record created successfully</p>";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage().' Code Line : '. $e->getLine();
        }
}

?>