<?php 
session_start();
include 'db.php';
?>

<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>The Unique Store </title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

<style>

#slide{
	width:96%;
	}
	
* {
	box-sizing: border-box
}

.mySlides {
	display: none
}

.slideshow-container {
	width: 1200px;
	position: relative;
	margin: -10px;
	margin-left:-35px;

}

.text {
	color: #f2f2f2;
	font-size: 15px;
	padding: 8px 12px;
	position: absolute;
	bottom: 8px;
	width: 100%;
	text-align: center;
}

.dot {
	cursor: pointer;
	height: 13px;
	width: 13px;
	margin: 0 2px;
	background-color: #bbb;
	border-radius: 50%;
	display: inline-block;
	transition: background-color 0.6s ease;
}

/* Fading animation */
.fade {
	-webkit-animation-name: fade;
	-webkit-animation-duration:3s;
	animation-name: fade;
	animation-duration: 3s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
#anant{
	margin-left:0%;
	margin-right:-3%;
	font-size:50px;
	
}
.para p{
	margin-right:24%;
	margin-left:31%;
	
}
	
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

@media screen and (max-width: 600px) {
 .slideshow-container{
	margin-left:90px;
	margin-top:50px;
}
#img1{
	height:200px;
}
#img2{
	height:200px;
}
#img3{
	height:200px;
}
.para p{
	
	margin-right:-2%;
	margin-left:10%;
}
 .para h3{
	 margin-top:20%;
 }
 
}

.para { 
margin-top:-17%;
}

@media screen and (max-width: 600px) {
	.image1{
	width:280px;
	height:500px:
}
 .w3l-new-block-6{
	 margin-top:-30%;
 }
 
 
.para { 
 margin-top:-40%;
}

.a1{
	margin-top:30px;
	margin-left:15px;
}
.b1{
	display:none;
}
.c1{
	display:none;
}
.w3l-banner{
	margin-top:20px;
}

.navbar-toggler{
	margin-left:10px;
	margin-top:20px;
}

}
.w3l-new-block-6{
	margin-top:-50px;
}



#slideshow { 
  margin: -20px auto; 
  position: relative; 
 height:550px; 
 width: 1200px
  padding: 10px; 
  margin-left:-30px;
}

#slideshow > div { 
  position: absolute; 
  top: 10px; 
  left: 10px; 
  right: 10px; 
  bottom: 10px;
 
}
@media screen and (max-width: 600px) {
	#slideshow { 
  margin: 10px auto; 
  position: relative; 
 height:550px; 
 width: 1200px
  padding: 10px; 
  box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}

#slideshow > div { 
  position: absolute; 
  top: 10px; 
  left: 90px; 
  right: 10px; 
  bottom: 10px;
 
}
}
</style>
</head>

<body>
    <!--header-->
   <?php include 'nav.php';?>
    <!--//header-->
    <!-- banner section -->
    <section id="home" class="w3l-banner py-md-5 pt-md-0 pt-sm-5 pt-4">
        <div class="container py-lg-5 py-md-4 pt-md-0 pt-sm-1 mt-lg-0 mt-5">
            <div class="row align-items-center py-lg-5 py-md-5 mt-4">
                <div class="banner-image-w3 text-lg-center">
				<div id="slideshow">
  <div>
    <img src="assets/images/Chaukat Homepage Banner.webp" style="height:550px; width: 1200px;
	position: relative;">
  </div>
  <div>
    <img src="assets/images/hbanner2.webp" style="height:550px; width: 1200px;
	position: relative;">
  </div>
  <div>
    <img src="assets/images/hbanner3.webp" style="height:550px; width: 1200px;
	position: relative;">
  </div>
  <div>
    <img src="assets/images/hbanner4.webp" style="height:550px; width: 1200px;
	position: relative;">
  </div>
  <div>
    <img src="assets/images/hbanner5.webp" style="height:550px; width: 1200px;
	position: relative;">
  </div>
 
</div>
			 
				
				
                    <!--<img src="assets/images/banner.png" class="img-fluid" alt="">-->
					<!--<div id="slide">
 <div class="slideshow-container">
    <div class="mySlides fade"> <img src="assets/images/Chaukat Homepage Banner.webp" id="img1" style="height:550px;"> </div>
    <div class="mySlides fade"> <img src="assets/images/hbanner2.webp" id="img2" style="height:550px;"> </div>
    <div class="mySlides fade"> <img src="assets/images/hbanner3.webp" id="img2" style="height:550px;"> </div>
	<div class="mySlides fade"> <img src="assets/images/hbanner4.webp" id="img4" style="height:550px;"> </div>
	<div class="mySlides fade"> <img src="assets/images/hbanner5.webp" id="img5" style="height:550px;"> </div>
    </div>
  <br>
  <div style="text-align:center"> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
   </div>
			 
      </div>-->
  </div>
 </div>
		</div>
    </section>
	<div class="para">
                    <center><h3 class="mb-sm-4 mb-3" id="anant" style="margin-top:130px;">Welcome to The Unique Store !!!</h3></center>
                   <!--<p style="font-size:18px;">Your home is just like a storyboard which you consciously curate by putting together the stories that each and every décor piece has to offer! What  story does your house tell ?</p>-->
                </div><br><br><br>
    <!-- //banner section -->
    <!-- index-section-1 -->
    <section class="w3l-index py-5">
        <div class="container py-md-4 py-3">
            <div class="title-heading-w3 text-center mx-auto">
                <h3 class="title-main"><b>Our Popular Online Products</b></h3>
            </div>
            <div class="row bottom_grids mt-5 pt-lg-3">
			<?php 
					$sql=mysqli_query($conn,"select * from product ORDER BY pid DESC LIMIT 8");
					while($row=mysqli_fetch_array($sql)) {
					?>
                <div class="col-lg-3 col-md-6 px-lg-2">
                    <div class="s-block">
                        <a href="viewall.php" class="d-block">
                            <img src="erp/admin/images/<?php echo $row['image1']; ?>" alt="" class="img-fluid img-responsive" />
                            <div class="p-3">
                             <center><h3 class="mb-2" style="font-size:25px;"><?php echo $row['pname']; ?></h3>
                                <p>&#8377;<?php echo $row['price'];?></p>
								<!--<p><?php /*echo $row['description']; */?></p>--></center>
                            </div>
                        </a>
                    </div>
				</div>
				<?php } ?>
			</div>
			
            <div class="mt-5 mx-auto text-center">
                <a class="btn btn-warning btn-style" style="border-radius: 25px; height: 45px;  width: 150px; text-align:center; font-size:18px;  padding-top: 10px;" href="viewall.php">View All</a>
            </div>
        </div>
    </section>
	
    <!-- //index-section-1 -->
    
    <!-- blog section -->
  <!--  <div class="w3l-new-block-6 py-5">
        <div class="container py-md-4 py-3">
            <div class="title-heading-w3 text-center mx-auto">
                <h3 class="title-main">Our Blog Posts</h3>
                <p class="mt-4 sub-title"></p>
            </div>
            <div class="d-grid mt-5 pt-lg-3">
                <div class="grids5-info">
                  <a href="#blog"><img src="assets/images/banner1.webp" alt="" class="img-fluid" style="height:250px;"/></a>
                    <h4><a href="#blog">Chaukat</a></h4>
                   <ul class=" admin-list">
                       <li><a href="#blog"><span class=" fa fa-user" aria-hidden="true"></span>by
                                Admin</a></li>
                        <li><a href="#blog"><span class=" fa fa-comments-o" aria-hidden="true"></span>9
                                Comments</a></li>
                    </ul>
                    <p>Self Time or Me Time or Alone Time is no new taboo concept in today’s world. Everybody needs a time off to concentrate on the thoughts, feelings and nature to pause and reset our inner self. And we know that you never compromise on your self time. Be it in the early morning, afternoon, evening or at night, we can totally design your ideal self time with our Chaukat for any time of the day.
					 </p>
                </div>
                <div class="grids5-info">
                   <a href="#blog"><img src=" assets/images/banner1.webp" alt="" class="img-fluid" style="height:250px;"/></a>
                    <h4><a href="#blog">THEVA</a></h4>
                    <ul class=" admin-list">
                        <li><a href="#blog"><span class="fa fa-user" aria-hidden="true"></span>by
                                Admin</a></li>
                        <li><a href="#blog"><span class=" fa fa-comments-o" aria-hidden="true"></span>5
                                Comments</a></li>
                    </ul>
                    <p>Remember the royal jewellery set that your Mom gave you on your wedding day saying that the set was passed on to her by her Mother who received it from her Mother? Or even the antique watch that your dad gifted to you on your 18th birthday? Or the whole potli of old coins that your Daadaji (Grandpa) collected over the years and has given them to you? </p>
                </div>
                <div class="grids5-info">
                    <a href="#blog"><img src="assets/images/banner1.webp" alt="" class="img-fluid" style="height:250px;"/></a>
                    <h4><a href="#blog">News Post title</a></h4>
                    <ul class=" admin-list">
                        <li><a href="#blog"><span class=" fa fa-user" aria-hidden="true"></span>by
                                Admin</a></li>
                        <li><a href="#blog"><span class=" fa fa-comments-o" aria-hidden="true"></span>12
                                Comments</a></li>
                    </ul>
                    <p>It is a long established fact that a reader will be distracted by the readable content of
                        a page when looking at its layout</p>
                </div>
				
            </div>
			<div class="mt-5 mx-auto text-center py-2">
                <a class="btn btn-warning btn-style" style="border-radius: 25px; height: 45px;  width: 150px; text-align:center; font-size:18px;  padding-top: 10px;" href="blogs.php">Read More</a>
            </div>
        </div>
    </div>-->
    <!-- //blog section -->
    
    <!-- testimonial section -->
    <div class="w3l-cutomer-main-cont">
        <div class="testimonials text-center py-5">
            <div class="container py-md-5 py-4">
                <div class="title-heading-w3 text-center mx-auto">
                    <h3 class="title-main">Customers Say</h3>
                    <p class="mt-4 sub-title"> What people say about us</p>
                </div>
                <div class="row content-sec mt-md-5 mt-4">
                    <div class="col-lg-4 col-md-6 testi-sections">
                        <div class="testimonials_grid">
						<img src=" assets/images/prodimg1.webp" style="height:200px;" alt="" class="img-fluid" /><br><br>
                            <p class="sub-test"><span class="fa fa-quote-left mr-2" aria-hidden="true"></span> Products that are a stand out! Using them as décor items at home to put vase/ other miscellaneous items is what I have been using it for. 
                            </p>
							
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="assets/images/disp1.webp" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Anju Mehra</h5>
                                    <p>Teacher, Faridabad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 testi-sections">
                        <div class="testimonials_grid">
						<img src=" assets/images/prodimg2.webp"style="height:200px;" alt="" class="img-fluid" /><br><br>
                                                <!-- unique store -->

                            <p class="sub-test"><span class="fa fa-quote-left mr-2" aria-hidden="true"></span> I have taken two products from The Unique Store till now. I am obsessed with their jewellery box. The quality is amazing, products are medium weight. 
                            </p>
							
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="assets/images/disp2.webp" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Hiteshri Patel</h5>
                                    <p>Fashion Stylist, Ahemdabad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 testi-sections">
                        <div class="testimonials_grid">
						<img src=" assets/images/prodimg3.webp" style="height:200px;"alt="" class="img-fluid" /><br><br>
                        <!-- unique store -->
                            <p class="sub-test"><span class="fa fa-quote-left mr-2" aria-hidden="true"></span>Unique Store offers perfect festive gifting elements with ethnic designs to compliment the ambience of the house. 
                            </p><br>
							
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="assets/images/disp3.webp" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Shardul Phansalkar</h5>
                                    <p>Industrial Designer, Ahemdabad</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="mt-5 mx-auto text-center">
                <a class="btn btn-warning btn-style" style="border-radius: 25px; height: 45px;  width: 150px; text-align:center; font-size:18px;  padding-top: 10px;" href="testimonial.php">View All</a>
            </div>
                </div>
            </div>
        </div>
    </div>
	
    <!-- //testimonial section -->
    <!-- newsletter section -->
    <section class="w3l-form-26">
        <div class="form-26-main">
            <div class="container py-md-5">
                <div class="form-inner-cont">
                    <div class="title-heading-w3 text-center mx-auto">
                        							<!-- unique store -->

                        <h3 class="title-main">Subscribe To us !!!</h3>
                    </div>
                    <div class="form-right-inf mt-5">
                        <form action="subscribe.php" method="post" class="signin-form">
                            <div class="forms-gds">
                                <div class="form-input">
                                    <input type="email" name="email" placeholder="Enter your email address" required />
                                </div>
                                <div class="btn btn-style btn-warning button-eff-news" style="border-radius: 25px; height: 55px;  width: 150px; text-align:center; font-size:25px; ">
                  <button class="btn" type="submit" name="subscribe">Subscribe</button>
                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- newsletter image -->
            <div class="png-img-w3ls">
                <img src="assets/images/" alt="" class="img-responsive">
            </div>
            <!-- //newsletter image -->
        </div>
    </section>
    <!-- //newsletter section -->
    <!-- footer -->
   <?php include 'footer.php'; ?>
    <!-- //copyright -->

    <!-- Js scripts -->
    <!-- common jquery plugin -->
   <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->
    <!-- owl carousel for team -->
    <script src="assets/js/owl.carousel.js"></script>
	
	<script>
	
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); 
}

function plusSlides(position) {
    slideIndex +=position;
    if (slideIndex> slides.length) {slideIndex = 1}
    else if(slideIndex<1){slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

function currentSlide(index) {
    if (index> slides.length) {index = 1}
    else if(index<1){index = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index-1].style.display = "block";  
    dots[index-1].className += " active";
}
		
</script>

<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
  .fadeOut(500)
  .next()
  .fadeIn(500)
  .end()
  .appendTo('#slideshow');
}, 3000);

</script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    667: {
                        items: 2,
                        nav: true,
                        margin: 20
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //owl carousel for team -->
    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
	
	<script>
	var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script>
   var pos = 0;
var totalSlides = $('#slider-wrap ul li').length;
var sliderWidth = $('#slider-wrap').width();
$(document).ready(function(){
	$('#slider-wrap ul#slider').width(sliderWidth*totalSlides);
	$('#next').click(function(){
		slideRight();
	});
	$('#previous').click(function(){
		slideLeft();
	});
	var autoSlider = setInterval(slideRight, 3000);
	$.each($('#slider-wrap ul li'), function() { 
	   //set its color
	   var c = $(this).attr("data-color");
	   $(this).css("background",c);
	   var li = document.createElement('li');
	   $('#pagination-wrap ul').append(li);	   
	});
	countSlides();
	pagination();
	$('#slider-wrap').hover(
	  function(){ $(this).addClass('active'); clearInterval(autoSlider); }, 
	  function(){ $(this).removeClass('active'); autoSlider = setInterval(slideRight, 3000); }
	);
});
function slideLeft(){
	pos--;
	if(pos==-1){ pos = totalSlides-1; }
	$('#slider-wrap ul#slider').css('left', -(sliderWidth*pos)); 	
	
	//*> optional
	countSlides();
	pagination();
}
function slideRight(){
	pos++;
	if(pos==totalSlides){ pos = 0; }
	$('#slider-wrap ul#slider').css('left', -(sliderWidth*pos)); 
	
	//*> optional 
	countSlides();
	pagination();
}
function countSlides(){
	$('#counter').html(pos+1 + ' / ' + totalSlides);
}

function pagination(){
	$('#pagination-wrap ul li').removeClass('active');
	$('#pagination-wrap ul li:eq('+pos+')').addClass('active');
}
		
   </script>
	
	
</body>
</html>