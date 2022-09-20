<?php

$update = false;

$city = "";
$name = "";
$phone = "";
$department = "";
$salary = "";

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    // select that id from query      
    $update = true;

$select_sp = "SELECT * FROM `employees` WHERE `id` = $id";
$oneEmployee = mysqli_query($connection,$select_sp);
$emp = mysqli_fetch_assoc($oneEmployee);
$name = $emp['name'];
$phone = $emp['phone'];
$salary = $emp['salary'];
$department = $emp['department'];
$city = $emp['city'];

}?>