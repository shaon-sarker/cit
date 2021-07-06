<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>
<?php
require '../db.php';

$sql = "SELECT * FROM crud WHERE status=0";
$result = mysqli_query($db_conn, $sql);

?> 

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto">
            <div class="bg-dark text-white text-center p-4">
                <h1>User Details</h1>
            </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Birth of Date</th>
      <th scope="col">Image</th>
      <th scope="col">Role</th>
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
      <td><img width='100px' src="../uploads/users/<?php echo $users['user_image'] ?>" alt=""></td>
      <td><?php echo $users['role'] ?></td>
     

      <td>
      <a class="btn btn-primary" href="/cit/users/user_details.php?id=<?php  echo $users['id']  ?>" role="button">Details</a>
      <?php if($_SESSION['role'] != 'Author'){ ?>
      <a class="btn btn-primary" href="/cit/users/user_edit.php?id=<?php  echo $users['id']  ?>" role="button">Edit</a><?php } ?>
      <?php if($_SESSION['role'] == 'Admin'){ ?>
      <a data-toggle="modal" data-target="#del<?php echo $users['id'] ?>" class="btn btn-danger">Delete</a>
    </td><?php } ?>
        
    </tr>

            <!-- Modal -->
          <div class="modal fade" id="del<?php echo $users['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <a href="/cit/users/soft_delete.php?id=<?php echo $users['id']; ?>"  class="btn btn-primary">Yes</a>
                </div>
              </div>
            </div>
          </div>


   <?php }?>
  </tbody>
</table>
            </div>
        </div>
        </div>
    </section>


<?php require '../dashboard_part/dashboard_footer.php';  ?>