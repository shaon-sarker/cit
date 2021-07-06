<?php require "../../session.php";  ?>
<?php
require "../../dashboard_part/dashboard_header.php";
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="bg-dark text-white text-center p-4">
                    <h1>ADD SKills</h1>
                </div>
                <form action="skill_post.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="skill title" name="skill_title">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Skill Description" name="skill_desp"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Skill percentage" name="percentage">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Add Skill</button>
                    </div>
                </form>
                <?php if(isset($_SESSION['skill_content'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['skill_content'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['skill_content']); }?>
            </div>
        </div>
    </div>
</section>

<?php
require "../../dashboard_part/dashboard_footer.php";
?>