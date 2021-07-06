<?php require "../session.php";  ?>
<?php
require "../dashboard_part/dashboard_header.php";
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="bg-dark text-white text-center p-4">
                    <h1>ADD Service</h1>
                </div>
                <form action="service_post.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Service title" name="service_title">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Service Description" name="service_desp"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" placeholder="Service Images" name="service_img">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </div>
                </form>
                <?php if(isset($_SESSION['service_content'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['service_content'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['service_content']); }?>

                <?php if(isset($_SESSION['image_format'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['image_format'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['image_format']); }?>

                <?php if(isset($_SESSION['image_size'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['image_size'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['image_size']); }?>
            </div>
        </div>
    </div>
</section>

<?php
require "../dashboard_part/dashboard_footer.php";
?>