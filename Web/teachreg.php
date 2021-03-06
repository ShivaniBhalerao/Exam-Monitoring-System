<?php
require_once 'php/init.php';
$user = new user();
if(!$user->IsLoggedIn() || $user->data()->role!=-1)
{
    header("location: index.php");
}
else
{
    if(input::exists())
    {
        $user->register('subject_data',array(
            "subject_id"=>input::get('cdrn'),
            "subject_name"=>input::get('subject'),
            "prof_name"=>input::get('name'),
            "designation"=>input::get('desig')
        ));

        $user->register('users',array(
            "user_id"=>input::get('cdrn'),
            "password"=>input::get('psw'),
            "role"=>1));
    }
}
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Responsive Side Menu</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
<style>
*{
    margin-right: 5px;
    margin-left: 5px;
    padding-top: 2px;
    padding-bottom: 2px;
}    
body {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 10px 10px 10px 10px;
    background-color: white;
    height: auto;
    width: 500px;
    margin-left: 33%;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: solid;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #6e23ec;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    font-size: larger;
}

.registerbtn:hover {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
    
}
</style>
</head>
<body>

        <nav class="navbar">
                <span class="open-slide">
                  <a href="#" onclick="openSlideMenu()">
                    <svg width="30" height="30">
                        <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                        <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                        <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                    </svg>
                  </a>
                </span>
                
                <ul class="navbar-nav">
                  <li><a href="admin.php">Back</a></li>
                  
                </ul>
              </nav>
            
              <div id="side-menu" class="side-nav">
                <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
                <h3>Admin Panel</h3>
                <a href="index.html">Admin Home Page</a>
                <a href="studreg.html">Student Registration</a>
                <a href="teachreg.html">Teacher Registation</a>
                <a href="#">Remove</a>
                <a href="#">Inspect</a>
                <a href="#">View Credentials</a>
                <a href="#">Logout</a>
                
              </div>


<form action="teachreg.php" method="POST">
  <div class="container">
    <h1>Teacher registration</h1>
    <p>Please fill in this form to create an account.</p>
    <hr noshade>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="[First Name] [Middle Name] [Last Name]" name="name" required>

    <label for="email"><b>CDRN</b></label>
    <input type="text" placeholder="Enter CDRN" name="cdrn" required>

    <label for="phone"><b>Subject</b></label>
    <select name='subject'>
        <option value="wt">WT</option>
        <option value="ip">IP</option>
        <option value="is">IS</option>
        <option value="spm">SPM</option>
        <option value="cc">CC</option>
    </select>

    <br>
    <br>

    <label for="email"><b>Designation</b></label>
    <select name='desig'>
        <option value="Professor">Professor</option>
        <option value="Assistant Prof.">Assistant Prof.</option>
        <option value="Lecturer">Lecturer</option>
    </select>
<br>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr noshade> 
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>