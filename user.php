<?php
require "connect.php";
class User
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function createUser($name, $email)
    {
        $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $name, $email);

        return $stmt->execute();
    }
}
$user = new User($conn);

?>