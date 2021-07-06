<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>
<?php

require '../db.php';

$sql = "SELECT * FROM testimonials";
$result = mysqli_query($db_conn, $sql);

?> 

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto">
            <div class="bg-dark text-white text-center p-4" role="alert">
                <h1>Testimonial View</h1>
            </div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Testimonial Images</th>
      <th scope="col">Testimonial Descriptions</th>
      <th scope="col">Testimonial Heading</th>
      <th scope="col">Testimonial subheading</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

  <?php foreach($result as $testimonial){ ?>

    <tr>
    <td><?php echo $testimonial['id'] ?></td>
      <td><img width="100" src="/cit/uploads/testimonials/<?php echo $testimonial['test_img'] ?>" alt=""></td>
      <td><?php echo substr($testimonial['description'], 0, 40).'....Read More' ?></td>
      <td><?php echo $testimonial['test_head'] ?></td>
      <td><?php echo $testimonial['test_subhead'] ?></td>

    <td>
      <a class="btn btn-success" href="/cit/testimonial/testimonial_details.php?id=<?php  echo $testimonial['id']  ?>" role="button">View</a>
      <?php if($_SESSION['role'] != 'Author'){ ?>
      <a class="btn btn-primary" href="/cit/testimonial/testimonial_edit.php?id=<?php  echo $testimonial['id']  ?>" role="button">Edit</a><?php } ?>
      <?php if($_SESSION['role'] == 'Admin'){ ?>
      <a data-toggle="modal" data-target="#del<?php echo $testimonial['id'] ?>" class="btn btn-danger text-white">Delete</a>
    </td><?php } ?>
        
    </tr>


            <!-- Modal -->
          <div class="modal fade" id="del<?php echo  $testimonial['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <a href="/cit/testimonial/soft_delete.php?id=<?php echo  $testimonial['id']; ?>"  class="btn btn-primary">Yes</a>
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