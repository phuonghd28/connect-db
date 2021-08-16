<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'laravel_demo';


$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}

$firstname = '';
$lastname = '';
$phone = '';
$email = '';
$address = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["firstname"])) {
        $firstname = $_POST['firstname'];
    }
    if (isset($_POST["lastname"])) {
        $lastname = $_POST['lastname'];
    }
    if (isset($_POST["phone"])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST["email"])) {
        $email = $_POST['email'];
    }
    if (isset($_POST["address"])) {
        $address = $_POST['address'];
    }
}


 $sql = "INSERT INTO customers (firstname, lastname, phone, email, address)
    VALUES ('$firstname', '$lastname', '$phone', '$email','$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
//Đóng database
$conn->close();
?>
<form action="" method="post">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <input type="text" name="phone">
    <input type="text" name="email">
    <input type="text" name="address">
    <input type="submit">
</form>
</body>
</html>
