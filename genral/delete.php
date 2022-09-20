<?php 
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "DELETE FROM employees WHERE id = $id";
    mysqli_query($connection,$delete);
     header : ("location: index.php");
}
?>