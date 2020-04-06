<?php session_start();?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Total zw Fuel locater</title>
        <link rel="stylesheet" href="./css/style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        
        <div class="pic1">
            <div class="menu">
                <ul>
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn"> <i class="fas fa-bars"></i></label>
                    <li class="logo"><img src="./images/LOGO.PNG"></li>
                    <li class="active"><a href="#" class="signup-btn">Home</a></li>
                    <li><a href="#" class="signup-btn">Stations</a></li>
                    <li><a href="#" class="signup-btn">About Us</a></li>
                    <li><a href="#" class="signup-btn" target="blank">Contact</a></li>
                    <li><a href="signin.php"  class="signup-btn" target="blank"><span>Sign Up/ Sign In</span></a></li>

                </ul>
            </div>
            <div class="banner-text">
                <span class="border">
               WELCOME TO FUEL LOCATER  
                <?php echo $_SESSION['username']?>
                </span>
                
            </div>
        </div> 
        <section class="section section-light">
            <img src="./images/icons8-petrol-50.png" alt="">
            <h2>Fuel locater</h2>
            <p>Hello, Hie, Bonjour, Nihao, Makadini, Salibonani. Total Zimbabwe greets you. 
                This our fuel locater System that tell you where you can access our services at your convinience</p>
     
        </section>
        <div class="pic2">
         <div class="banner-text">
             <span class="border trans">
              sevices
             </span>
         </div>
     </div> 
     
     <section class="section section-dark">
     <div class="icon"><img src="./images/icons8-gas-station-100.png" alt="Station-icon"></div>   
        <h2>Stations</h2>
         <div class="parent">
             <div class="kid1">Chinhoi Strt</div>
             <div class="kid2">Harare Drive</div>
             <div class="kid3">Msasa</div>
             <div class="kid4">Westgate</div>
         </div>
     
     </section> 
     </div> 
    </section> 
</div> 
<section class="section section-dark-1">
    <img src="./images/typing.png" alt="messanger-icon">
    <h2>Send enquiry to:</h2>
    <div class="contact">
       <form id="contact-form" method="post" action="contact.php">
           <input name="name" type="text" class="form-control" placeholder="John Doe" required>
               <br>
               <input name="email" type="email" class="form-control" placeholder="johndoe@gmail.com" required>
               <br>   
               <textarea name="message" class="form-control" cols="30" rows="4" placeholder="Your Message" required></textarea>  <br>
               <input type="submit" name ="submit" class="form-control submit" value="Send Enquiry">        
       </form>   
    </div>
</section>
    
     <div class="pic1">
         <div class="banner-text">
             <span class="border">
              FUEL LOCATER
             </span>
             <p class="copy"> COPYWRITE<sup>&copy</sup> 2019-2020</p>
         </div>
     </div> 
     </body>
     </html>