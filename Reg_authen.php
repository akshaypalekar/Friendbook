<?php
session_start();
include 'Helper.php';
$fname=@$_REQUEST['fname'];
$lname=@$_REQUEST['lname'];
$password=@$_REQUEST['password'];
$day=@$_REQUEST['day'];
$month=@$_REQUEST['month'];
$year=@$_REQUEST['year'];
$gender=@$_REQUEST['sex'];
$email=@$_REQUEST['email'];
$image="images\default.jpg"
$con=mysql_connect('localhost','root','');
if(!$con)
{
die("connection not established");
}

$sql="CREATE DATABASE IF NOT EXISTS friendbook";
mysql_query($sql,$con);
mysql_select_db('friendbook',$con);
$sql= "CREATE TABLE IF NOT EXISTS user
(
sr_no int NOT NULL UNIQUE AUTO_INCREMENT,
fname varchar(20),
lname varchar(20),
email varchar(50),
password varchar(20),
day int,
month int,
year int,
gender varchar(10),
image varchar(50),
mob varchar(20),
work_no varchar(10),
occupation varchar(50),
college varchar(50),
school varchar(50),
skills varchar(100),
city varchar(20),
PRIMARY KEY (sr_no)
)";
mysql_query($sql,$con) or die(mysql_error());

$obj=new Helper();
$obj->insert("user","`fname`, `lname`, `email`, `password`, `day`, `month`, `year`, `gender`, `image`","'$fname', '$lname', '$email', '$password', '$day', '$month', '$year', '$gender','$image' ");


header("Location: Homepage.php");
?>