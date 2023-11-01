<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

$data = [
    "login" => $login,
    "email"=> $email,
    "password"=> $password
];

$json_data = json_encode($data);

file_put_contents("data.json", $json_data);

header ('Location: index.php');
}
?>