<?php require "../session.php";  ?>
<?php
require "../dashboard_part/dashboard_header.php";
?>
  <section>
      <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="head">
                      <h2 class="p-3 mb-2 bg-dark text-white text-center">Users</h2>
                </div>
                <form action="post.php" method="POST" class="bg-light p-3" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control" name="uname">
                    <?php if(isset($_SESSION['name_err'])){ ?>
                        <div class="alert alert-danger mt-2" role="alert">
                             <?php echo $_SESSION['name_err']; ?>        
                         </div>
                    <?php } ?>
                   </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
                <?php if(isset($_SESSION['email_err'])){ ?>
                      <div class="alert alert-danger mt-2" role="alert">
                         <?php echo $_SESSION['email_err']; ?>        
                      </div>
                <?php } ?>

              <?php if(isset($_SESSION['email_exist'])){ ?>
                  <div class="alert alert-danger mt-2" role="alert">
                    <?php echo $_SESSION['email_exist']; ?>        
                  </div>
              <?php } ?>
               </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="pass">
            <a onclick="showpass()" class="btn btn-sm text-center text-white bg-dark position-absolute bottom-0 end-0">Show</a>
            <?php if(isset($_SESSION['pass_err'])){ ?>
                  <div class="alert alert-danger mt-2" role="alert">
                      <?php    echo $_SESSION['pass_err']; ?>        
                  </div>
            <?php } ?>
          </div>

          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="repassword" id="repass">
              <a onclick="reshowpass()" class="btn btn-sm text-center text-white bg-dark position-absolute bottom-0 end-0">Show</a>
              <?php if(isset($_SESSION['repass_err'])){ ?>
                    <div class="alert alert-danger mt-2" role="alert">
                       <?php    echo $_SESSION['repass_err']; ?>        
                    </div>
              <?php } ?>
               </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Birth Of Date</label>
              <input type="date" class="form-control" name="birthday">
              <?php if(isset($_SESSION['birthdate_err'])){ ?>
                  <div class="alert alert-danger mt-2" role="alert">
                      <?php    echo $_SESSION['birthdate_err']; ?>        
                  </div>
              <?php } ?>
            </div>

              <div class="mb-3">   
              <label for="exampleInputEmail1" class="form-label">Role</label>
              <select class="form-control" name="role" >
                  <option value="Admin">Admin</option>
                  <option value="Moderator">Moderator</option>
                  <option value="Editor">Editor</option>
                  <option value="Author">Author</option>
              </select>
              <?php if(isset($_SESSION['role_err'])){ ?>
                  <div class="alert alert-danger mt-2" role="alert">
                      <?php  echo $_SESSION['role_err']; ?>        
                  </div>
              <?php } ?>
              </div>

        <div class="col-lg-12">
          <div class="input-group mb-3">
            <input type="file" class="form-control" name="user_image">
          </div>
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
              <?php if(isset($_SESSION['succes'])){ ?>
                    <div class="alert alert-success mt-2" role="alert">
                        <?php echo $_SESSION['succes']; ?>        
                    </div>
            <?php } unset($_SESSION['succes']); ?>
      </form>
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
   
   <?php
    require "../dashboard_part/dashboard_footer.php";
  ?>