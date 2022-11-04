<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register2.css">
</head>
<body>
<div class="full-page2">
    <div class="navbar">
   <center>
    <h1>Registered Successfully!</h1>
    <table id="register2">
    <tr>
    <th><h3>First Name</h3></th>
    <th><h3>Last Name</h3></th>
    <th><h3>Address</h3></th>
    <th><h3>Password</h3></th>
    <th><h3>Confirm Password</h3></th>
    </tr>
    <tr>
        <td><h4><?php echo $_POST["firstname"];?></h4></td>
        <td><h4><?php echo $_POST["lastname"];?></h4></td>
        <td><h4><?php echo $_POST["address"];?></h4></td>
        <td><h4><?php echo $_POST["password"];?></h4></td>
        <td><h4><?php echo $_POST["confirmpassword"];?></h4></td>
    </tr>
    </center>
    </table>
    </div>
</div>
</body>
</html>





 
 
 
 
 
 