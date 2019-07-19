<?php
require("../model/UserModel.php");
class UserController{
    private $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }
    public function addUser($name, $email,$username, $password){
        //perform data validation
        $this->userModel->name = $name;
        $this->userModel->email = $email;
        $this->userModel->username = $username;
        $this->userModel->password = $password;
        $ret = $this->userModel->insert();
        if($ret){
            return true;
        }
        else{
            return "There is an error inserting the record";
        }
    }
    public function updateUser($id,$name, $email,$username, $password){
        $this->userModel->name = $name;
        $this->userModel->email = $email;
        $this->userModel->username = $username;
        $this->userModel->password = $password;
        $this->userModel->update($id);
    }

    public function getAllUser(){
        return $this->userModel->readAll();
    }

    public function deleteUser($id){
        $this->userModel->delete($id);
    }

    public function __destruct(){
        unset($this->userModel);
    }
}
?>