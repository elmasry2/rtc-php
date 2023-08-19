<?php 
require_once('../s5/DB.php');
$search = $_GET['q'];

// get data from database 
// insert data into Datbase 
if(isset($search) && !empty($search)){
    //  echo $search;
    //  return 0;   
    $stmt = $conn->prepare("SELECT * FROM users WHERE full_name LIKE :search OR phone LIKE :search OR email LIKE :search ");
    //$stmt->bindParam(':search', "%$search%");
   $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);


    //$array = $conn->prepare("SELECT * FROM users WHERE full_name = ".$search."");
}else{
    $stmt = $conn->prepare("SELECT * FROM users");

}
// use exec() because no results are returned

$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Process the $users array her
    $stmt->closeCursor();

?>
<!-- show your data inside html table -->
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<a href="http://127.0.0.1/learning/s5"> New User</a>
<a href="http://127.0.0.1/learning/s6"> List All User</a>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
  <label for="search">Search User:</label>
  <input type="search" id="search" name="q" value="<?php echo $search;?>">
</form>
<h2>Show All Users  ( <?php echo count($users);?>)</h2>

<table style="width:100%">
  <tr>
  <th>#</th>
  <th>Full Name</th>
    <th>username</th>
    <th>Email</th>
    <th>Phone</th>
  </tr>
  <?php if (count($users)) { ?>
    <?php foreach ($users as $index=>$user) { ?>
        <tr>
            <td><?php echo ++$index;?></td>
            <td><?php echo $user['full_name']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['phone']; ?></td>
        </tr>
    <?php } ?>
<?php } else { ?>
    <tr>
        <td colspan="5">
            <p style="color:red; text-align:center;">No Data Found</p>
        </td>
    </tr>
<?php } ?>
</table>

</body>
</html>

 



