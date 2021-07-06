<?php require "../session.php";  ?>
<?php
require "../dashboard_part/dashboard_header.php";
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="bg-dark text-white text-center p-4">
                    <h1>Icons</h1>
                </div>
                <form action="icon_post.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="add Icons CLass Name" name="icon_name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="add Icons Link" name="icon_link">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Add Icon</button>
                    </div>
                </form>
                
                <?php if(isset($_SESSION['icons'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['icons'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['icons']); }?>
            </div>
        </div>
    </div>
</section>

<?php
require "../dashboard_part/dashboard_footer.php";
?>