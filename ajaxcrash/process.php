<?php
//connect to a database
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');


echo "Processing...";



//CHECK FOR POST VARIABLES
if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    //echo 'POST: Your name is '. $_POST['name'];

    $query = "INSERT INTO users(name) VALUES ('$name')";

    if (mysqli_query($conn,$query)) {
        echo 'user added';
    }else {
        echo 'ERROR: ' . mysqli_error($conn);
    }
}


//CHECK FOR GET VARIABLES
if(isset($_GET['name'])){
    echo 'GET: Your name is '. $_GET['name'];
}