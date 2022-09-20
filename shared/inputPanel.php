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

    if ($name=="" || $city=="" || $phone=="" ){ ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>In Vaild Input !</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      <?php
      }
      else{
        if ($update){
            $city = $oneCity;
            $edit = "UPDATE `employees` SET `name`='$name' , `phone` = '$phone' , `department` = $department, `salary` = '$salary' , `city` = '$city' WHERE `id` = $id";
            mysqli_query($connection,$edit);
            echo "true";
            $update = false;
            // go back to the list page 
            header('Location: http://localhost/session3/employee/list.php');
        }
        else{
            $insert = "INSERT INTO `employees` VALUES(null,'$name' , $department , '$city' ,'$salary','$phone')";
            mysqli_query($connection,$insert);
        }
      }
    
   
}

?>
<div class="container">
  <div class="card">
  <form method ="POST">
  <div class="form-group">
    <label for="">Full Name</label>
    <?php if($name != NULL) { ?>
    <input name = "name" value =<?=$name?> type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> <?php } ?>
    <?php if($update == NULL) { ?>
    <input name = "name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> <?php } ?>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="">City</label>
    
    <select name="city" value=<?= $city ?> class="form-select" aria-label="Default select example">
      <option value="Cairo">Cairo</option>
      <option value="Giza">Giza</option>
      <option value="Alex">Alex</option>
      <option value="Aswan">Aswan</option>
    </select>

  </div>
  <div class="form-group">
    <label for="liSalary">Salary</label>
    <?php if($salary != NULL) { ?>
    <input name ="salary" value=<?= $salary ?> type ="number" class="form-control" id="salary" placeholder="Salary"> <?php } ?>
    <?php if($salary == NULL) { ?>
    <input name ="salary"  type ="number" class="form-control" id="salary" placeholder="Salary"> <?php } ?>
  </div>
  <div class="form-group">
    <label for="liSalary">Phone</label>
    <?php if($phone != NULL) { ?>
    <input name ="phone" value=<?= $phone ?> type="text" class="form-control" id="phone" placeholder="Phone"> <?php } ?>
    <?php if($phone == NULL) { ?>
    <input name ="phone" type="text" class="form-control" id="phone" placeholder="Phone"> <?php } ?>
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