<?php
$sname = "localhost";
$uname = "root";
$password = "";
$dbname = "testing";

$conn = mysqli_connect($sname,$uname,$password,$dbname);
if(!$conn){
    echo "Not Connected".mysqli_connect_error();
}
else{
    // connected
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
?>