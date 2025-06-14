<!DOCTYPE html>
<html lang="en">

<head>
<?php include "include/meta.php"; ?>
<style>
  .rts-banner-area-two {
    position: relative;
    max-height: 580px;
    height: 580px;
    overflow: hidden;
  }
  .rts-banner-area-two::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Black shadow with 50% opacity */
    z-index: 1;
  }
  .rts-banner-area-two .container {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    align-items: center;
  }
  .shape-area-start {
    position: relative;
    z-index: 2;
  }
  
  /* Reduce banner height */
  .banner-swiper-two .rts-banner-area-two.rts-section-gap {
    padding-top: 60px;
    padding-bottom: 60px;
  }
  
  /* Adjust content for smaller height */
  .banner-swiper-two .banner-inner-two-content {
    max-width: 90%;
    margin: 0 auto;
  }
  
  .banner-swiper-two .banner-inner-two-content .disc {
    margin-bottom: 20px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
  }
  
  /* Make title smaller to fit in reduced height */
  .banner-swiper-two .banner-inner-two-content .title {
    font-size: 2.5rem;
    margin-bottom: 15px;
  }
</style>
</head>

<body>

<?php include "include/header.php"; ?>


    <div class="banner-swiper-two">
        <div class="swiper mySwiper-banner-two">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two rts-section-gap" style="background-image: url('images/banner/1.png'); background-size: cover; background-position: center;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>Welcome!</span> Asian Education Coalition</p>
                                        <h1 class="title">Asian Education Coalition (AEC)</h1>
                                        <p class="disc">
                                            Launched at the India-Nepal Summit 2025 in Kathmandu, the Asian Education Coalition (AEC) is a groundbreaking initiative spearheaded by the IPN Foundation to build a unified and future-ready educational framework across Asia. The Coalition brings together schools, educators, policymakers, EdTech leaders, and thought leaders to co-create solutions for shared challenges and opportunities in school education.
                                        </p>
                                        <a href="#" class="rts-btn btn-primary btn-white">Join the Coalition</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img src="assets/images/banner/shape/01.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-two">
                                <img src="assets/images/banner/shape/02.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-three">
                                <img src="assets/images/banner/shape/03.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-four">
                                <img src="assets/images/banner/shape/04.webp" alt="shape-area">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                     
                </div>
                <div class="swiper-slide">

                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two rts-section-gap" style="background-image: url('images/banner/2.png'); background-size: cover; background-position: center; ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>Milestone!</span> AEC Launch Event</p>
                                        <h1 class="title">Historic Launch in Nepal</h1>
                                        <p class="disc">
                                            The Asian Education Coalition was officially launched at the prestigious India-Nepal Summit 2025 in Kathmandu. Educational leaders from across Asia gathered to inaugurate this landmark initiative, marking a new era of regional collaboration in education. The event featured keynote addresses, collaborative workshops, and the signing of the AEC Charter by founding member nations.
                                        </p>
                                        <a href="#" class="rts-btn btn-primary btn-white">Event Highlights</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img src="assets/images/banner/shape/01.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-two">
                                <img src="assets/images/banner/shape/02.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-three">
                                <img src="assets/images/banner/shape/03.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-four">
                                <img src="assets/images/banner/shape/04.webp" alt="shape-area">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                     
                </div>
            </div>
            <div class="swiper-button-next"><i class="fa-light fa-chevron-right"></i></div>
            <div class="swiper-button-prev"><i class="fa-light fa-chevron-left"></i></div>
        </div>
    </div>



    <!-- rts about area start -->
    <div class="rts-about-area-two rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="left-thumbnail-about-area-two">
                        <img style="width: 100%; border-radius: 30px;" src="images/3.png" alt="about">
                        <!-- <div class="small-image">
                            <img src="images/5.png" alt="small">
                        </div> -->
                        <!-- <div class="counter-about-area">
                            <h2 class="counter title"><span class="odometer" data-count="25">00</span>+
                            </h2>
                            <span>Years of Collaboration</span>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--80 mt_md--80">
                    <div class="about-inner-content-two">
                        <div class="title-style-two left">
                            <span class="bg-content">Our Vision</span>
                            <span class="pre">More About Us</span>
                            <h2 class="title rts-text-anime-style-1">Nurturing a Connected and Collaborative <br> Educational Ecosystem</h2>
                        </div>
                        <div class="about-between-wrapper">
                            <p class="disc">
                                To nurture a connected and collaborative educational ecosystem across Asia that empowers every learner, educator, and institution through regional solidarity, innovation, and inclusive practices.
                            </p>
                            <div class="check-wrapper-area">
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>High-impact knowledge and resource exchange</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>Pedagogical innovation and EdTech integration</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>Professional development and capacity building</p>
                                </div>
                            </div>
                        </div>
                        <div class="call-and-sign-area two">
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-sharp fa-regular fa-phone-volume"></i>
                                </div>
                                <div class="information">
                                    <span>Call us anytime</span>
                                    <a href="#">
                                        <h6 class="title">info@ipnfoundation.org</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="sign-area">
                                <img src="aec.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="assets/images/about/shape/01.svg" alt="shape" class="one">
            <img src="assets/images/about/shape/02.svg" alt="shape" class="two">
        </div>
    </div>
    <!-- rts about area end -->

    <div class="rts-fun-facts-area mt--40 rts-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <div style="border-radius: 25px;"  class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                    <div class="signle-fun-facts-one">
                        <div class="icon">
                            <img src="assets/images/fun-facts/01.svg" alt="fun-facts">
                        </div>
                        <h2 class="counter title"><span class="odometer" data-count="5">00</span>
                        </h2>
                        <span class="bototm">Asian Countries</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                    <div class="signle-fun-facts-one">
                        <div class="icon">
                            <img src="assets/images/fun-facts/02.svg" alt="fun-facts">
                        </div>
                        <h2 class="counter title"><span class="odometer" data-count="20">00</span>k
                        </h2>
                        <span class="bototm">School Leaders</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2">
                    <div class="signle-fun-facts-one">
                        <div class="icon">
                            <img src="assets/images/fun-facts/03.svg" alt="fun-facts">
                        </div>
                        <h2 class="counter title"><span class="odometer" data-count="5">00</span>M
                        </h2>
                        <span class="bototm">Students</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area start -->
    <div class="rts-service-area pt--40 pb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-two center">
                        <span class="bg-content">AEC Highlights</span>
                        <span class="pre">What We Offer</span>
                        <h2 class="title rts-text-anime-style-1">Key Pillars & Benefits</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-2 mt--30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-bg-style-one-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="service-style-swiper-wrapper-two">
                                    <div class="swiper mySwiper-service-1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                    <div class="icons">
                                                        <img src="assets/images/service/icons/01.svg" alt="service">
                                                    </div>
                                                    <div class="information">
                                                        <h5 class="title">Membership & Governance</h5>
                                                        <p class="disc">
                                                            The Asian Education Coalition (AEC) unites founding members from India, Nepal, Qatar, UAE, Sri Lanka, and other Asian nations. Coordinated by the IPN Foundation, the coalition operates with rotating leadership and annual thematic working groups, ensuring diverse representation and dynamic governance. This collaborative structure empowers members to actively shape the coalition's direction and priorities, fostering a sense of ownership and shared purpose across the region.
                                                        </p>
                                                        <a href="#" class="arrow-right">
                                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                            <span>Read More</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                    <div class="icons">
                                                        <img src="assets/images/service/icons/02.svg" alt="service">
                                                    </div>
                                                    <div class="information">
                                                        <h5 class="title">Impact Goals (2025–2030)</h5>
                                                        <p class="disc">
                                                            By 2030, AEC aims to reach over 100,000 schools across Asia, engage 5 million educators in capacity-building, and launch more than 10 cross-border academic partnerships annually. The coalition is committed to developing a Pan-Asian Education Resource Hub and contributing to regional and global education dialogues, driving meaningful change and innovation in school education throughout the continent.
                                                        </p>
                                                        <a href="#" class="arrow-right">
                                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                            <span>Read More</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                    <div class="icons">
                                                        <img src="assets/images/service/icons/03.svg" alt="service">
                                                    </div>
                                                    <div class="information">
                                                        <h5 class="title">Strategic Benefits for Members</h5>
                                                        <p class="disc">
                                                            Members of the AEC gain access to a continental network of progressive educators, exposure to global innovations, and opportunities for AEC-endorsed certifications and awards. Priority access to research grants and pilot projects further empowers members to lead educational transformation, ensuring they remain at the forefront of best practices and emerging trends in school education across Asia.
                                                        </p>
                                                        <a href="#" class="arrow-right">
                                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                            <span>Read More</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->


    <!-- rts call to action area start -->
    <div class="rts-call-to-action-area-two bg_image">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cta-style-two-area">
                                    <h3 class="title rts-text-anime-style-1">
                                        Let's discuss how we can shape the future of education together
                                    </h3>
                                    <a href="contact.php" class="rts-btn btn-primary btn-white">Join the Movement</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts call to action area end -->



    <!-- rts business goal area start -->
    <!-- <div class="business-goal-area-2 rts-section-gap">
        <div class="container pt--30">
            <div class="row">
                <div class="col-lg-6">
                    <div class="consultancy-style-one">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Conclusion</span>
                            <span class="pre">The Future of Learning</span>
                            <h2 class="title rts-text-anime-style-1">The Asian Education Coalition is a movement to reimagine school education across Asia.</h2>
                        </div>
                        <p class="disc">
                            It offers a platform rooted in shared values, mutual respect, and collective ambition to build the future of learning.
                        </p>
                        <div class="signle-consultancy mb--30">
                            <div class="icon">
                                <img src="assets/images/about/icons/01.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">Collaborative Educational Initiatives</h4>
                                <p class="disc">
                                    We foster partnerships and collaborative projects that drive educational innovation and impact across Asia, empowering schools and educators to achieve more together.
                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy">
                            <div class="icon">
                                <img src="assets/images/about/icons/02.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">Support for Educators & Institutions</h4>
                                <p class="disc">
                                    Our coalition provides ongoing support, resources, and professional development to educators and institutions, ensuring sustainable growth and excellence in school education.
                                </p>
                            </div>
                        </div>
                        <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <a href="contact.php" class="rts-btn btn-primary">Contact Us</a>
                            <div class="vedio-icone">
                                <a class="video-play-button play-video popup-video" href="https://www.youtube.com/watch?v=vZE0j_WCRvI">
                                    <span></span>
                                </a>
                                <div class="video-overlay">
                                    <a href="#section1" class="video-overlay-close">×</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-business-area-right-two">
                        <div class="large-thumbnail">
                            <img src="images/1.png" alt="">
                        </div>
                        <div class="small-thumbnail images-r">
                            <img src="images/4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> -->

    <!-- rts counter up area start -->
    <!-- <div class="rts-counter-up-area rts-section-gap counter-bg">
        <div class="container">
            <div class="row g-5">
           
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="icon">
                            <img src="assets/images/counterup/icon/01.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="199">00</span>+
                            </h2>
                            <p class="disc">Educational Initiatives</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center two pl--30">
                        <div class="icon">
                            <img src="assets/images/counterup/icon/02.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="300">00</span>+
                            </h2>
                            <p class="disc">Community Engagements</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center three pl--50 pl_md--10 pl_sm--0">
                        <div class="icon">
                            <img src="assets/images/counterup/icon/03.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="699">00</span>+
                            </h2>
                            <p class="disc">Skilled Educators</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 four">
                        <div class="icon">
                            <img src="assets/images/counterup/icon/04.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="120">00</span>+
                            </h2>
                            <p class="disc">Partner Institutions</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!-- rts counter up area end -->

    <!-- start gallery section -->
    <!-- <div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
        <div class="container pt--40">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper-gallery-project">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Our Initiatives</span>
                            <span class="pre">Featured Initiatives</span>
                            <h2 class="title rts-text-anime-style-1">Showcasing Our Collaborative Initiatives</h2>
                        </div>

                        <div class="swiper-paginations"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-style-one-wrapper">

                        <div class="swiper mySwiper-project-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="project-details.php" class="thumbnail">
                                            <img src="assets/images/project/01.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="project-details.php">
                                                <h5 class="title">Educational Growth</h5>
                                            </a>
                                            <span>Education Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="project-details.php" class="thumbnail">
                                            <img src="assets/images/project/02.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="project-details.php">
                                                <h5 class="title">Startup Solution</h5>
                                            </a>
                                            <span>Education Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="project-details.php" class="thumbnail">
                                            <img src="assets/images/project/01.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="project-details.php">
                                                <h5 class="title">Marketing Growth</h5>
                                            </a>
                                            <span>Education Strategy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- start gallery section -->

    <!-- rts team area start -->
     <div style="margin-top: 70px;"></div>
<?php include "include/leaders.php"; ?>
    <!-- rts team area end -->



    <!-- rts clients review area start -->
    <!-- <div class="rts-client-review-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper" dir="ltr">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Review</span>
                            <span class="pre">Leader Reviews</span>
                            <h2 class="title ">Leader Reviews
                            </h2>
                        </div>
                        <div class="pagination-wrapper">
                            <div class="swiper-pagination-fraction"></div>
                            <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="testimonials-wrapper-swiper-demo-2">
                        <div class="swiper mySwiper-testimonials-dmeo-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonials-main-wrapper-two">
                                        <div class="left-thumbnail">
                                            <img src="assets/images/testimonials/01.webp" alt="testimonials">
                                        </div>
                                        <div class="right-content-testimonials">
                                            <p class="disc">
                                                "The Asian Education Coalition has opened new doors for collaboration and innovation in our school. Our teachers and students now have access to resources and expertise from across Asia."
                                            </p>
                                            <div class="name-desig">
                                                <h6 class="title">Dr. Maya Singh</h6>
                                                <p>Principal, Lotus International School</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-main-wrapper-two">
                                        <div class="left-thumbnail">
                                            <img src="assets/images/testimonials/01.webp" alt="testimonials">
                                        </div>
                                        <div class="right-content-testimonials">
                                            <p class="disc">
                                                "Being part of the AEC has empowered our educators to adopt best practices and innovative teaching methods. The sense of community and shared purpose is truly inspiring."
                                            </p>
                                            <div class="name-desig">
                                                <h6 class="title">Mr. Kenji Watanabe</h6>
                                                <p>Education Policy Expert, Japan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-main-wrapper-two">
                                        <div class="left-thumbnail">
                                            <img src="assets/images/testimonials/01.webp" alt="testimonials">
                                        </div>
                                        <div class="right-content-testimonials">
                                            <p class="disc">
                                                "The coalition's commitment to equity and inclusion has made a real difference in our region. We are proud to be part of a movement that is shaping the future of education in Asia."
                                            </p>
                                            <div class="name-desig">
                                                <h6 class="title">Fatima Al Mansouri</h6>
                                                <p>Coalition Founding Member, UAE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- rts clients review area end -->


<?php include "include/register.php"; ?>



 



    <!-- rts footer two area wrapper -->
<?php include "include/footer.php"; ?>
    <!-- rts footer two area wrapper end -->



<?php include "include/sidebar.php"; ?>
    <!-- inner menu area desktop End -->


    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <div id="anywhere-home" class="">
    </div>

    <!-- rtl btn area start -->

    <!-- rtl btn area end -->

    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->

<?php include "include/scripts.php"; ?>

<style>
/* AEC Global Style Overrides - Consistent Clean Design */

/* Brand Colors */



</style>
</body>

</html>
