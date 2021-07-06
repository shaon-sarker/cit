<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>

<?php

require '../db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM `projects`WHERE id='$id'";
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
      <td scope="col">project_no</td>
      <td scope="col"><?php echo $after_assoc['project_no'] ?></td>  
    </tr>
    <tr>
      <td scope="col">Image</td>
      <td scope="col">
      <img width='180px' src="/cit/uploads/projects/<?php echo $after_assoc['project_img'] ?>" alt="">
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