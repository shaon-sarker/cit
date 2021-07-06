<?php session_start();  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Log in</title>
  </head>
  <body>
            <section class="pt-5">
                <div class="container">
                 <div class="row">
                    <div class="col-lg-6 m-auto">
                    <div class="alert alert-primary text-center">
                        <h3>Login Form</h3>
                    </div>
                    <?php if(isset($_SESSION['invalid'])){ ?>
                        <div class="alert alert-danger">
                           <?=   $_SESSION['invalid']; ?>
                        </div>

                    <?php } session_unset(); ?>
                       <form action="login_post.php" method="POST" class="bg-light p-5">
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        </form>
                    </div>
                 </div>
                </div>
            </section>
    

  
















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
  </body>
</html>
