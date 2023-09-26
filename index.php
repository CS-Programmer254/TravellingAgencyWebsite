
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container">
    <section class="header ">
        <div class="navbar">
            <ul class="navbar-list">
                <li><a href="#top-destinations">Top Destinations</a></li>
                <li><a href="#services">Our Services</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
            </ul>
        </div>
    </section>
    <section class="banner">
        <div class="banner-left">
            <div class="banner-title">
            <h2 style="color:black">Explore</h2>
            <h2>Destinations in Kenya</h2>
            </div>
            <div class="search-destination">
                <input type="text" placeholder="Search Destinations">
                <button>Find Now</button>
            </div>

        </div>
        <div class="banner-right">
            <div>
                <div class="open-button" onclick="openForm()">Book Now</div>
                <div class="form-popup" id="myForm">
                     <form action="/action_page.php" class="form-container">
                         <div class="form-header">
                            <div class="btn-close-div">
                                 <button type="button" class="btn-close" onclick="closeForm()">X</button>
                                 </div>
                                    <h2 class="form-heading">BOOKING DETAILS</h2>
                                </div>
                                 <input type="text" placeholder="Enter FirstName" name="firstName" required>
                                 <input type="text" placeholder="Enter LastName" name="lastName" required>
                                 <input type="text" placeholder="Enter Email Address" name="email" required>
                                 <input type="text" placeholder="Enter Telphone Number" name="email" required>
                                 <select name="select-destination-area" id="select-destination-area ">
                                    <option selected value="">Select Destination Area</option>
                                    <option value="Mombasa">Mombasa</option>
                                    <option value="Kisumu">Kisumu</option>
                                    <option value="Nakuru">Nakuru</option>
                                    <option value="Kilifi">Kilifi</option>
                                    <option value="Lamu">Lamu</option>
                                    <option value="Lamu">Machakos</option>
  
                                 </select>
                                 <select name="select-service-type" id="select-service-type">
                                    <option selected value="">Select Type Of service</option>
                                    <option value="Flight Booking">Flight Booking</option>
                                    <option value="Hotel Booking">Hotel Booking</option>
                                    <option value="Car Hire">Car Hire</option>
                                    <option value="Conferences">Conferences</option>
                                    <option value="Honey Moon">Honey Moon</option>
                                    <option value="Wedding Venues">Wedding Venues</option>
  
                                 </select>
                                
                                
                                 <textarea name="message" id="" cols="28" rows="2" placeholder="Message Description"></textarea>
                                 <div>
                                  <button type="submit" class="btn">BOOK NOW</button>
                                  <button type="reset" class="btn">CLEAR</button>
                                 </div>
                                </form>
                            </div>            
            </div>
        </div>

    </section>
   
   <section id="services" class="services">
    <div>
        <h2>Our Services</h2>
        <span id="icons"class="material-symbols-outlined">handyman</span>
        <h3>Top Values For You</h3>
        <div class="service-boxes">
       
           
            <div class="service-box">
               <div class="span-group">
               <span class="material-symbols-outlined">book_online</span>
                <span>Flight Reservation</span>
               </div>
                <span><p>Lorem ipsum, dolor sit ame</p></span>
            </div>
           
            <div class="service-box">
                <div class="span-group">
                <span class="material-symbols-outlined">hotel</span>
                <span>Hotel Booking</span>
                </div>
              
                <span><p>Lorem ipsum, dolor sit ame</p></span>
            </div>
            <div class="service-box">
                <div class="span-group">
                <span class="material-symbols-outlined">directions_car</span>
             
                <span>Car Hire</span>
                </div>
         
                <span><p>Lorem ipsum, dolor sit ame</p></span>
            </div>
        </div>
    </div>

   </section>

   <section class="destinations">
    <h2 id="top-destinations">Explore Top Destination</h2>
    <span id="icons"class="material-symbols-outlined">travel</span>
    <div class="destination-category">
        <button>Mombasa</button>
        <button>Kisumu</button>
        <button>Nairobi</button>
    </div>
    <div class="destination-boxes">
        <div class="destination-box">
            <span class="destination-img"><img src="./images/diani.jpg"/></span>
            <span class="destination-description">
                <h3>Diani Beach</h3>
            </span>
        </div>
        <div class="destination-box">
        <span class="destination-img"><img src="./images/ciala2.jpg"/></span>
            <span class="destination-description">
                <h3>Ciala Resort</h3>
            </span>
        </div>
        <div class="destination-box">
        <span class="destination-img"><img src="./images/diani.jpg"/></span>
            <span class="destination-description">
                <h3>Watamu Hills Park</h3>
            </span>
         </div>
    </div>

   </section>
   <section id="testimonials" class="testimonials">
    <h3>What Our Clients Say</h3>
    <h2>Testimonials</h2>

    <div class="testimonials-box">
        <div class="general-testimonials">
            <div class="testimonial-box">
            <span><img class="testimonial-image" src="./images/jao.png"/></span>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quas amet, veniam nesciunt quidem beatae doloremque minima 
                quis asperiores consectetur autem! Placeat repellat,
                 blanditiis ipsam fuga aut adipisci sequi veniam sunt?</div>
                 <div class="testimonial-box">
            <span><img class="testimonial-image" src="./images/jao.png"/></span>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quas amet, veniam nesciunt quidem beatae doloremque minima 
                quis asperiores consectetur autem! Placeat repellat,
                 blanditiis ipsam fuga aut adipisci sequi veniam sunt?</div>
               
            <div class="testimonial-box">
            <span><img class="testimonial-image" src="./images/jao.png"/></span>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quas amet, veniam nesciunt quidem beatae doloremque minima 
                quis asperiores consectetur autem! Placeat repellat,
                 blanditiis ipsam fuga aut adipisci sequi veniam sunt?
            </div>
        </div>
        <div class="testimonial-of-the-day-box">
        <div class="testimonial-of-the-day">
            <h3>Testimonial of the day</h3>
            <span><img class="testimonial-image-of-the-day" src="./images/jao.png"/></span>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quas amet, veniam nesciunt quidem beatae doloremque minima 
                quis asperiores consectetur autem! Placeat repellat,
                 blanditiis ipsam fuga aut adipisci sequi veniam sunt?
            </div>

        </div>
        
    </div>
    <div class="send-mail-box">
        <div>
            <div class="send-mail-box-banner">
                <span><h2>Explore with Magical Kenya</h2></span>
                <h5>Home of WilderBeests Migration</h5>
             </div>
        </div>
        <div>
            <h3>Subscribe to Our News Letter</h3>
            <div class="mail-input-box">
            <input type="text" placeholder="Enter Email Address" name="subcribedEmail">
            <button class="send-email-btn">send</button>
            </div>
        </div>
    </div>

   </section>
</hr>
   <section class="footer-section">
   
   <footer class="footer-main-div">
   <div class="footer-div-1">
    <div>
        <h3>Social Media</h3>
        
        <div id="social-icons-div" class="footer-list">

             <div><span><img class="social-icons" src="./images/facebook_icon.png"/></span></div>
            <div><span><img class="social-icons" src="./images/twitter_icon.png"/></span></div>
            <div><span><img class="social-icons" src="./images/instagram_icon2.png"/></span></div>
        </div>

       
     </div> 
    <div>
        <h3>Why Choose Us</h3>
        <div>
        <div class="footer-list">
            <div><span>Get Discounted Accomodation</span></div>
            <div><span>Convienient Flight Booking</span></div>
            <div><span>Car Hire</span></div>
            <div><span>Holiday Packages</span></div>
           
        </div>
       </div>
    </div> 
    <div>
        <h3 id="contact">Contact Us</h3>
        <div class="footer-list">
            <div><span>Located:</span><span>Tom Mboya Estate,Off Jogoo Road</span></div>
            <div><span>Email:</span><span>contactcentre@gmail.com</span></div>
            <div><span>Tel:</span><span>+254769860886</span></div>
            <div><span>Postal Address:</span><span>P.O.Box 847-401123</span></div>
           
        </div>
    </div>

    </div>
    <div class="footer-div-2">
    <div class="copy-right"><h6>&copy;Ladel IT Consultants</h6></div>

    </div>


    
   </footer>
  
   </section>

    </div>
    <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>
</body>
</html>