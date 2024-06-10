<?php
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