<?php

if ($_GET['edit']){
    $id = $_GET['edit'];
    // select that id from query
    $select_sp = "SELECT * FROM `employees` WHERE `id` = $id";
    $emp = mysqli_query($connection,$select_sp);

    $name = "";
    $phone = "";
    $salary = NULL;
    $department = "";
    $city = "";
    $update = true;
    foreach($emp as $data){
        /*$emp['name'];
        $phone = $emp['phone'];
        $salary = $emp['salary'];
        $department = $emp['department'];
        $city = $emp['city'];*/
    }
}
?>