<?php

class App
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function createApp($title, $des, $image)
    {
        $sql = "INSERT INTO apps (title,des,image) VALUES (:title,:des,:image)";

        $params = array(':title' => $title, ':des' => $des, ':image' => $image);

        return $this->db->create($sql, $params);
    }

    public function editApp($id, $title, $des, $image = null)
    {
        $sql = "UPDATE apps SET title = :title, des = :des";
        $params = [':title' => $title, ':des' => $des];

        // Add image update to SQL and parameters if image is provided
        if ($image !== null) {
            $sql .= ", image = :image";
            $params[':image'] = $image;
        }

        $sql .= " WHERE id = :id";
        $params[':id'] = $id;

        return $this->db->update($sql, $params);
    }


    public function deleteApp($id)
    {
        $sql = "DELETE FROM apps WHERE id = :id";

        $params = array(':id' => $id);

        return $this->db->delete($sql, $params);
    }

    public function getAppByID($id)
    {
        $sql = "SELECT * FROM apps WHERE id = :id";
        $params = array(':id' => $id);

        return $this->db->read($sql, $params);
    }
}
