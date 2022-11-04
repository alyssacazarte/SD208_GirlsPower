<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="register.css"> 
</head>
<body>
    <div class="full-page">
        <div class="navbar">    
            <div>
                <a href='index.php'><b>Registration Form</b></a>
      </div> 
    <nav>
        <ul id='MenuItems'>
            <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width: auto;"><b>Click Here</b></button>
            </li>
        </ul>
    </nav>
</div>
<div id='login-form' class='login-page'>
    <div class="form-box">
        <div class='button-box'>
            <div id='btn'></div>
            <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
            <button type='button' onclick='register()' class='toggle-btn'>Register</button>
        </div>
        <form id='login' class='input-group-login' action="welcome1.php" method="post" onsubmit="return validate1()">
            <input type='text' class='input-field' name="emailaddress" placeholder='Email Address'>
            <input type='password' class='input-field' name="password" placeholder='Password'>
            <input type='checkbox' class='check-box'><span>Remember Password</span>
            <button type='submit' class="submit-btn">Submit</button>
            
        </form>
        <form id="register"  class='input-group-register' action="welcome.php" method="post" onsubmit="return validate()">
            <input type='text' class='input-field' name="firstname" placeholder='First Name' >
            <input type='text' class='input-field' name="lastname"placeholder='Last Name'>
            <input type='email' class='input-field' name="email" placeholder='Email' >
            <input type='address' class='input-field' name="address" placeholder='Address' >
            <input type='password' class='input-field' name="password" placeholder='Password' >
            <input type='password' class='input-field' name="confirmpassword" placeholder='Confirm Password' >
            <input type='checkbox' class='check-box'><span>I agree to the terms and conditions</span>
            <button type='submit' class="submit-btn">Submit</button>
        </form>
    </div>
</div>
</div>
<script>
    var x=document.getElementById('login');
    var y=document.getElementById('register');
    var z=document.getElementById('btn');
    function register()
    {
        x.style.left='-400px';
        y.style.left='50px';
        z.style.left='110px';
    }
    function login()
    {
        x.style.left='50px';
        y.style.left='450px';
        z.style.left='0px';
    }
</script>
<!--this code is for the when you click out the login or registration page the form-box dissappears-->
<script>
    var modal = document.getElementById('login-form');
    window.onclick = function(event)
    {
        if (event.target == modal)
        {
            modal.style.display = "none";
        }
    }
    </script>
    <script>
    function validate(){
            var firstname = document.forms["register"]["firstname"].value;    
            if (firstname==""){
                alert("Fill up the first name please!");
                return false;
            }
            if(firstname.length < 2){
                alert("Length of first name must be at least 2 characters");
                return false;
            }
            if(firstname.length > 25){
                alert("Length of first name must not exceed 25 characters");
                return false;
            }
            var lastname = document.forms["register"]["lastname"].value;
            if (lastname==""){
                alert("Fill up the last name please!");
                return false;
            }
            if (lastname.length < 2){
                alert("Length of last name must be at least 2 characters");
                return false;
            }
            if (lastname.length > 25){
                alert("Length of last name must not exceed 25 characters");
                return false;
            }
            var email= document.forms["register"]["email"].value;
            if (email==""){
                alert("Fill up the email please!");
                return false;
            }else{
                var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
                var x= re.test(email);
                if(x){

                }else{
                    alert("Format of email must be valid");
                    return false;
                }
            }
            var address= document.forms["register"]["address"].value;
            if (address==""){
                alert("Fill up the address please!");
                return false;
            }
            var password= document.forms["register"]["password"].value;
            if (password==""){
                alert("Fill up the password please!");
                return false;
            }
            var confirmpassword= document.forms["register"]["confirmpassword"].value;
            if (confirmpassword !=password){
                alert("Your password did not match!");
                return false;    
               
            }

        }
        </script>
        <script>
        function validate1(){
            var emailaddress = document.forms["login"]["emailaddress"].value;    
            if (emailaddress==""){
                alert("Fill up the email address please!");
                return false;
            }
            var password = document.forms["login"]["password"].value;
            if (password==""){
                alert("Fill up the password please!");
                return false;
            }
        }
</script>
</body>
</html>