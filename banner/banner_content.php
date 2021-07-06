<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>
<?php

require '../db.php';

$sql = "SELECT * FROM banner_contents";
$result = mysqli_query($db_conn, $sql);

?> 

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto">
            <div class="bg-dark text-white text-center p-4">
                <h1>Banner Contents</h1>
            </div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Sub Headline</th>
      <th scope="col">Headline</th>
      <th scope="col">Description</th>
      <th scope="col">Button</th>
      <th scope="col">Status</th>
      <th>action</th>
      
    </tr>
  </thead>
  <tbody>

  <?php foreach($result as $banner){ ?>

    <tr>
      <td><?php echo $banner['id'] ?></td>
      <td><?php echo $banner['sub_head'] ?></td>
      <td><?php echo $banner['headline'] ?></td>
      <td><?php echo substr($banner['description'], 0, 10) ?></td>
      <td><?php echo $banner['button'] ?></td>
      <td>
        <?php  if($banner['status']==1){?>
            <a href="" class= "btn btn-success text-white" >Active</a>
        <?php } else{ ?>
            <a href="banner_content_active.php?id=<?php echo $banner['id'] ?>" class= "btn btn-secondary text-white" >Deactive</a>
        <?php } ?>
        
     
      </td>
        
   
    <td>
      <a class="btn btn-success" href="/cit/banner/single_baner_content.php?id=<?php  echo $banner['id']  ?>" role="button">View</a>
      <?php if($_SESSION['role'] != 'Author'){ ?>
      <a class="btn btn-primary" href="/cit/banner/edit_baner_content.php?id=<?php  echo $banner['id']  ?>" role="button">Edit</a><?php } ?>
      <?php if($_SESSION['role'] == 'Admin'){ ?>
      <a data-toggle="modal" data-target="#del<?php echo $banner['id'] ?>" class="btn btn-danger text-white">Delete</a>
    </td><?php } ?>
        
    </tr>


            <!-- Modal -->
          <div class="modal fade" id="del<?php echo  $banner['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <a href="/cit/banner/baner_delete.php?id=<?php echo  $banner['id']; ?>"  class="btn btn-primary">Yes</a>
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