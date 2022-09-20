<?php
include '../shared/header.php';
include '../shared/navbar.php';
include '../genral/connection.php';
include '../genral/edit.php';
$select = "SELECT * FROM employees";
$allEmp = mysqli_query($connection,$select);
include '../shared/inputPanel.php';
?>
</div>
<?php

include '../shared/footer.php';
?>
 