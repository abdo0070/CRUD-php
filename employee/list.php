<?php
include '../shared/header.php';
include '../shared/navbar.php';
include '../genral/connection.php';

$select = "SELECT * FROM empView";
$allEmp = mysqli_query($connection,$select);
include '../shared/tableEmp.php';
?>
</div>
<?php
include '../shared/footer.php';
include '../genral/delete.php';
?>
 