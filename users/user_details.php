<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>

<?php

require '../db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM `crud`WHERE id='$id'";
$result = mysqli_query($db_conn, $sql);
$after_assoc = mysqli_fetch_assoc($result);

?> 

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto">
            <div class="alert alert-primary text-center" role="alert">
                <h1>User Details</h1>
            </div>
<table class="table">
  <thead>
    <tr>
      <td scope="col">ID</td>
      <td scope="col"><?php echo $after_assoc['id'] ?></td>  
    </tr>

    <tr>
      <td scope="col">User Name</td>
      <td scope="col"><?php echo $after_assoc['uname'] ?></td>  
    </tr>
    <tr>
      <td scope="col">Email</td>
      <td scope="col"><?php echo $after_assoc['email'] ?></td>  
    </tr>

    <tr>
      <td scope="col">Password</td>
      <td scope="col"><?php echo $after_assoc['password'] ?></td>  
    </tr>

    <tr>
      <td scope="col">Birth of date</td>
      <td scope="col"><?php echo $after_assoc['birthday'] ?></td>  
    </tr>

    <tr>
      <td scope="col">Image</td>
      <td scope="col">
      <img width='100px' src="../uploads/users/<?php echo $after_assoc['user_image'] ?>" alt="">
      </td>  
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
            </div>
        </div>
        </div>
    </section>

<?php require '../dashboard_part/dashboard_footer.php'  ?>