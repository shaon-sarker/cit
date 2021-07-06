<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>
<?php

require '../db.php';

$sql = "SELECT * FROM social_icons";
$result = mysqli_query($db_conn, $sql);

?> 

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 m-auto">
            <div class="bg-dark text-white text-center p-4">
                <h1>Icons View</h1>
            </div>
        <table class="table">
        <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Icons Picture</th>>
              <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($result as $icon){ ?>

            <tr>
              <td><?php echo $icon['id'] ?></td>
              <td><i class="<?= $icon['icon_name'];?>"></i></td>
       
                
            <td>
            <a class="btn btn-primary" href="/cit/users/user_details.php?id=<?php  echo $icon['id']  ?>" role="button">Details</a>
            <?php if($_SESSION['role'] != 'Author'){ ?>
            <a class="btn btn-primary" href="/cit/users/user_edit.php?id=<?php  echo $icon['id']  ?>" role="button">Edit</a><?php } ?>
            <?php if($_SESSION['role'] == 'Admin'){ ?>
            <a data-toggle="modal" data-target="#del<?php echo $icon['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
            <?php } ?>
        
        </tr>


            <!-- Modal -->
          <div class="modal fade" id="del<?php echo  $icon['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <a href="/crud/users/soft_delete.php?id=<?php echo  $icon['id']; ?>"  class="btn btn-primary">Yes</a>
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