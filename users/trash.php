<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>

<?php
require '../db.php';

$sql = "SELECT * FROM crud WHERE status=1";
$result = mysqli_query($db_conn, $sql);

?> 


    <section>
        <div class="container">
        <div class="row">
            <div class="col-md-10">
            <div class="bg-dark text-white text-center p-4">
                <h1>Trash</h1>
            </div>
<table class="table">
  <thead>
    <tr>
   
      <th scope="col">ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Birth Date</th>
      <th>action</th>
      
    </tr>
  </thead>
  <tbody>

  <?php foreach($result as $users){ ?>

    <tr>
    
      <td><?php echo $users['id'] ?></td>
      <td><?php echo $users['uname'] ?></td>
      <td><?php echo $users['email'] ?></td>
      <td><?php echo $users['birthday'] ?></td>
      <td>
      <a class="btn btn-success" href="/cit/users/soft_delete.php?id=<?php  echo $users['id']  ?>" role="button">Undo</a>
    </td>
    <td>
      <a class="btn btn-danger" href="/cit/users/user_delete.php?id=<?php  echo $users['id']  ?>" role="button">Delete</a>
    </td>    
    </tr>
   <?php } ?>
  </tbody>
</table>
            </div>
        </div>
        </div>
    </section>

    
   
<?php require '../dashboard_part/dashboard_footer.php';  ?>