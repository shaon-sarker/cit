<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>

<?php

require '../db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM `slides`WHERE id='$id'";
$result = mysqli_query($db_conn, $sql);
$after_assoc = mysqli_fetch_assoc($result);

?> 

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 m-auto">
            <div class="alert alert-primary text-center" role="alert">
                <h1>Single Banner Image View</h1>
            </div>
<table class="table">
  <thead>
    <tr>
      <td scope="col">SL</td>
      <td scope="col"><?php echo $after_assoc['id'] ?></td>  
    </tr>

    <tr>
      <td scope="col">Slide Image</td>
      <td scope="col">
      <img width="200" src="/cit/uploads/slideshow/<?php echo $after_assoc['slide_pic'] ?>" alt="">
      
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