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

$conn = new mysqli($host,$user,$pass,$database);
if($conn->connect_error){
    die('Connection failed' .$conn->connect_error);
}
$sql = 'SELECT * FROM customers';
$result = $conn->query($sql);

if($result->num_rows > 0){
   while($row = $result->fetch_assoc()){
       echo 'id: ' . $row['id'] . ' ' . 'name: '. $row['firstname'] . ' ' .$row['lastname'] . ' ' . 'address: ' . $row['address'] .  '<br>';

   }
}else{
    echo '0 result';
}



?>

</body>
</html>

