<?php

class Contact
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function createContact($fname, $lname, $email, $phone, $msg)
    {
        $sql = "INSERT INTO contacts (fname, lname, email, phone, msg) VALUES (:fname, :lname, :email, :phone, :msg)";

        $params = array(':fname' => $fname, ':lname' => $lname, ':email' => $email,  ':phone' => $phone, ':msg' => $msg);

        return $this->db->create($sql, $params);
    }
}
