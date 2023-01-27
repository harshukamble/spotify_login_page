<?php
$servername="localhost";
$username="root";
$password="";
$database_name="harsh123";

$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql_query="INSERT INTO entry (email,password) values ('$email','$password')";
    if(mysqli_query($conn,$sql_query))
    {
        echo "New Detailes entry inserted successfully !!";
    }
    else{
        echo "Error:" " . $sql . " .mysqli_error($conn)

    }
    mysqli_close($conn)
}
?> 