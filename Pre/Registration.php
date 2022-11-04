<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
// define variables and set to empty values
$fname = $email = $lname = $address = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["firstname"]);
  $lname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $pass = test_input($_POST["password"]);
  

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// echo "your output";
// echo $fname;
// echo $lname;
// echo $email;
// echo $address;
// echo $pass;
?>

<div class="main">
  <h1>Acount Details</h1>
  <p>Welcome your First Name is: <?php echo $fname ?></p>
  <p>Your Last Name is:<?php echo  $lname ?></p>
  <p>Your Email is: <?php echo  $email ?></p>
  <p>Your Address is: <?php echo$address ?></p>
  <p>Your Password is: <?php echo $pass?></p>
</div>
</body>
</html>


