<?php

$servername= "localhost";
$dbUername="root";
$dbPassword="";
$dbName="blog";


$conn=mysqli_connect($servername,$dbUername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}