<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="">
        <h1>Login</h1>
        <br>
        <div class="name">
            <div class="first">
                <label for="first name">First Name</label>
                <input type="text" placeholder="First Name" id="first name" required>
            </div>
            <div class="last">
                <label for="Last Name">Last Name</label>
                <input type="text" placeholder="Last Name" id="last name" required>
            </div>
        </div>
        <div class="Password_sec">
            <div class="Password">
                <label for="Password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password"required>
            </div>
           <div class="c_password">
            <label for="Conf_Password">Conform Password</label>
            <input type="password" name="Conf_Password" id="Conf_Password" placeholder="Conform Password"required>
           </div>
        </div>
         <button type="submit" id="submit">login</button>
         <p class="option">Not Registerd <a href="index.html">Register Here</a></p>
    </form>
</body>
</html>