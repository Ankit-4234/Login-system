<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:index.html");
    exit();
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['user'];?>! </h2>
        <p> Logged in successfully. </p>
</div>
 </body>
 </html>