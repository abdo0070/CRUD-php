<?php
//include './genral/connection.php';

// => Vlues -> id , name , department , city , salary , phone 

$select = "SELECT * FROM `departments`";
$allDepartment = mysqli_query($connection,$select);
if (isset($_POST['btnSend'])){
    $city = $_POST['city'];
    $salary = $_POST['salary'];
    $name = $_POST['name'];
    $department = $_POST['department']; // need to handle that in the mysql . 
    $phone = $_POST['phone']; 

    if ($update){
        $edit = "UPDATE `employees` SET `name`='$name' , `phone` = '$phone' , `salary` = '$salary' , `city` = '$city' WHERE `id` = $id";
        mysqli_query($connection,$edit);
        echo $id;
        $update = false;
        header('Location: http://localhost/session3/employee/list.php');
        // go back to the list page 
    }
    else{
        $insert = "INSERT INTO `employees` VALUES(null,'$name' , 1 , '$city' ,'$salary','$phone')";
        mysqli_query($connection,$insert);
    }
}

?>
<div class="container">
  <div class="card">
  <form method ="POST">
  <div class="form-group">
    <label for="">Full Name</label>
    <input name = "name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="">City</label>
    <select name="city" class="form-select" aria-label="Default select example">
      <option value="Cairo">Cairo</option>
      <option value="Giza">Giza</option>
      <option value="Alex">Alex</option>
      <option value="Aswan">Aswan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="liSalary">Salary</label>
    <input name ="salary" type="number" class="form-control" id="salary" placeholder="Salary">
  </div>
  <div class="form-group">
    <label for="liSalary">Phone</label>
    <input name ="phone" type="text" class="form-control" id="phone" placeholder="Phone">
  </div>

  <div class="form-group">
    <select name = "department" class="form-select" aria-label="Default select example">
        <?php foreach($allDepartment as $data) :?>
      <option value= <?=$data['id']?> ><?=$data['name']?> </option>
      <?php endforeach ?>
    </select>
  </div>
  <button name ="btnSend" type="submit" class="btn btn-primary">Apply</button>
</form>
  </div>
</div>