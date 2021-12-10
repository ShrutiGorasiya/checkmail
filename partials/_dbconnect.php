<?php
// ob_start();
// session_start();
// $conn=new mysqli("localhost:3306","root","","rtcampdb2");
// if(mysqli_connect_error())
// {
//     die ("connection not found".mysqli_connect_error());

// }
// error_reporting(0);


$server ='remotemysql.com';
$username='PtbSZ2sYqe';
$password='Fv8zxkMHs0';
$dbname='PtbSZ2sYqe';

$con = mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
    die("connection failed:".mysqli_connect_error());
}
 
?>