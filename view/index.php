<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../includes/css/bootstrap.css" type="text/css">
    <title>Add User</title>
</head>
<body>
    <div id="successMessage" class="alert alert-primary" role="alert"></div>
    <div class="container">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="password" class="form-control">
        </div>
        <button type="submit" id="btnAdd" class="btn btn-primary btn-block">Add User</button>
    </div>
    

<script src="../includes/js/jquery.js" type="text/javascript"></script>
<script src="../includes/js/popper.min.js" type="text/javascript"></script>
<script src="../includes/js/bootstrap.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
    initialize();
    console.log("jquery exist!");
    $("#btnAdd").on("click",function(){
        let name = $("#name").val();
        let email = $("#email").val();
        let username = $("#username").val();
        let password = $("#password").val();
        
        $.ajax({
            url: "DataProcessor.php",
            type: "POST",
            data:{
                action:"insert",
                name:name,
                email:email,
                username:username,
                password:password
            },
            success:function(e){
                console.log(e);
                $("#successMessage").html(e);
                $("#successMessage").slideDown(2000).slideUp(5);
            },
            error:function(e){
                console.log(e);
            }
        });
    });
    function initialize(){
        $("#successMessage").hide();
    }
});
</script>
</body>
</html>
