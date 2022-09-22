<?php
include 'shared/header.php';
include 'shared/navbar.php';
include 'genral/connection.php';
include 'genral/edit.php';

$select = "SELECT * FROM empView";
$allEmp = mysqli_query($connection,$select);

include 'shared/inputPanel.php';
include 'shared/tableEmp.php';

include 'genral/delete.php';
?>
<?php
include 'shared/footer.php';
?>
 