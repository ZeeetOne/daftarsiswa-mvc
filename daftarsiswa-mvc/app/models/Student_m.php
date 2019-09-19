<?php

class Student_m
{
    private $table = 'students';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllStudents()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY name');
        return $this->db->resultSet();
    }

    public function getStudentById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addStudentData($data)
    {
        $query = "INSERT INTO students VALUES ('', :name, :nis, :email, :majority)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('majority', $data['majority']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteStudentData($id)
    {
        $query = "DELETE FROM students WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editStudentData($data)
    {
        $query = "UPDATE students SET 
                    name = :name, 
                    nis = :nis, 
                    email = :email, 
                    majority = :majority 
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('majority', $data['majority']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchStudentData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM students WHERE name LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
