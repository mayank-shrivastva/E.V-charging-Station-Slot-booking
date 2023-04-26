<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdeliver.net/npm/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>
<body>
<header>
<a href="../index.php" class="logo" ><h1>EVRC</h1></a>

<ul class="navbar">
    
 
<li><a href="../index.php">Home</a></li>
<li><a href="../about.php">About</a></li>
<li><a href="../services.php">Service</a></li>
<li><a href="../contact.php">Contact</a></li>
<li><div class="header-btn">
    <a href="../user/login/" class="sign-up"> Login</a>
    </div></li>
</ul><i class="material-icons" style="font-size:26px" id="showMenu">menu</i>
</header>
    <!--home-->
    <section class="home" id="home"> 
        <div class="text">
            <h1><spam>Looking </spam> to <br>rent a car</h1>
            <p> We have a wide network of services  which rent cars and bikes for your daily needs.</p>
            <div class="app-stores">
                <img src="img/ios.png" alt="ios">
                <img src="img/512x512.png" alt="play">

            </div> 
        </div>
        

    </section>
    <!-- This is ride section -->
    <!--ride-->
    <section class="ride" id="ride">    
        <div class="heading">
            <span>How Its Work</span>
            <h1>Book With 3 Easy Steps </h1>
        </div>
    <div class="ride-container">
        <div class="box">
           <i class="fa fa-map-marker" style="font-size:48px;color:red"></i>
            <h2>Choose A Location</h2>
             </div>

        <div class="box">
            <i class="fa fa-calendar" style="font-size:48px;color:red"></i>
            <h2>Pick-Up Date</h2>
              </div>

        <div class="box">
		  <i class="fa fa-check" style="font-size:48px;color:red"></i>
        
            <h2>Book A Car</h2>
            </div>
    </div>
    </section>
    <!--Services-->
    <section class="Services" id="Services">
        <div class="heading">
            <span>Best Services</span>
            <h1>Explore Out Top Deals <br> From Top Rated Dealers</h1>
        </div>
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/tiago.jpg" alt="">
                </div>
                <p>2023</p>
                <h1>Tata Tiago EV</h1>
                <h3>Transmission : Automatic </h3>
                <h3>Charging Time : 3.6 Hours </h3>
                <h3>Battery Capacity : 24KWh </h3>
                <h3>Max Power (bhp@rpm) : 73.75bhp </h3>
                <h3>Max Torque (nm@rpm) : 114Nm </h3>
                <h3>Range : 315km </h3>
                <h3>Body Type : Hatchback </h3>
                <h2>250 rs<span>/hour</span></h2>
                <a href="../user/login" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/KIa EV6.png" alt="">
                </div>
                <p>2022</p>
                <h1>Kia EV6</h1>
                <h3>Transmission : Automatic </h3>
                <h3>Charging Time : 18min(0-80) </h3>
                <h3>Battery Capacity : 77.4KWh </h3>
                <h3>Max Power (bhp@rpm) : 320bhp </h3>
                <h3>Max Torque (nm@rpm) : 605Nm </h3>
                <h3>Range : 700km </h3>
                <h3>Body Type : SUV </h3>
                <h2>250 rs <span>/hour</span></h2>
                <a href="../user/login" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/MG ZS EV.png" alt="">
                </div>
                <p>2020</p>
                <h1>MG ZS EV</h1>
                <h3>Transmission : Automatic </h3>
                <h3>Charging Time : 8.5 Hours </h3>
                <h3>Battery Capacity : 50KWh </h3>
                <h3>Max Power (bhp@rpm) : 173.7bhp </h3>
                <h3>Max Torque (nm@rpm) : 280Nm </h3>
                <h3>Range : 461km </h3>
                <h3>Body Type : SUV </h3>
                 <h2>250 rs <span>/hour</span></h2>
                <a href="../user/login" class="btn">Rent Now</a>
            </div>

            
        </div>
    </section>
    <!--About-->
    <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="img/about.png" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>  We have a wide network of services  which rent cars and bikes for your daily needs.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </section>
    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>Whats Our Customer Say</h1>
            </div>
            <div class="reviews-container">
                <div class="box">
                    <div class="rev-img">
                        <img src="img/rev1.jpg" alt="">
                    </div>
                    <h2>Someone Name</h2>
                    <div class="stars">
                       <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
                        
                    </div>
                    <p>I've been driving my MG ZS EV for several months now, and my satisfaction with it has only grown over time. Not only is it a pleasure to drive, with smooth acceleration and a quiet ride, but it has also exceeded my expectations in terms of range and reliability.</p>
                </div>

                <div class="box">
                    <div class="rev-img">
                        <img src="img/rev2.jpg" alt="">
                    </div>
                    <h2>Someone Name</h2>
                    <div class="stars">
                      <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
                    </div>
                    <p>Mahindra XUV400 EV performance, build quality, and safety (which has 6 airbags) are all excellent. Nexon and other EVs are drawn to it because of its appearance. It's a pretty excellent car from a highly reliable company because of the increase in length (4200mm).</p>
                </div>

                <div class="box">
                    <div class="rev-img">
                        <img src="img/rev3.jpg" alt="">
                    </div>
                    <h2>Someone Name</h2>
                    <div class="stars">
                       <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
					  
                    </div>
                    <p>Tata Tiago EV car in the Indian market comes with the lowest price in ev cars. This car can run 250-315 km on one charge. It takes 2.5 hrs to fully charge. This car has a battery of 19.2-24 kWh. This car scored 4 stars in the NCAP crash test.</p>
                </div>

                <div class="box">
                    <div class="rev-img">
                        <img src="img/rev2.jpg" alt="">
                    </div>
                    <h2>Someone Name</h2>
                    <div class="stars">
                        <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
					   <span class="fa fa-star checked"></span>
                    </div>
                    <p>Kia EV6 gives an impressive range, performance, and design features. The estimated range of up to 300 miles on a single charge would provide ample opportunity for both short and long-distance travel, without the need to stop for frequent charging.</p>
                </div>
            </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $('#showMenu').click(function () {
    if ($('.navbar').is(':hidden')) {
        $('.navbar').show();
    } else {
        $('.navbar').hide();
    }
  }); 
});
</script>
</body>
</html>
