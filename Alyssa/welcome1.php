<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register1.css">
</head>
<body>
    <div class="full-page1">
        <div class="navbar">
            <center>
            <h1>Log In Successfully!</h1>
            <table id="register1">
            <tr>
            <th><h3>Email Address</h3></th>
            <th><h3>Password</h3></th>
            </tr>
            <tr>
                <td><h4><?php echo $_POST["emailaddress"]; ?></h4></td>
                <td><h4><?php echo $_POST["password"]; ?></h4></td>
            </tr>
            </center>
            </table>
        </div>
    </div>
</body>
</html>






