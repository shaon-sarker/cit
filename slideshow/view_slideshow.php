<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php'; ?>
<?php

require '../db.php';

$sql = "SELECT * FROM slides";
$result = mysqli_query($db_conn, $sql);

?> 

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 m-auto">
            <div class="bg-dark text-white text-center p-4" role="alert">
                <h1>SLideshow Images</h1>
            </div>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">SL</th>
            <th scope="col">Slideshow Picture</th>>
            <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($result as $slideshow_image){ ?>

            <tr>
            <td><?php echo $slideshow_image['id'] ?></td>
            <td><img width='100px' src="/cit/uploads/slideshow/<?php echo $slideshow_image['slide_pic'] ?>" alt=""></td>
                
        
            <td>
            <a class="btn btn-success" href="/cit/slideshow/single_image.php?id=<?php  echo $slideshow_image['id']  ?>" role="button">View</a>
            <?php if($_SESSION['role'] != 'Author'){ ?>
            <a class="btn btn-primary" href="/cit/slideshow/single_slide_image.php?id=<?php  echo $slideshow_image['id']  ?>" role="button">Edit</a><?php } ?>
            <?php if($_SESSION['role'] == 'Admin'){ ?>
            <a data-toggle="modal" data-target="#del<?php echo $slideshow_image['id'] ?>" class="btn btn-danger text-white">Delete</a>
            </td><?php } ?>
        
        </tr>
            <!-- Modal -->
          <div class="modal fade" id="del<?php echo  $slideshow_image['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <a href="/cit/slideshow/delete_testimonial.php?id=<?php echo  $slideshow_image['id']; ?>"  class="btn btn-primary">Yes</a>
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