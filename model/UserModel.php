<?php
require("../database/Database.php");
class UserModel{
    public $name;
    public $email;
    public $username;
    public $password;
    private $db;
    private $tablename = "tableuser";

    public function __construct(){
        $this->db = new Database();
    }
    public function insert(){
        $sql = "INSERT INTO $this->tablename (name, email,username,password) VALUES('$this->name','$this->email','$this->username', '$this->password')";
        $this->db->execute($sql);
    }
    public function update($id){
        $sql = "UPDATE $this->tablename SET name = '$this->name', email = '$this->email', '$this->username', '$this->password' WHERE id=$id";
        return $this->db->execute($sql);
    }
    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->db->execute($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM $this->tablename WHERE id=$id";
        return $this->db->execute($sql);
    }
    public function __destruct(){
        unset($this->db);
    }
}
?>