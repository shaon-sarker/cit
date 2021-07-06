<?php require '../session.php'; ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>

<?php
  require "../db.php";
  $id = $_GET['id'];
  $sql = "SELECT * FROM `slides`WHERE id='$id'";
  $result = mysqli_query($db_conn, $sql); 
  $after_assoc = mysqli_fetch_assoc($result); 
?>


    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="head">
                        <h2 class="p-3 mb-2 bg-dark text-white text-center">Update Slideshow Image Information</h2>
                    </div>

     <form action="/cit/slideshow/slide_update_image.php" method="POST" class="bg-light p-3" enctype="multipart/form-data">
                       
               <input name="id" type="hidden" value="<?= $after_assoc['id']; ?>">
                          <div class="mb-3">
                              <p>Present Image</p>
                              <img width='100px' src="/cit/uploads/slideshow/<?php echo $after_assoc['slide_pic'] ?>" alt="">    
                            </div>

                               <div class="mb-3">
                               <input type="file" class="form-control"name="user_image">
                            
                               </div>

                            </div>
                        <div class="text-center">
                          <div class="text-center">
                          <button type="submit" class="btn btn-dark text-white">Update</button>
                          </div> 
                        </form>
                        <?php if(isset($_SESSION['image_size'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['image_size'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['image_size']); }?>

                <?php if(isset($_SESSION['image_format'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['image_format'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['image_format']); }?>
                    </div>
                  </div>
                </div>
              </section>

<?php require '../dashboard_part/dashboard_footer.php'; ?>