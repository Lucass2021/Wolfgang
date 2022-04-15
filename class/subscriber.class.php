<?php
require 'database.class.php';
include("./templates/scripts.php");

class Subscriber extends Database
{

    private $name, $email;

    function __construct()
    {
        parent::__construct();
    }

    public function save_subscriber()
    {
        $query = "INSERT INTO `subscribers`(`name` , `email`) VALUES(?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ss", $this->name, $this->email);
        $success = $stmt->execute();
        if ($success) {
            header("Location: ./welcome.php#msg");
        } else if ($stmt->error) {
            $data['success'] = FALSE;
            $data['message'] = $stmt->error;
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}
