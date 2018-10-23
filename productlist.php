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
      <section class="section-padding section_service_bg wow slideInDown" data-wow-duration="3s">
         <div class="container">
            <div class="row">
                  <!--   <h1 class="service_area">Our Service</h1> -->
                  <!--  <div class="align-middle">Our Service</div> -->
            </div>
         </div>
       
      </section>
      
      <section class="section-padding wow fadeInUp service_bg">
          <div class="container">
            <div class="row">
              <div class="col-md-5 offset-md-3">
                <h2 class="Service_area">Product List :</h2>
              </div>
            </div>
            
          <div class="row">
             <div class="col-md-4 offset-md-2">
                
                <ul class="service_list">
                <li>1. School Management System</li>  
                  <li> 2.  Travel Management System:</li>
                  <li> 3.  Law Management System</li>
                   <li> 4.  Pharmacy Management System</li>
                   <li> 5.  Rental Management System</li>
                    <li>6.  Stock Management System</li>
                    <li> 7. Accounts Management System</li>
                    <li> 8.  Real Estate Management System </li>
                   <li>  9.  Cold Storage Management System</li>
                  <li> 10. Factory Management System </li>
                   <li> 11. Office Management System</li>
                  
                    

                </ul>  
             </div>
             <div class="col-md-6">
              <ul>
                 <li> 12. Restaurant Management System</li>
                   <li>13. Residential Management System</li>
                    
                   <li> 14. Hospital Management System</li>
                   <li>  15. Garments Management System</li>
                  <li> 16. Corporate Management System</li>
                   <li> 17. Filling Station Management System</li>
                   <li> 18. Departmental Store Management System</li>
                   <li>19. Shop Management System</li>
                    <li> 20. University Management System</li>
                   <li> 21. Auto Rice mill Management System</li>
                   <li>22.  Export- Import Management System</li>
              </ul>
               
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