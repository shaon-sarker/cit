  
<?php require '../session.php'; ?>


<?php require '../dashboard_part/dashboard_header.php';  ?>
<?php
  require "../db.php";
  $id = $_GET['id'];
  $sql = "SELECT * FROM `crud`WHERE id='$id'";
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
                       <form action="/cit/users/user_update.php" method="POST" class="bg-light p-3" enctype="multipart/form-data">
                     
                       <input name="id" type="hidden" value="<?= $after_assoc['id']; ?>">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User name</label>
                            <input value="<?php echo  $after_assoc['uname'];?>" type="text" class="form-control" name="uname">
                                
                               </div>

                               <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Your email</label>
                            <input value="<?php echo  $after_assoc['email'];?>" type="email" class="form-control" name="email">
                               
                               </div>


                               <div class="mb-3  position-relative">
                            <label for="exampleInputEmail1" class="form-label">Your password</label>
                            <input value="<?php echo  $after_assoc['password'];?>" type="password" class="form-control" name="password" id="pass">
                            <a onclick="showpass()" class="btn btn-sm text-center text-white bg-dark position-absolute bottom-0 end-0">Show</a>
                               
                               </div>

                               <div class="mb-3  position-relative">
                                 <label for="exampleInputEmail1" class="form-label">Your repassword</label>
                            <input  value="<?php echo  $after_assoc['repassword'];?>" type="password" class="form-control" name="repassword" id="repass">
                            <a onclick="reshowpass()" class="btn btn-sm text-center text-white bg-dark position-absolute bottom-0 end-0">Show</a>
                                
                               </div>


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Your date of birth</label>
                            <input  value="<?php echo  $after_assoc['birthday'];?>" type="date" class="form-control" name="birthday">
                                
                               </div>

                               <div class="mb-3">
                                  <p>Present Image</p>
                                  <img width='100px' src="../uploads/users/<?php echo $after_assoc['user_image'] ?>" alt="">
                               </div>
                               <div class="input-group mb-3">
                                    <input type="file" class="form-control"name="user_image">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>

                  
                        <div class="text-center">
                          <div class="text-center">
                          <button type="submit" class="btn btn-dark text-white">Update</button>
                          </div>
                        </form>
                        <?php if(isset($_SESSION['image_format'])){ ?>
                                  <div class="alert alert-danger mt-2" role="alert">
                                    <?php    echo $_SESSION['image_format']; ?>        
                                       </div>
                        <?php } unset($_SESSION['image_format']); ?>

                        <?php if(isset($_SESSION['image_size'])){ ?>
                           <div class="alert alert-danger mt-2" role="alert">
                                  <?php  echo $_SESSION['image_size']; ?>        
                           </div>
                        <?php } unset($_SESSION['image_size']); ?>
                    </div>
                  </div>
                </div>
              </section>
   

  
      <script>
         function showpass(){
        var pass = document.getElementById('pass')
            if(pass.type == 'password'){
                pass.type ='text';
            }
            else{
                pass.type = 'password';
            }
        } 

        function reshowpass(){
        var repass = document.getElementById('repass')
            if(repass.type == 'password'){
                repass.type ='text';
            }
            else{
                repass.type = 'password';
            }
        }
      </script>
  
<?php require '../dashboard_part/dashboard_footer.php'; 
   ?>