# PHP CRUD Operations
CRUD Stands For Create, Read, Update, Delete.
First we have to create a Registration form to send data by User to MsSQL Database.
<h1>Creating Registration Form</h1>
<ul>
  Steps:</br>
  <li>Go to htdocs Folder</li>
  <li>Create a new Folder, & Create Registration.php file.</li>
  <li>Create Form using html Form Tags, apply CSS</li>
</ul>

# HTML
```html

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
```

<img src="https://github.com/adityamishras/PHP_Crude_Operations/assets/136791974/b1c31438-152f-4826-8252-6964d94fcd55"/>

# Connection To MySQL
```php
$username = "root";
$servername = "localhost";
$password = "";
$dbname = "your_db_name";

$conn = mysqli_connect($username, $servername, $password, $dbname);
if(!$conn){
    echo "Connection Failed";
}
else{
    echo "Connected";
}

```
# Sending Form Data in Database Table
```php
$username = "root";
$servername = "localhost";
$password = "";
$dbname = "your_db_name";

$conn = mysqli_connect($username, $servername, $password, $dbname);
if(!$conn){
    echo "Connection Failed";
}
else{
   if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pnumber = $_POST['pnumber'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $gender = $_POST['gender'];

        
        $query = "INSERT INTO registration VALUE('$fname','$lname','$pnumber','$email','$pass','$cpass','$gender')";
        $conn = mysqli_query($conn,$query);
        if (!$conn) {
           echo "Not Registerd";
        }
        else{
           echo $fname;
        }
    }
}

```
<h3>Data Inserted in Your Database Table :</h3>

![image](https://github.com/adityamishras/PHP_Crude_Operations/assets/136791974/29d245d6-9c1e-4e92-837b-94410e538e74)

<h1>Fetching Data from Database Table and Display it on Webpage</h1>

<ul>
  Steps:</br>
  <li>Create a File - Display.php</li>
  <li>include connection.php in Display.php</li>
</ul>

<h3>Display.php</h3>

```php

include("connection.php");
$query = "SELECT * FROM registration";
$data = mysqli_query($conn, $query);
$rows = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

if ($rows != 0) {
?>

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Mobile Number</th>
            <th>Email</th>
        </tr>

    <?php

    while ($result = mysqli_fetch_assoc($data)) {
        echo "
        <tr>
            <td>" . $result['fname'] . "</td>
            <td>" . $result['lname'] . " </td>
            <td>" . $result['gender'] . " </td>
            <td>" . $result['pnumber'] . "</td>
            <td>" . $result['email'] . "</td>
        </tr>
        ";
    }
} else {
    echo "DataBase Empty";
}
    ?>
    </table>

    <style>
        table {
            border: 1px solid black;
        }

        th {
            background: #90e0ef;
            padding: 10px;
            font-size: 20px;
            font-family:"Yu Gothic light";
        }
        td{
            background: #caf0f8;
            padding: 10px;
            font-family:"Yu Gothic light";
            font-size: 18px;
        }
    </style>


```

<img src="https://github.com/adityamishras/PHP_Crude_Operations/assets/136791974/ab998d97-6622-435e-8562-df2c45674bad">

