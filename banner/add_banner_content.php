<?php require "../session.php";  ?>
<?php
require "../dashboard_part/dashboard_header.php";
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="bg-dark text-white text-center p-4">
                    <h1>User Details</h1>
                </div>
                <form action="banner_content_post.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Sub Heading" name="sub_head">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Heading" name="headline" >
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Description" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Button Name" name="button">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Add Content</button>
                    </div>
                </form>
                <?php if(isset($_SESSION['banner_content'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['banner_content'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['banner_content']); }?>
            </div>
        </div>
    </div>
</section>

<?php
require "../dashboard_part/dashboard_footer.php";
?>