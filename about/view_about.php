<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>
<?php

require '../db.php';

$sql = "SELECT * FROM about";
$result = mysqli_query($db_conn, $sql);

?> 

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto">
            <div class="bg-dark text-white text-center p-4">
                <h1>About Contents</h1>
            </div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">About Title</th>
      <th scope="col">About Heading</th>
      <th scope="col">About Description</th>
      <th scope="col">About Images</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

  <?php foreach($result as $about){ ?>

    <tr>
    <td><?php echo $about['id'] ?></td>
      <td><?php echo $about['sub_head'] ?></td>
      <td><?php echo $about['heading'] ?></td>
      <td><?php echo substr($about['description'], 0, 50).'....Read More' ?></td>
      <td><img width="120" src="/cit/uploads/about/<?php echo $about['about_pic'] ?>" alt=""></td>
      <td>
        <?php  if($about['status']==1){?>
            <a href="" class= "btn btn-success text-white" >Active</a>
        <?php } else{ ?>
            <a href="about_active.php?id=<?php echo $about['id'] ?>" class= "btn btn-secondary text-white" >Deactive</a>
        <?php } ?>
        
     
      </td>

    <td>
      <a class="btn btn-success" href="/cit/users/user_details.php?id=<?php  echo $about['id']  ?>" role="button">View</a>
      <?php if($_SESSION['role'] != 'Author'){ ?>
      <a class="btn btn-primary" href="/cit/users/user_edit.php?id=<?php  echo $about['id']  ?>" role="button">Edit</a><?php } ?>
      <?php if($_SESSION['role'] == 'Admin'){ ?>
      <a data-toggle="modal" data-target="#del<?php echo $about['id'] ?>" class="btn btn-danger text-white">Delete</a>
    </td><?php } ?>
        
    </tr>


            <!-- Modal -->
          <div class="modal fade" id="del<?php echo  $about['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <a href="/crud/users/soft_delete.php?id=<?php echo  $about['id']; ?>"  class="btn btn-primary">Yes</a>
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