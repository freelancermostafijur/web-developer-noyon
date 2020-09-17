<?php include('mail_contact.php') ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/fabicon.png" type="image/png">
    <title>Contact us | Freelancer Noyon</title>
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Freelancer Noyon, Full Stack Web Developer & Social Entrepreneur"/>
    <meta name="keywords" content="Entrepreneur,Web Developer,Web Designer, Programmer, Freelancer Noyon, Freelancer Noyon, Bangladesh, Online Earning, Earn Money online, Bangla Video Tutorial"/>
    <meta name="author" content="Freelancer Noyon"/>
<!---------google font---------->
    <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque|Montserrat:400,400i,700&display=swap" rel="stylesheet"/> 
    <link href="https://fonts.googleapis.com/css?family=Abel|Darker+Grotesque|Maven+Pro|Montserrat:300i,400,400i,700,700i&display=swap" rel="stylesheet"/>  
      <link rel="stylesheet" href="css/all.min.css" type="text/css"/>

    
<!---------SCROLL ANIMATION---------->
    <link href="css/aos-scroll.min.css" type="text/css" rel="stylesheet"/>
 <!---------SWIPER SLIDER---------->    
    <link href="css/swiper-slider.min.css" type="text/css" rel="stylesheet"/>
 <!---------BOOTSTARP---------->    
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
 <!---------CUSTOM CSS---------->    
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
 <!---------RESPONSIVE CSS---------->  
    <link href="css/responsive.css" type="text/css" rel="stylesheet"/>
    
    
</head>
<body>
<!------------HOME SECTION START--------------->
<section id="home"> 
	<div class="home_phpto"> 
	<img src="images/contact-home-pae.jpg" alt="">
	</div>
	
   <!---------NAV BAR---------->
   <header>	
	<nav data-aos="fade-down" class="navBar "> 
		<div class="container"> 
		<div class="row menu_bar"> 
				<a href="index.php">
					<img src="images/web-develper.png" alt="">
                </a>
                    <ul class="primaryMenu">
                        <li><a href="index.php" >Home</a></li>
                        <li><a href="about_page.php">About</a></li>
                        <li><a href="services_page.php">Services</a></li>
                        <li><a href="contact_page.php">Contact Us</a></li>
                        <li><a href="login.php" class="liveClass">Live Class</a></li>
                    </ul>
                     <button onclick="openNav()" id="menuOpen-btn">&#9776;</button>
    
		</div>	
		</div>			
	</nav>
	
                         <div id="myNav" class="overlay">
                          <a href="javascript:viod()" onclick="closeNav()" class="closebtn">&times;</a>
                          <div class="overlay-content"> 
                           <a onclick="closeNav()" href="index.php" >Home</a>
                           <a onclick="closeNav()" href="about_page.php">About</a>
                           <a onclick="closeNav()" href="services_page.php">Services</a>
                           <a onclick="closeNav()" href="contact_page.php">Contact Us</a>
                           <a onclick="closeNav()" class="liveClass" href="login.php">Live Class</a>
                          </div>
                         </div>
                       
	
</header>	
<!---------SERVICES_HOME_PAGE DESCRIPTION START---------->		
<div class="container">	
	<div class="row">
        <div data-aos="zoom-in" class="services_home_page_title"> 
	        <h1>CONTACT US</h1>
	        <p>Our Best Freelaner Find</p>
	    </div>
	</div>		
</div>
    
	<div class="angel_div"> 
	<img src="images/angel.png" alt="">
	</div>
	
</section><!---------SERVICES_HOME_PAGE DESCRIPTION END---------->

<!---------ABOUT SECTION---------->	
<section id="about" class="about_Section about_sticky">
<div class="container">
       <div class="aboutTitle">
        <h1>Need I...?  </h1>
       </div>	
<div class="row"> 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 "> 
        <div class="contact_img"> 
        <img data-aos="fade-right" src="images/services_contact.png" alt="">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 "> 
          <div data-aos="fade-left" class="contact_addr"> 
                <h3>YOU NEED TO DO</h3>
                <p><span><i class="fas fa-map-marker-alt"></i></span> Lalpur,Natore. Rajshahi,Bangladesh. </p>
                <p><span><i class="fas fa-phone-square-alt"></i></span> +8801737-417434</p>
                <p><span><i class="fas fa-envelope"></i></span> mostafijur34bd@gmail.com</p>
                <p><span><i class="fab fa-skype"></i></span> Skype_live: mustafijur34bd</p>
                <p><span><i class="fab fa-linkedin-in"></i></span> linkedin.com/in/mostafijur15bd</p>
                <p><span><i class="fab fa-facebook-square"></i></span> facebook.com/freelancermostafijur/</p>
                <p><span><i class="fab fa-twitter"></i></span> twitter.com/mostafijur15bd</p>
                <p><span><i class="fab fa-instagram"></i></span> instagram.com/freelancermostafijur</p>
          </div>
    </div>
</div>
</div>  
</section>
<!-------CONTACT SECTION ------->
<section id="contact" class="contact_Section contact_imgs about_sticky"> 
<div class="container"> 
    <div class="contact_title">
    <h3>CONTACT US</h3>    
    </div>
    
<form method="post" action="">    
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4"> 
            <div data-aos="fade-up" class="contact_discription"> 
            <label class="text-light" for="name">Name : (Required)</label>
            <input type="text" name="full_name" id="name" placeholder="Full Name" required/>
            </div>            
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4"> 
            <div data-aos="fade-up" class="contact_discription"> 
            <label class="text-light" for="email">Email Address : (Required)</label>
            <input type="email" name="Email_address" id="email" placeholder="Enter Your Email" required/>
            </div>            
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4"> 
            <div data-aos="fade-up" class="contact_discription"> 
            <label class="text-light" for="phone">Phone : (Optional)</label>
            <input type="tel" name="phone_number" id="phone" placeholder="Enter Your Phone" required/>
            </div>          
        </div>
        
    </div><!---// row end-->     
    <div class="row"> 
       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
           
            <div data-aos="fade-up" class="contact_colomn"> 
            
            <div data-aos="fade-up" class="contact_discription"> 
            <label class="text-light" for="sub">Subject : (Required)</label>
            <input type="text" name="subject" id="sub" placeholder="Subject" required/>
            </div>
            
            <div data-aos="fade-up" class="textArea"> 
                <label class="text-light" for="messege">Messege : (Required)</label>
				<textarea type="text" name="contact_message" id="messege" cols="63" rows="5" placeholder="Messages..."></textarea>
			</div>
           
            <div class="mt-3"> 
            <button type="submit" name="contact_submit" title="Send" class="btn btn-success font-italic">SEND...</button>
            </div>
            
            <h2> 
                <?php 
                    if( isset($success) ){
                        echo $success;
                    }
                ?>
            </h2>
            
            </div>
        </div>                    
    </div>  
</form>      
</div>     
</section>
<!-------FOOTER SECTION START ------->    
<section id="fotter" class="fotter_section"> 
<div class="container"> 
    <div class="row"> 
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4"> 
                <div data-aos="fade-up" class="fotter_discription"> 
                <a href="contact_page.php" title="hire me | Contact"><img src="images/mostafijur-footerLogo.png" alt=""></a>
                <p>Subscribe Md Mostafijur Rahman YouTube Channel to watch more videos on website development, WordPress and all others video's and Then press the bell icon to get immediate notification.</p>    
                </div>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4"> 
                <div data-aos="fade-up" class="fotter_discription"> 
                <h3>CONTACT US</h3>
                <p><span><i class="fas fa-map-marker-alt"></i></span> Lalpur,Natore. Rajshahi,Bangladesh. </p>
                <p><span><i class="fas fa-phone-square-alt"></i></span> +8801737-417434</p>
                <p><span><i class="fas fa-envelope"></i></span> mostafijur34bd@gmail.com</p>
                <p><span><i class="fab fa-skype"></i></span>Skype_live: mustafijur34bd</p>
                </div>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4"> 
                <div data-aos="fade-up" class="fotter_discription"> 
                <h3>GET IN TOUCH</h3>
                <form action="">
                    <div class="input_form">
                    <input type="email" name="email" placeholder="Enter your Email"/>
                    </div>
                    <div class="input_form">
                    <button type="button" name="button">Subscribe</button>
                    </div>
                </form>
                
                
                </div>
            </div>
    </div>   
           
</div>        
</section><!-------// FOOTER SECTION END -------> 
<!-------COPY RIGHT SECTION START -------> 
<section class="copyright-section"> 
    <div class="container"> 
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8"> 
            <div class="copyRight">
        <p> &copy; 2020 All Right Reserved by freelancer Noyon | Web Developer. </p>
        </div>
        </div>  
        
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="social_icon">
                <a href="https://www.instagram.com/freelancermostafijur/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://web.facebook.com/freelancermostafijur/" target="_blank" title="Facebook"><i class="fab fa-facebook-square"></i></a>    
                <a href="https://www.linkedin.com/in/mostafijur15bd/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>   
                <a href="https://twitter.com/mostafijur15bd" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCt9YC3YXTyBrBDODNciw6_A?view_as=subscriber" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a> 
                <a href="javascrip:void()"  id="skype"  title="live:mustafijur34bd"><i class="fab fa-skype"></i></a> 
                </div>
            </div>
    </div>    
    </div>
</section><!-------// COPY RIGHT SECTION END -------> 
   
<!-------BOOTSTARP ------->
    <script src="js/jquery-slim.min.js"></script>	
    <script src="js/popper.min.js"></script>	
    <script src="js/bootstrap.min.js"></script>	
 <!------- jQUERY ------->   
    <script src="js/jquery341.min.js"></script>
    <script src="js/all.min.js"></script>
	
<!-------TYPED JS ------->    
    <script src="js/typed.min.js"></script>	
<!-------AOS-SCROLL JS ------->    
    <script src="js/aos-scroll.min.js"></script>
<!-------SCROOL STICKYH MENU JS ------->     
    <script src="js/scrool-jquery.waypoints.min.js"></script>
 <!---------SWIPER JS---------->
    <script src="JS/swiper-slider.min.js"></script>      
<!-------CUSTOM JS IS ME-------> 
     <script src="js/custom.js"></script>	
      
</body>
</html>