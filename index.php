<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="ninja-slider.css" rel="stylesheet" />
    <script src="ninja-slider.js" type="text/javascript"></script>
  <link rel="manifest" href="/sample-capstone/json/manifest.json">
  <title>Hall's Rock Yard</title>
  <style>
    @font-face {
      font-family: 'babylon5';
      src: url('text_fonts/B5______.TTF')
    }
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .hero-image {
      background: url("sample-capstone/images/bg.jpg") no-repeat center;
      background-size: cover;
      height: 500px;
      position: relative;
    }

    .hero-text {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }
  
    
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#766258;
}

li {
  float: left;
  width:25%; /* approximate equal length of each category */
  text-align: center;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #A88C7D;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #D3D3D3;}

.dropdown:hover .dropdown-content {
  display: block;
}   
.centeralign {
  text-align: center;
}

p {
  padding-left: 50pt;
  padding-right: 50pt;
  padding-top: 20pt;
  text-indent: 20px;
  text-align:left;
  line-height: 1.5;
}
    
.thumb {
    max-height: 171px;
    border: solid 6px rgba(5, 5, 5, 0.8);
}

.lightbox {
    position: fixed;
    z-index: 999;
    height: 0;
    width: 0;
    text-align: center;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    opacity: 0;
}

.lightbox img {
    max-width: 90%;
    max-height: 80%;
    margin-top: 2%;
    opacity: 0;
}

.lightbox:target {
    /** Remove default browser outline */
    outline: none;

    width: 100%;
    height: 100%;
    opacity: 1 !important;
    
}

.lightbox:target img {
    border: solid 17px rgba(77, 77, 77, 0.8);
    opacity: 1;
    webkit-transition: opacity 0.6s;
    transition: opacity 0.6s;
}

.light-btn {
    color: #fafafa;
    background-color: #333;
    border: solid 3px #777;
    padding: 5px 15px;
    border-radius: 1px;
    text-decoration: none;
    cursor: pointer;
    vertical-align: middle;
    position: absolute;
    top: 45%;
    z-index: 99;
}

.light-btn:hover {
    background-color: #111;
}

.btn-prev {
    left: 7%;
}

.btn-next {
    right: 7%;
}

.btn-close {
    position: absolute;
    right: 2%;
    top: 2%;
    color: #fafafa;
    background-color: #92001d;
    border: solid 5px #ef4036;
    padding: 10px 15px;
    border-radius: 1px;
    text-decoration: none;
}

.btn-close:hover {
    background-color: #740404;
}
#myFooter {
  background-color: #38444d;
}
#footHeader {
  font-size: 30px;
  color: white;
  text-shadow: -1px 1px 2px #000, 1px 2px 6px #000, 1px -1px 0 #000, -1px -1px 0 #000;
}
.h4{
  text-align:left;
  padding-left:20px;
}
    @media screen and (max-width: 600px;) {
      .h4 {
        display: inline-block;  <p><center> Monday - Friday: 8am-5pm <br> Saturday: 8am-12pm<br> Sunday: Closed <span style="margin-left: 25em;"> (913) 245-4089  </span> <span style="margin-left:20em;"> 607 Mulberry Ave. Osawatomie, KS </span></center> </p>
      }
    }
    h5{
      text-align:left;
      padding-left:20px;
    }

     

iframe.google-map {
     width: 100%;
     
}

    .fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  boarder-radius: 70%;
}
    .fa:hover {
      opacity: 0.9;
    }
    .fa-facebook {
  background: #3B5998;
  color: white;
}
        .boxed {
          border: 5px solid #54463F;
          padding-bottom: 10px;
        }
  div.info{
    background-color: #DCD1CB;
    padding:20px;
  }
        @media screen and (min-width: 767px) {
          div.info{
            font_size: 35px;
            font-stretch: expanded;
          }
        }
        @media screen and (max-width: 766px) {
          div.info{
            font-size: 30px;\
            font-stretch: expanded;
          }
        }
  
.flex-parent-element {
  display: flex;
  width: 80%;
}

.flex-child-element {
  flex: 1;
  border: 3px solid #433832;
  margin: 10px;
  text-align: center;
}

.flex-child-element:first-child {
  margin-right: 20px;
  text-align: center;
}

        * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
  </style>

</head>

<body style="background-color: #DCD1CB;">
<footer id = "myFooter"></footer>
  
  <div class="hero-image">
    <div class="hero-text">
      
      <h1 style="font-family:babylon5; font-size:70px; color:whitesmoke; -webkit-text-stroke: 1px black; text-shadow: -1px 1px 2px #000, 1px 2px 6px #000, 1px -1px 0 #000, -1px -1px 0 #000;">Hall's Bobcat Service </h1>
      
      <h2 style="font-size: 30 px; color: white; -webkit-text-stroke: .5px black; text-shadow: -1px 1px 2px #000, 1px 2px 6px #000, 1px -1px 0 #000, -1px -1px 0 #000;">Welcomes you to <br>The Rock Yard</h2>
      
      <h3 style="font-size: 25px; color: white; -webkit-text-stroke: .5px black; text-shadow: -1px 1px 2px #000, 1px 2px 6px #000, 1px -1px 0 #000, -1px -1px 0 #000;" >est. 1998</h3>
      
    </div>
  </div>
  
  <ul>
    <li><a class="active" href="index.html"style="background-color: #54463F;"> Home</a></li>
    <li><a href="sample-capstone/html/about.html"> About Us </a></li>
    
    <li class="dropdown">
    <a href="sample-capstone/html/estimate.html" class="dropbtn">Estimating Tools</a>
    <div class="dropdown-content">
      <a href="sample-capstone/html/calculator.html">Materials Calculator</a>
      <a href="sample-capstone/html/zones.html">Delivery Zones</a>
    </div>
  </li>

    <li><a href="sample-capstone/html/products.html"> Our Products </a></li>
    <li><a href="sample-capstone/html/schedule.html"> Schedule Appointment</a></li>
    <li><a href="sample-capstone/html/services.html"> Services </a></li>
    <li><a href="sample-capstone/html/contact.html"> Contact Us </a></li>
    <li><a href ="sample-capstone/html/invoice.html"> Invoice</a></li>
   

  </ul>

<div ALIGN="center">
  <div class="info"> 
    <div class="flex-parent-element">
      <div class="flex-child-element magenta"> <h5><i>Office Hours: <br></br></i>Monday - Friday: 8am-5pm <br> Saturday: 8am-12pm <br> Sunday: Closed <br></h5>
      </div>
     <div class="flex-child-element green"> <h5> <i>Phone: <br> </i>(913) 245-4089 <br></br> <i>Office Address: <br></i> 607 Mulberry Ave. Osawatomie, KS</h5>
     </div>
    </div>
  </div>

  
    <h4 style="font-size: 25px; text-align: center;"> Come See Us!</h4>
<div class="boxed">
<p style="text-align: center;">
 
If you are looking for high quality and personal service, you have come to the right place. At Hall's Bobcat Service, we give you the attention and personal service you can come to expect and enjoy.<br>

We are located in Miami County Kansas and provide general contracting, excavation services for residential and commercial properties and installation of septic systems. <br>

We also own The Rock Yard for all your landscaping needs. Come by, check us out and let us put our experience to work for you!<br>

</p>
</div>
</div>
 <HR style="background-color: #766258; " NOSHADE SIZE = 6>
  <h2 style="text-align: center;">Photo Gallery</h2>
  <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 12</div>
    <img src="sample-capstone/images/Gal1.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 12</div>
    <img src="sample-capstone/images/Gal2.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 12</div>
    <img src="sample-capstone/images/Gal3.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 12</div>
    <img src="sample-capstone/images/Gal4.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 12</div>
    <img src="sample-capstone/images/Gal5.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">6 / 12</div>
    <img src="sample-capstone/images/Gal6.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">7 / 12</div>
    <img src="sample-capstone/images/Gal7.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">8 / 12</div>
    <img src="sample-capstone/images/Gal8.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">9 / 12</div>
    <img src="sample-capstone/images/Gal9.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">10 / 12</div>
    <img src="sample-capstone/images/Gal10.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">11 / 12</div>
    <img src="sample-capstone/images/Gal11.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">12 / 12</div>
    <img src="sample-capstone/images/Gal12.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>
  <span class="dot" onclick="currentSlide(10)"></span>
  <span class="dot" onclick="currentSlide(11)"></span>
  <span class="dot" onclick="currentSlide(12)"></span>
</div>

  <script>
    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
  </script>
    
 <HR style="background-color: #766258; " NOSHADE SIZE = 6>    
  <footer class="page-footer">
      <div class="container">
            <h1 id = "footHeader" style = "margin-left: 15px;">Customer satisfaction is our top priority</h5>
            <p class="grey-text text-lighten-4";>" I have been very satisfied with all of the work Hall's Bobcat has done for us!" - Don d'Augereau, long time customer of Hall's Bobcat Service. <br>
              
            <br>"Great guys, easy to talk to and very knowledgeable. Vast variety of landscaping options with good prices." Dustin Lewis <br>

  <br>"We had the best experience working with the Hall boys! They are very professional, easy to work with, very creative and all around great guys! They did exceptional work for us!" Joslin Worrell Beyer <br> 
              
            <br>"Halls Bobcat service went above any beyond our expectations of putting in a garage pad site and being sure that the drainage issues we had were addressed. We are extremely pleased with the work that was done on our driveway, and everything that was done exactly what we talked about. I will definitely refer friends and family to you and use you again for any services that I need in the future." Cliff and Sandra Lucas<br
</p>
  <div class = "google-maps"; text-align:center >
    <p style="text-align: center;"> <iframe class= "google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d400296.954459377!2d-95.064025!3d38.3878505!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c753bb8bb09a95%3A0xb6b69ae9454c84a6!2sHalls%20Bobcat%20Service!5e0!3m2!1sen!2sus!4v1679426276307!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
  </div>
        <h4 style ="font-size: 20px; text-align: center;" > We service the communities inside the square.</h4>
          </div>
          <div class="col l4 offset-l2 s12">
            <h2 style = "padding-left: 20px;"> Other Links</h2>
            <ul>
              <li><a class="grey-text text-lighten-6" href="https://www.facebook.com/profile.php?id=100057816692899">Follow us on Facebook</a> </li>
            <li><a href="https://www.facebook.com/profile.php?id=100057816692899" class="fa fa-facebook"></a></li>
            
            
            </ul>
          </div>
        </div>
      </div>
    
    </footer>
   <script>
 if (!navigator.serviceWorker.controller) {
     navigator.serviceWorker.register("/sw.js").then(function(reg) {
         console.log("Service worker has been registered for scope: " + reg.scope);
     });
 }
</script>
</body>

</html>