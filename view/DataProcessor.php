<?php
require("../controller/UserController.php");

if(isset($_POST)){  
    $userCont = new UserController();
    $action = $_POST['action'];
    switch($action){
        case "insert":
            //do insert
            insert();
            break;
        case "update":
            //do update
            $id = $_POST['id'];
            update($id);
            break;
        case "delete":
            $id = $_POST['id'];
            delete($id);
        default:
            //none selected :(
    }
}
function insert(){
    global $userCont;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $userCont->addUser($name,$email,$username,$password);
    if($result){
        echo "User Successfully inserted!";
    }else{
        echo $result;
    }
}
function update($id){
    global $userCont;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userCont->updateUser($id,$name,$email,$username,$password);
}
function delete($id){
    global $userCont;
    $userCont->deleteUser($id);
}
?>