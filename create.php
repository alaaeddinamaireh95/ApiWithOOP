<?php
include 'User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);


    $name = $data['name'];
    $email = $data['email'];
    $user->createUser($name,$email);

} else {
    echo 'Method not allowed';
}

$conn->close();
?>