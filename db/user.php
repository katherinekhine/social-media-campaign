<?php

class User
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function createUser($fname, $lname, $email, $password, $phone, $country, $gender)
    {
        $sql = "INSERT INTO users (fname, lname, email, phone, password, country, gender,role_id) VALUES (:fname, :lname, :email, :phone, :password, :country, :gender, :role_id)";

        $params = array(':fname' => $fname, ':lname' => $lname, ':email' => $email, ':password' => $password, ':country' => $country, ':gender' => $gender, ':phone' => $phone, ':role_id' => 1);

        return $this->db->create($sql, $params);
    }

    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        return $this->db->read($sql);
    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $params = array(':email' => $email);

        return $this->db->read($sql, $params);
    }


    public function updateUserById($id, $image)
    {
        $sql = "UPDATE users SET image = :image WHERE id = :id";
        $params = array(':image' => $image, ':id' => $id);
        return $this->db->update($sql, $params);
    }
    public function editUserById($id, $fname, $lname, $phone)
    {
        $sql = "UPDATE users SET  fname = :fname, lname = :lname, phone = :phone WHERE id = :id";
        $params = array(':fname' => $fname, ':lname' => $lname, ':phone' => $phone,  ':id' => $id);
        return $this->db->update($sql, $params);
    }



    public function deleteUser($userID)
    {
        $sql = "DELETE FROM users WHERE id = :userID";
        $params = array(':userID' => $userID); // Use ':userID' instead of ':id'
        return $this->db->delete($sql, $params);
    }


    public function getAll()
    {
        $sql = "SELECT users.*, roles.name AS role, roles.value FROM users LEFT JOIN roles ON users.role_id = roles.id";
        return $this->db->read($sql);
    }
}
