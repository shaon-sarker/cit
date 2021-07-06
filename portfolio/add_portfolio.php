<?php require "../session.php";  ?>
<?php
require "../dashboard_part/dashboard_header.php";
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="bg-dark text-white text-center p-4">
                    <h1>Portfolio Sections</h1>
                </div>
                <form action="portfolio_post.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <input type="text" class="form-control" placeholder="category" name="category">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title" name="title" >
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Description" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control"  name="port_pic">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Add Portfolio</button>
                    </div>
                </form>

                <?php if(isset($_SESSION['portfolio_content'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['portfolio_content'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['portfolio_content']); }?>

                <?php if(isset($_SESSION['image_size'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['image_size'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['image_size']); }?>

                <?php if(isset($_SESSION['image_format'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['image_format'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['image_format']); }?>
            </div>
        </div>
    </div>
</section>

<?php
require "../dashboard_part/dashboard_footer.php";
?>