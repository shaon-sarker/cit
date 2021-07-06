<?php session_start(); ?>
<?php include 'db.php'; ?>

<?php 
 
 $select = "SELECT * FROM banner_contents WHERE status=1";
 $select_result = mysqli_query($db_conn,$select);
 $after_assoc = mysqli_fetch_assoc($select_result);

 $select_baner_image = "SELECT * FROM baner_images WHERE status=1";
 $select_result2 = mysqli_query($db_conn,$select_baner_image);
 $after_assoc_baner_image = mysqli_fetch_assoc($select_result2);

 $select_icon = "SELECT * FROM social_icons";
 $select_result_icon = mysqli_query($db_conn,$select_icon);

 $select_skill = "SELECT * FROM skills";
 $select_result_skill = mysqli_query($db_conn,$select_skill);

 $select_services = "SELECT * FROM services";
 $select_result_services = mysqli_query($db_conn,$select_services);

 $select_about = "SELECT * FROM about WHERE status=1";
 $select_result_about = mysqli_query($db_conn,$select_about);
 $after_assoc_about = mysqli_fetch_assoc($select_result_about);

 $select_portfolio = "SELECT * FROM portfolios";
 $select_result_portfolio = mysqli_query($db_conn,$select_portfolio);

 $select_project = "SELECT * FROM projects";
 $select_result_project = mysqli_query($db_conn,$select_project);
//  $after_assoc_project = mysqli_fetch_assoc($select_result_project);

 $select_testimonial = "SELECT * FROM testimonials";
 $select_result_testimonial = mysqli_query($db_conn,$select_testimonial);

 $select_slides = "SELECT * FROM slides";
 $select_result_slides = mysqli_query($db_conn,$select_slides);


?>




<?php include 'includes/header.php' ?>

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s"><?= $after_assoc['sub_head']; ?></h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?= $after_assoc['headline']; ?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?= $after_assoc['description']; ?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                    <?php foreach($select_result_icon as $icon){?>
                                        <li><a target="_blank" href="<?= $icon['icon_link']; ?>"><i class="<?= $icon['icon_name']; ?>"></i></a></li>
                                    <?php } ?>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s"><?= $after_assoc['button']; ?></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="/cit/uploads/baners/<?php echo $after_assoc_baner_image['baner_pic']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="/cit/uploads/about/<?php echo $after_assoc_about['about_pic']; ?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span><?php echo $after_assoc_about['sub_head']; ?></span>
                                <h2><?php echo $after_assoc_about['heading']; ?></h2>
                            </div>
                            <div class="about-content">
                                <p><?php echo $after_assoc_about['description']; ?></p>
                                <h3>Skills:</h3>
                            </div>

                            <?php foreach($select_result_skill as $skill){ ?>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year"><?= $skill['skill_title']; ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $skill['skill_desp']; ?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $skill['percentage']; ?>%;" aria-valuenow="<?= $skill['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                    <?php foreach($select_result_services as $service){ ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class=""><img width="50" src="uploads/services/<?php echo $service['service_img'] ?>" alt=""></i>
								<h3><?php echo $service['service_title'] ?></h3>
								<p>
									<?php echo $service['service_desp']  ?>
								</p>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php foreach($select_result_portfolio as $portfolio){ ?>

                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="/cit/uploads/portfolio/<?= $portfolio['port_pic'] ?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?= $portfolio['category'] ?></span>
									<h4><a href="portfolio-single.php"><?= $portfolio['title'] ?></a></h4>
									<a href="portfolio-single.php?id=<?= $portfolio['id'] ?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                    <?php } ?>

                        </div>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                        <?php foreach($select_result_project as $project){ ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class=""><img width="50" src="/cit/uploads/projects/<?= $project['project_img']; ?>" alt=""></i>
                                    </div>
                                    <div class="fact-content">
                                    
                                        <h2><span class="count"><?=  $project['project_no']; ?></span><?= ($project['id']==4)? 'k': '' ?></h2>
                                        <span><?=  $project['project_head']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                           
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->
<!-- 3rd comment -->
            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                            <?php foreach($select_result_testimonial as $testimonial){ ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img width="80" src="/cit/uploads/testimonials/<?= $testimonial['test_img'] ?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?= $testimonial['description'] ?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?= $testimonial['test_head'] ?></h5>
                                            <span><?= $testimonial['test_subhead'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                    <?php foreach($select_result_slides as $slideshow){ ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img width="100" src="/cit/uploads/slideshow/<?= $slideshow['slide_pic'] ?>" alt="img">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span>Event Center park WT 22 New York</li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span>+9 125 645 8654</li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>info@exemple.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="contact.php" method="POST">
                                    <input type="text" placeholder="your name *" name="uname">
                                    <?php if(isset($_SESSION['name_err'])){ ?>
                                        <div class="alert alert-success mt-2" role="alert">
                                            <?php echo $_SESSION['name_err']; ?>        
                                        </div>
                                    <?php } unset($_SESSION['name_err']);?>

                                    <input type="email" placeholder="your email *" name="email">
                                    <?php if(isset($_SESSION['email_err'])){ ?>
                                        <div class="alert alert-success mt-2" role="alert">
                                            <?php echo $_SESSION['email_err']; ?>        
                                        </div>
                                    <?php }  ?>

                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <?php if(isset($_SESSION['message_err'])){ ?>
                                        <div class="alert alert-success mt-2" role="alert">
                                            <?php echo $_SESSION['message_err']; ?>        
                                        </div>
                                <?php } ?>

                                    <button class="btn">BUY TICKET</button>
                                </form>
                                <?php if(isset($_SESSION['contact_success'])){ ?>
                                        <div class="alert alert-success mt-2" role="alert">
                                            <?php echo $_SESSION['contact_success']; ?>        
                                        </div>
                                <?php } unset($_SESSION['contact_success']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

      <?php include 'includes/footer.php' ?>