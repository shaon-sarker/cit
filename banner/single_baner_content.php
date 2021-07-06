<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>

<?php

require '../db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM `banner_contents`WHERE id='$id'";
$result = mysqli_query($db_conn, $sql);
$after_assoc = mysqli_fetch_assoc($result);

?> 

    <section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto">
            <div class="alert alert-primary text-center" role="alert">
                <h1>Single Banner View</h1>
            </div>
<table class="table">
  <thead>
    <tr>
      <td scope="col">SL</td>
      <td scope="col"><?php echo $after_assoc['id'] ?></td>  
    </tr>

    <tr>
      <td scope="col">Sub Heading</td>
      <td scope="col"><?php echo $after_assoc['sub_head'] ?></td>  
    </tr>

    <tr>
      <td scope="col">HeadLine</td>
      <td scope="col"><?php echo $after_assoc['headline'] ?></td>  
    </tr>

    <tr>
      <td scope="col">Descriptions</td>
      <td scope="col"><?php echo $after_assoc['description'] ?></td>  
    </tr>

    <tr>
      <td scope="col">Button</td>
      <td scope="col"><?php echo $after_assoc['button'] ?></td>  
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