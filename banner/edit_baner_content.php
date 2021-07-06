 <?php require '../session.php'; ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>

<?php
  require "../db.php";
  $id = $_GET['id'];
  $sql = "SELECT * FROM `banner_contents`WHERE id='$id'";
  $result = mysqli_query($db_conn, $sql); 
  $after_assoc = mysqli_fetch_assoc($result); 
?>


    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="head">
                        <h2 class="p-3 mb-2 bg-dark text-white text-center">Update Information</h2>
                    </div>

     <form action="/cit/banner/baner_update_content.php" method="POST" class="bg-light p-3">
                       
               <input name="id" type="hidden" value="<?= $after_assoc['id']; ?>">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Sub Heading</label>
                            <input value="<?php echo  $after_assoc['sub_head'];?>" type="text" class="form-control" name="sub_head">
                                
                               </div>

                               <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">HeadLine</label>
                            <input value="<?php echo  $after_assoc['headline'];?>" type="text" class="form-control" name="headline">
                                
                               </div>

                               <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">baner Descriptions</label>
                            <textarea class="form-control" placeholder="Description" name="description"><?php echo $after_assoc['description']; ?></textarea>  
                            </div>


                            <div class="mb-3  position-relative">
                            <label for="exampleInputEmail1" class="form-label">Button</label>
                            <input value="<?php echo  $after_assoc['button'];?>" type="text" class="form-control" name="button">
                            
                               
                            </div>
                        <div class="text-center">
                          <div class="text-center">
                          <button type="submit" class="btn btn-dark text-white">Update</button>
                          </div> 
                        </form>
                    </div>
                  </div>
                </div>
              </section>

<?php require '../dashboard_part/dashboard_footer.php'; ?>