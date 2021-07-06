<?php 
require 'db.php';
include 'includes/header.php'; 

$id = $_GET['id'];
$select_portfolio = "SELECT * FROM portfolios WHERE id=$id";
$select_result_portfolio = mysqli_query($db_conn,$select_portfolio);
$after_asoc = mysqli_fetch_assoc($select_result_portfolio);



?>

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2>Portfolio Single POST</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                <div class="blog-list-thumb mb-35">
                                    <img src="/cit/uploads/portfolio/<?= $after_asoc['port_pic']; ?>" alt="img">
                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <h2><?= $after_asoc['title']; ?></h2>

                                    <p><?= $after_asoc['description']; ?></p>

                                    <div class="blog-list-meta">
                                        <ul>
                                            <li class="blog-post-date">
                                                <h3>Share On</h3>
                                            </li>
                                            <li class="blog-post-share">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="avatar-post mt-70 mb-60">
                                <?php 
                                $user_id = $after_asoc['user_id'];
                                $select_user = "SELECT * FROM crud WHERE id=$user_id";
                                $select_user_result = mysqli_query($db_conn,$select_user);
                                $after_asoc_user = mysqli_fetch_assoc($select_user_result);
                                
                                
                                
                                ?>
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                                <img width='120' src="/cit/uploads/users/<?=  $after_asoc_user['user_image']; ?>" alt="img">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5><?=  $after_asoc_user['fname']; ?></h5>
                                                <p>Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae
                                                    condimem
                                                    egestliberos dolor auctor
                                                    tellus.</p>
                                                <div class="post-avatar-social mt-15">
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/cit/portfolio-single.php?id=1"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

        </main>
        <!-- main-area-end -->

<?php include 'includes/footer.php'; ?>
      