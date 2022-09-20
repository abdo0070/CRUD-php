<?php
// 1 - connect the mysqli_query => 30 min (done)
// 2 - show the list query => 30 min (done)
// 3 - make delete one  => 30 min (done)
// 4 - make the edit option =>  30 min
// 5 - validation option => 2h
// 7 - make it more dynamic => 1h
// 8 - add search option in name or salary or id => 1h
// 9 - add trigger one => 
// 10- add analatic option in the database => 4h
// => total time avg (8h ~ 12h)
include 'shared/header.php';
include 'shared/navbar.php';
include 'genral/connection.php';
include 'genral/edit.php';

$select = "SELECT * FROM employees";
$allEmp = mysqli_query($connection,$select);

include 'shared/inputPanel.php';
include 'shared/tableEmp.php';

include 'genral/delete.php';
?>
<?php
include 'shared/footer.php';
?>
 