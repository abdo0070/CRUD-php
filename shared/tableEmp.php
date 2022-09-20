<div class="container">
  <div class="card">
  <table class="table table-hover">
<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Salary</th>
    <th>Department</th>
    <th>City</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
</thead>
<tbody>
    <?php foreach ($allEmp as $data) { ?>
      <tr>
        <td> <?=$data['id']?> </td>
        <td> <?=$data['name']?> </td>
        <td> <?=$data['salary']?> </td>
        <td> <?=$data['department']?> </td>
        <td> <?=$data['city']?> </td>

        <td><a href='http://localhost/session3/employee/update.php?edit=<?= $data['id'] ?>' class="btn btn-primary">update</a></td> 
        <td ><a href='http://localhost/session3/employee/list.php?id=<?= $data['id'] ?>' class="btn btn-danger">delete</a></td>

        </tr>
    <?php } ?>
</tbody>
</table>
  </div>