<?php

//create connection
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');

$query = "SELECT * from users";

//GET RESULTS
$result = mysqli_query($conn, $query);

//fetch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);

