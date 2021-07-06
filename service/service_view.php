<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>
<?php

require '../db.php';

$sql = "SELECT * FROM services";
$result = mysqli_query($db_conn, $sql);

?> 

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto">
            <div class="bg-dark text-white text-center p-4">
                <h1>Services Contents</h1>
            </div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">services Title</th>
      <th scope="col">services Description</th>
      <th scope="col">services Icon</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

  <?php foreach($result as $services){ ?>

    <tr>
      <td><?php echo $services['id'] ?></td>
      <td><?php echo $services['service_title'] ?></td>
      <td><?php echo $services['service_desp'] ?></td>
      <td><img width='50px' src="../uploads/services/<?php echo $services['service_img'] ?>" alt=""></td>

    <td>
      <a class="btn btn-primary" href="/cit/users/user_details.php?id=<?php  echo $services['id']  ?>" role="button">Details</a>
      <?php if($_SESSION['role'] != 'Author'){ ?>
      <a class="btn btn-primary" href="/cit/users/user_edit.php?id=<?php  echo $services['id']  ?>" role="button">Edit</a><?php } ?>
      <?php if($_SESSION['role'] == 'Admin'){ ?>
      <a data-toggle="modal" data-target="#del<?php echo $services['id'] ?>" class="btn btn-danger">Delete</a>
    </td><?php } ?>
        
    </tr>


            <!-- Modal -->
          <div class="modal fade" id="del<?php echo  $services['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <a href="/crud/users/soft_delete.php?id=<?php echo  $services['id']; ?>"  class="btn btn-primary">Yes</a>
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