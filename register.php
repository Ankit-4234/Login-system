<?php
$conn = new mysqli("sql302.infinityfree.com", "if0_41963207", "B6HJMy4CZobJ2L", "if0_41963207_logindb");
 
if($conn->connect_error){
    die ("<span class='error'>connection failed</span>");
}
$name= $_POST['name'];
$email=$_POST['email'];
$password= password_hash($_POST['password'], PASSWORD_DEFAULT);

$check=$conn->query("SELECT * FROM users WHERE email='$email'");
if($check->num_rows>0){
    echo("<span class='error'>email already exists</span>");
}
else{
    $sql= "INSERT INTO users(name,email,password)
    values('$name','$email','$password')";
    if ($conn->query($sql)){
        echo"<span class='success'>Registered successfully
        <a href='index.html'>Login now </a></span>";
    }
        else{
            echo"<span class='error'>Registration failed</span>";
}
}
$conn->close();
?>