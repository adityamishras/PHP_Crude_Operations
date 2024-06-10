<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="connection.php" method="POST">
        <h1>Registration Form</h1>
        <br>
        <div class="name">
            <div class="first">
                <label for="first name">First Name</label>
                <input type="text" placeholder="First Name" id="first name" required name="fname">
            </div>
            <div class="last">
                <label for="Last Name">Last Name</label>
                <input type="text" placeholder="Last Name" id="last name" required name="lname">
            </div>
        </div>
        <div class="contact">
            <div class="phone">
                <label for="Phone Number">Phone Number</label>
                <input type="tellephone" placeholder="Phone Number" id="Phone Number"required name="pnumber">
            </div>
            <div class="email">
                <label for="Email">E-mail</label>
                <input type="email" placeholder="E-mail" id="Email"required name="email">
            </div>

        </div>
        <div class="Password_sec">
            <div class="Password">
                <label for="Password">Password</label>
                <input type="password" id="password" placeholder="Password"required name="pass">
            </div>
           <div class="c_password">
            <label for="Conf_Password">Conform Password</label>
            <input type="password" id="Conf_Password" placeholder="Conform Password"required name="cpass">
           </div>
        </div>
        <div class="gender">
            <input type="radio" name="gender" id="male" value="M"required>
            <label for="gender">Male</label>
            <input type="radio" name="gender" id="female" value="F"required>
            <label for="gender">Female</label>
            <input type="radio" name="gender" id="other" value="O"required>
            <label for="gender">Other</label>
        </div>
        <div class="condition">
            <input type="checkbox" name="check" id="check"required>
            <p>I Read all <a href="">Terms And Conditions</a></p>
        </div>
         <button type="submit" name="submit" id="submit">Submit</button>
         <p class="option">Alreday Registerd <a href="login.html">Login</a></p>
    </form>
</body>
</html>