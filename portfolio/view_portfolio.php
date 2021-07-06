<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>
<?php

require '../db.php';

$sql = "SELECT * FROM portfolios";
$result = mysqli_query($db_conn, $sql);
$after_assoc_main = mysqli_fetch_assoc($result);

?> 

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto">
            <div class="bg-dark text-white text-center p-4" role="alert">
                <h1>Portfolio Contents</h1>
            </div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">category</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">Images</th>
      <th scope="col">Added By</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php 
  $id = $after_assoc_main['user_id'];
  $select_name = "SELECT * FROM crud WHERE id=$id";
  $select_name_result = mysqli_query($db_conn,$select_name);
  $after_assoc = mysqli_fetch_assoc($select_name_result);
  ?>

  <?php foreach($result as $portfolio){ ?>

    <tr>
    <td><?php echo $portfolio['id'] ?></td>
      <td><?php echo $portfolio['category'] ?></td>
      <td><?php echo $portfolio['title'] ?></td>
      <td><?php echo substr($portfolio['description'], 0, 50).'...read more' ?></td>
      <td><img width="150" src="/cit/uploads/portfolio/<?php echo $portfolio['port_pic'] ?>" alt=""></td>

      <td><?php echo $after_assoc['uname']; ?></td>
      

    <td>
      <a class="btn btn-success" href="/cit/users/user_details.php?id=<?php  echo $portfolio['id']  ?>" role="button">View</a>
      <?php if($_SESSION['role'] != 'Author'){ ?>
      <a class="btn btn-primary" href="/cit/users/user_edit.php?id=<?php  echo $portfolio['id']  ?>" role="button">Edit</a><?php } ?>
      <?php if($_SESSION['role'] == 'Admin'){ ?>
      <a data-toggle="modal" data-target="#del<?php echo $portfolio['id'] ?>" class="btn btn-danger text-white">Delete</a>
    </td><?php } ?>
        
    </tr>


            <!-- Modal -->
          <div class="modal fade" id="del<?php echo  $portfolio['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <a href="/crud/users/soft_delete.php?id=<?php echo  $portfolio['id']; ?>"  class="btn btn-primary">Yes</a>
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