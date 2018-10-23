<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include('include/head.php') ?>
      <style type="text/css">
         #back2Top {
         width: 40px;
         line-height: 40px;
         overflow: hidden;
         z-index: 999;
         display: none;
         cursor: pointer;
         -moz-transform: rotate(270deg);
         -webkit-transform: rotate(270deg);
         -o-transform: rotate(270deg);
         -ms-transform: rotate(270deg);
         transform: rotate(270deg);
         position: fixed;
         bottom: 50px;
         right: 0;
         background-color: #DDD;
         color: #555;
         text-align: center;
         font-size: 30px;
         text-decoration: none;
         }
         #back2Top:hover {
         background-color: #DDF;
         color: #000;
         }
         #counter{
         background-image: url("images/1920x1080/bg_4.jpg");
         padding: 50px 100px;  
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center;
         background-attachment: fixed;
         }
         #product {
         background-image: url('images/1920x1080/bg_2.jpg');
         background-position: center;
         padding: 50px 0;
         background-repeat: no-repeat;
         background-attachment: fixed;
         }
      </style>
   </head>
   <body>
      <a id="back2Top" class="scrollToTop" title="Back to top" href="#">&#10148;</a>
      <?php include('include/navbar.php'); ?>
      <div class="bsnav-mobile">
         <div class="bsnav-mobile-overlay"></div>
         <div class="navbar"></div>
      </div>
      <section class="section-padding wow slideInDown" data-wow-duration="3s">
         <div class="owl-carousel slider_1 owl-theme">
            <div class="item">
               <img src="images/1920x1080/bg_1.jpg">
               <!--  <div class="slide-caption">
                  <h1 class="slide-caption__title">Mussum Ipsum</h1>
                  <p class="slide-caption__desc"> Mé faiz elementum girarzis, nisi eros vermeio.</p>
                  <a href="#" class="btn">Mussum ipsum button</a>
                  </div> -->
            </div>
            <div class="item">
               <img src="images/1920x1080/bg_2.jpg">
               <!--  <div class="slide-caption">
                  <h1 class="slide-caption__title">Mussum Ipsum</h1>
                  <p class="slide-caption__desc"> Mé faiz elementum girarzis, nisi eros vermeio.</p>
                  <a href="#" class="btn">Mussum ipsum button</a>
                  </div> -->
            </div>
            <div class="item">
               <img src="images/1920x1080/bg_3.jpg">
               <!--  <div class="slide-caption">
                  <h1 class="slide-caption__title">Mussum Ipsum</h1>
                  <p class="slide-caption__desc"> Mé faiz elementum girarzis, nisi eros vermeio.</p>
                  <a href="#" class="btn">Mussum ipsum button</a>
                  </div> -->
            </div>
            <div class="item">
               <img src="images/1920x1080/bg_4.jpg">
               <!--   <div class="slide-caption">
                  <h1 class="slide-caption__title">Mussum Ipsum</h1>
                  <p class="slide-caption__desc"> Mé faiz elementum girarzis, nisi eros vermeio.</p>
                  <a href="#" class="btn">Mussum ipsum button</a>
                  </div> -->
            </div>
            <div class="item">
               <img src="images/1920x1080/bg_5.jpg">
               <!--  <div class="slide-caption">
                  <h1 class="slide-caption__title">Mussum Ipsum</h1>
                  <p class="slide-caption__desc"> Mé faiz elementum girarzis, nisi eros vermeio.</p>
                  <a href="#" class="btn">Mussum ipsum button</a>
                  </div> -->
            </div>
         </div>
      </section>
      <section id="service" class="wow slideInUp" data-wow-duration="5s">
         <div class="container">
            <div class="row">
               <div class="col-md-3 offset-md-4">
                  <h1 class="text-center">Our service</h1>
               </div>
            </div>
            <br><br>
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="serviceBox">
                     <div class="service-icon"></div>
                     <h3 class="title">Web Design</h3>
                     <p class="description">
                       web design is the process of visual communication and problem-solving using one .
                     </p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="serviceBox purple">
                     <div class="service-icon"></div>
                     <h3 class="title">Web App Development</h3>
                     <p class="description">
                        To help get you situated in today's landscape, we filled this guide with research, and user reviews.
                     </p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="serviceBox green">
                     <div class="service-icon"></div>
                     <h3 class="title">Responsive Design</h3>
                     <p class="description">
                       Responsive Web Design makes your web page look good on all devices.
                     </p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="serviceBox red">
                     <div class="service-icon"></div>
                     <h3 class="title">App Development</h3>
                     <p class="description">
                      Contact us today! Android, iOS, Web, UX/UI . Mobile App Development .
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
       <section id="about_atc" class=" section-padding  wow slideInUp" data-wow-duration="5s">
         <div class="container">
            <div class="row">
               <div class="col-md-5 offset-md-4">
                  <h1 class="text-center about_company">About ATC Tech Ltd. </h1>
               </div>
            </div>
            <br><br>
            <div class="row">
               <div class="col-md-9 offset-md-2">
                  <div class="details_company">
                     We aim high at being focused on IT purpose with our clients ,community and country. Using our creativity ideas and plans drives this company.This is where we really begin to visualize your napkin sketches and make them into beautiful pixels. <br> <br>

                     By the way its time to cheer up with full energy to do something for world.
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section-padding wow fadeInRight" data-wow-duration="3s" id="news">
         <div class="container">
            <div class="row">
               <div class="col-md-3 offset-md-4">
                  <h1>Latest News</h1>
               </div>
            </div>
            <br><br>
            <div class="owl-carousel slider_2 owl-theme">
               <div class="item">
                  <div class="post-slide">
                     <div class="post-img">
                        <a href="#"><img src="images/images_portfolio/2.jpg" alt=""></a>
                     </div>
                     <div class="post-content">
                        <div class="post-date">
                           <span class="month">apr</span>
                           <span class="date">10</span>
                        </div>
                        <h5 class="post-title"><a href="#">Kalagachia Digitalized By ATC tech</a></h5>
                        <p class="post-description">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                        </p>
                     </div>
                     <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
                        <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
                     </ul>
                  </div>
               </div>
               <div class="item">
                  <div class="post-slide">
                     <div class="post-img">
                        <a href="#"><img src="images/images_portfolio/3.jpg" alt=""></a>
                     </div>
                     <div class="post-content">
                        <div class="post-date">
                           <span class="month">apr</span>
                           <span class="date">10</span>
                        </div>
                        <h5 class="post-title"><a href="#">Hounarable  MP Attend Our digitalization Program</a></h5>
                        <p class="post-description">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                        </p>
                     </div>
                     <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
                        <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
                     </ul>
                  </div>
               </div>
               <div class="item">
                  <div class="post-slide">
                     <div class="post-img">
                        <a href="#"><img src="images/images_portfolio/8.jpg" alt=""></a>
                     </div>
                     <div class="post-content">
                        <div class="post-date">
                           <span class="month">apr</span>
                           <span class="date">10</span>
                        </div>
                        <h5 class="post-title"><a href="#">Our Hounarable MD Sir Fill with flower By Kalagachia Student </a></h5>
                        <p class="post-description">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                        </p>
                     </div>
                     <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
                        <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="photo_galarery_area" class="wow fadeInLeft" data-wow-duration="3s"">
         <div class="container">
            <div class="row">
               <div class="col-md-5 offset-md-4">
                  <h1 class="text-center">Photo Gallery</h1>
                  <br><br>
               </div>
               <div id="quad">
                  <figure>
                     <img src="images/images_portfolio/_DSC0779.JPG" alt="rose-red-wine">
                     <figcaption>Rose Red Wine</figcaption>
                  </figure>
                  <figure>
                     <img src="images/images_portfolio/_DSC0797.JPG" alt>
                     <figcaption>Green Glass Bottle</figcaption>
                  </figure>
                  <figure>
                     <img src="images/images_portfolio/IMG_2930.JPG" alt>
                     <figcaption>Guinness Barrels, Dublin</figcaption>
                  </figure>
                  <figure>
                     <img src="images/images_portfolio/8.jpg" alt>
                     <figcaption>Crystal Skull Vodka</figcaption>
                  </figure>
                  <figure>
                     <img src="images/images_portfolio/_DSC0590.JPG" alt>
                     <figcaption>Crystal Skull Vodka</figcaption>
                  </figure>
                  <figure>
                     <img src="images/images_portfolio/IMG_2938.JPG" alt>
                     <figcaption>Crystal Skull Vodka</figcaption>
                  </figure>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 offset-md-9">
                  <a href="" class="btn btn-success see_more">See More</a>
               </div>
            </div>
         </div>
      </section>
      <section  id="product" class="section-padding ">
      <div class="container wow fadeInRight" data-wow-duration="3s"">
         <div class="row">
            <div class="col-md-5 offset-md-4">
               <h1 class="Product_area">Our Product</h1>
            </div>
         </div>
         <br><br>
         <div class="owl-carousel slider_3 owl-theme">
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/SCHOOL-(MS)1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Untitled-1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/newhh1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Travel Agency (MS)1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Pharmacy (MS)1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Real Estate (MS).jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Resident Hotel(MS).jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Resturaant1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/office1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Management System(RMHMS)1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/stk1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/hospital 11.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Garments1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Filling Station (MS).jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Factory.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Export-Import (MS)1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/deeee1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Corporate (MS)1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/cold1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Auto Rice aMill1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="post-slide_1">
                  <div class="post-img_1">
                     <a href="#"><img src="images/prod-jpg/Accounts1.jpg" alt=""></a>
                  </div>
               </div>
            </div>
         </div>
         </section> <br>
         <section id="team" class="wow slideInLeft" data-wow-duration="5s"">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 offset-md-4">
                     <h1>Our Team</h1>
                  </div>
               </div>
               <br><br>
               <div class="owl-carousel slider_4 owl-theme">
                  <div class="item">
                     <div class="our-team">
                        <div class="pic">
                           <img src="images/emp/vvvvvvvvv.jpg" alt="">
                        </div>
                        <div class="team-prof">
                           <h3 class="post-title">Mohammad Atikur Rahman</h3>
                           <div class="border"></div>
                           <span class="post">Managing Director</span>
                           <ul class="team_social">
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="our-team">
                        <div class="pic">
                           <img src="images/emp/team-2.jpg" alt="">
                        </div>
                        <div class="team-prof">
                           <h3 class="post-title">Syed Hasibuzzaman</h3>
                           <div class="border"></div>
                           <span class="post">Deputy Manager(Head Of IT)</span>
                           <ul class="team_social">
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="our-team">
                        <div class="pic">
                           <img src="images/emp/siam.jpg" alt="">
                        </div>
                        <div class="team-prof">
                           <h3 class="post-title">Mehedi Hasan Siam</h3>
                           <div class="border"></div>
                           <span class="post">Senior Officer(IT Specialist)</span>
                           <ul class="team_social">
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="our-team">
                        <div class="pic">
                           <img src="images/emp/monir_1.JPG" alt="">
                        </div>
                        <div class="team-prof">
                           <h3 class="post-title">Md Moniruzzaman Monir</h3>
                           <div class="border"></div>
                           <span class="post">Officer(Web Developer)</span>
                           <ul class="team_social">
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="our-team">
                        <div class="pic">
                           <img src="images/emp/Tanvir.jpg" alt="">
                        </div>
                        <div class="team-prof">
                           <h3 class="post-title">Tanvir Ahmed Siddiky</h3>
                           <div class="border"></div>
                           <span class="post">Officer(Graphics Designer)</span>
                           <ul class="team_social">
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="our-team">
                        <div class="pic">
                           <img src="images/emp/_DSC0091.JPG" alt="">
                        </div>
                        <div class="team-prof">
                           <h3 class="post-title">Rasel Mahmud Ratan</h3>
                           <div class="border"></div>
                           <span class="post"> Officer(web Developer)</span>
                           <ul class="team_social">
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="counter" class="section-padding section_bg wow slideInRight" data-wow-duration="5s"">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-6">
                     <div class="counter">
                        <div class="counter-content">
                           <h3>Web Designing</h3>
                           <span class="counter-value">178</span>
                           <div class="counter-icon">
                              <i class="fa fa-globe"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="counter green">
                        <div class="counter-content">
                           <h3>Brand Building</h3>
                           <span class="counter-value">194</span>
                           <div class="counter-icon">
                              <i class="fa fa-briefcase"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="counter blue">
                        <div class="counter-content">
                           <h3>Brand Building</h3>
                           <span class="counter-value">194</span>
                           <div class="counter-icon">
                              <i class="fa fa-briefcase"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="counter orange">
                        <div class="counter-content">
                           <h3>Brand Building</h3>
                           <span class="counter-value">194</span>
                           <div class="counter-icon">
                              <i class="fa fa-briefcase"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="section-padding sec_bg wow slideInUp" data-wow-duration="3s"" id="client">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 offset-md-4">
                     <h1>Clients</h1>
                  </div>
               </div>
               <br><br>
               <div class="row">
                  <div class="owl-carousel slider_5 owl-theme">
                     <div class="item"><img src="images/clients/ahmed.png"></div>
                     <div class="item"><img src="images/clients/darbar400.png"></div>
                     <div class="item"><img src="images/clients/east.png"></div>
                     <div class="item"><img src="images/clients/jui.png"></div>
                     <div class="item"><img src="images/clients/east.png"></div>
                     <div class="item"><img src="images/clients/gdg.jpg"></div>
                     <div class="item"><img src="images/clients/scl.png"></div>
                    
                  </div>
               </div>
            </div>
         </section>
         <section class="section-padding wow slideInUp" data-wow-duration="3s"" id="contact">
            <div class="container">
               <div class="row">
                  <div class="col-md-5 offset-md-4">
                     <h1>Send Us Message</h1>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <form action="/action_page.php">
                        <label for="fname"> Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="Email" placeholder="Email">
                        <label for="email">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Subject">
                  </div>
                  <div class="col-md-6">
                  <label for="subject">Message</label>
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                  </div>
                  <input type="submit" class="btn btn-success text-center" value="Submit">
                  </form>
               </div>
            
            </div>
      </div>
      </section>
      <section class="s-google-map section-padding wow slideInUp" data-wow-duration="3s"">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.27916900284188!2d90.40905341322583!3d23.73073119547851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f6d567a769%3A0x38fd8831750732f4!2s30+Topkhana+Road%2C+Dhaka+1000!5e0!3m2!1sen!2sbd!4v1518163997236" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>
      <footer class="g-bg-color--dark">
         <!-- Links -->
         <div class="g-hor-divider__dashed--white-opacity-lightest">
            <div class="container g-padding-y-80--xs">
               <div class="row">
                  <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                     <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Home</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">About</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Work</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Contact</a></li>
                     </ul>
                  </div>
                  <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                     <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Twitter</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.facebook.com/atctechbd/">Facebook</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Instagram</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">YouTube</a></li>
                     </ul>
                  </div>
                  <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                     <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="careers.php">Career</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Terms & Conditions</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4 offset-md-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                     <h3 class="g-font-size-18--xs g-color--white">Address</h3>
                     <p class="g-color--white-opacity"><b>Head Office</b> : 
                     <p style="margin-top:-16px;" class="g-color--white-opacity">Anima Vista, 
                        Flat No:B-5, Level-5 <br> 30 Topkhana Road
                         Dhaka 1000.<br>
                         <b>Location: </b>Near By Paltan Mor And opposite of Hotel Asia And Hotel Royel. <br> <br>
                        <b> Branch Office:</b> <br>
                        Rahman Mansion
                        Room No.- 6(2nd Floor)<br>
                        21, Court House Street:Judge Court, Dhaka. <br><br>
                        Customer Care No : 01700799031-33<br>
                        Email : cs@atctechltd.com, info@atctech.org<br>
                        Hotline No : 01700799055 <br>
                        Phone No : 9562844 &nbsp Fax No: 9562845<br>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Links -->
         <!-- Copyright -->
         <!-- End Copyright -->
      </footer>
      <section class="copyright-area wow slideInUp" data-wow-duration="3s"">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <p class="text-center copyright-text">© Copyright 2018. All Rights Reserved by <a id="test" href="https://www.atctech.org">ATC tech Ltd</a> </p>
               </div>
            </div>
         </div>
      </section>
      <?php include('include/script.php'); ?>
      <script type="text/javascript">
         /*Scroll to top when arrow up clicked BEGIN*/
         $(window).scroll(function() {
             var height = $(window).scrollTop();
             if (height > 100) {
                 $('#back2Top').fadeIn();
             } else {
                 $('#back2Top').fadeOut();
             }
         });
         $(document).ready(function() {
             $("#back2Top").click(function(event) {
                 event.preventDefault();
                 $("html, body").animate({ scrollTop: 0 }, 5000);
                 return false;
             });
         
         });
          
      </script>
   </body>
</html>