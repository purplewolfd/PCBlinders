<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCBlinders | Online shopping exclusively for computer geeks.</title>
    <link rel="icon" href="./assets/loadbg.png" type="image/icon type">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
</head>
<body>


  <div class="spinner-body" id="spinner">
    <div class="spinner">
     <div class="loader l1"></div>
     <div class="loader l2"></div>
   </div>
 </div>


    <!--NAVBAR-->
    
    <?php
      include_once("includes/header.php");
    ?>  

    

    <!--HERO-->
    <section id="hero" class="hero min-vh-100 d-grid align-content-center py-5" data-aos="zoom-out" data-aos-duration="4000">
        <div class="container col-xxl-8 px-4 py-5" bis_skin_checked="1">
        <marquee behavior="" direction="" class="h3 text-white"><a href="prebuilt-pc.php" target="_blank">Flash sale is now! Grab your offer now!</marquee>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5" bis_skin_checked="1">
              <div class="col-10 col-sm-8 col-lg-6" bis_skin_checked="1">
                <img src="assets/hero-ad.jpg" data-aos="fade-left" data-aos-duration="3000" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
              </div>
              <div class="col-lg-6" data-aos="zoom-in" bis_skin_checked="1">
                <h1 class="display-1 fw-bold text-body-emphasis lh-5 mb-3">The one stop online shop for all your PC needs!</h1>
                <p class="lead">Welcome to PCBlinders, your ultimate destination for all things PC-related! At PCBlinders, we're dedicated to providing you with top-notch computer hardware, and accessories to enhance your digital experience.Join us as we navigate the world of technology with clarity and precision, only at PCBlinders.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start" bis_skin_checked="1">
                 <a href="#" data-aos="fade-up" data-aos-duration="2000"><button type="button" class="btn bg01 btn-lg px-4 me-md-2">View Pre-Built PC's</button></a>
                </div>
              </div>
            </div>
          </div>
    </section>

    <!--ABOUT US-->

    <div class="about bg01 p-4">
        <h1 class="text-center mb-3 fw-bold" data-aos="fade-right" data-aos-duration="2000">About Us</h1>
        <p class="lead text-center container py-4" data-aos="fade-up" data-aos-duration="3000">
          At PCBlinders, we value transparency, reliability, and innovation. We constantly update our product offerings to stay ahead of the technological curve, ensuring that you have access to the latest advancements in the world of computing. Plus, our competitive prices make high-performance computing accessible to everyone.

Thank you for choosing PCBlinders as your go-to destination for PCs and laptops. Join us on this exciting journey of discovery, where technology meets convenience. Shop with confidence, and let PCBlinders be your trusted partner in the ever-evolving world of computing.
        </p>
    </div>

    <!--FEATURES-->

    <div class="feature p-4">
        <h1 class="text-center mb-3 text-white fw-bold" data-aos="fade-right" data-aos-duration="2000">Our Features</h1>



        <!-- SWIPER -->

        <div class="swiper mySwiper p-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                        <div class="project p-4 border-custom">
                            <img src="assets/feat-delivery.jpg" class="img-fluid" alt="">
                            <div class="overlay">
                                <h4 class="h5 text-white display-5 fw-bold">Free Delivery across India</h4>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                        <div class="project p-4 border-custom">
                            <img src="assets/feat-offer.jpg" class="img-fluid" alt="">
                            <div class="overlay">
                                <h4 class="h5 text-white display-5 fw-bold">Exciting Offers Everyday!</h4>
                            </div>  
                        </div>
                    </div>

                    <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                        <div class="project p-4 border-custom">
                            <img src="assets/feat-support.jpg" class="img-fluid" alt="">
                            <div class="overlay">
                                <h4 class="h5 text-white display-5 fw-bold">24/7 Customer Support</h4>
                                <!-- <p class="mb-0">Grand Theft Auto V is a 2013 action-adventure game developed by Studio M and published by Rockstar Games. It is the seventh main entry in the Grand Theft Auto series, following 2008's Grand Theft Auto IV, and the fifteenth instalment overall.</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                        <div class="project p-4 border-custom">
                            <img src="assets/feat-technician.jpg" class="img-fluid" alt="">
                            <div class="overlay">
                                <h4 class="h5 text-white display-5 fw-bold">Skilled Technicians</h4>
                                <!-- <p class="mb-0">Alan Wake is an action-adventure game developed by Studio M and published by Microsoft Game Studios.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
    </div>

    <!-- <div class="feature p-4">
        <h1 class="text-center mb-3 text-white fw-bold" data-aos="fade-right" data-aos-duration="2000">Our Features</h1>
        
        <div class="swiper mySwiper p-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                    <div class="project p-4 ">
                        <img src="assets/feat-delivery.jpg" class="img-fluid" alt="">
                        <div class="overlay">
                            <h4 class="h5 bg01 p-3">Free Delivery</h4>
                            <p class="mb-0 bg02">Free home delivery within India for selected products.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                    <div class="project p-4 ">
                        <img src="assets/feat-technician.jpg" class="img-fluid" alt="">
                        <div class="overlay">
                            <h4 class="h5 bg01 p-3">Skilled Technicians</h4>
                            <p class="mb-0 bg02">High SKilled Engineers with tons of experience.</p>
                        </div>  
                    </div>
                </div>

                <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                    <div class="project p-4 ">
                        <img src="assets/feat-support.jpg" class="img-fluid" alt="">
                        <div class="overlay">
                            <h4 class="h5 bg01 p-3">Seamless Support</h4>
                            <p class="mb-0 bg02">24*7 Online support to resolve your issues.</p>
                        </div>  
                    </div>
                </div>

                <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                    <div class="project p-4 ">
                        <img src="assets/feat-offer.jpg" class="img-fluid" alt="">
                        <div class="overlay">
                            <h4 class="h5 bg01 p-3">Exciting Offers</h4>
                            <p class="mb-0 bg02">High SKilled Engineers with tons of experience.</p>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div> -->
    
    <!--PRE-BUILT PC-->

    <div class="prepc bg01 p-4">
        <h1 class="text-center mb-3 fw-bold" data-aos="fade-right" data-aos-duration="3000">Pre-Built PC's</h1>

        <!--CARSOUL-->
        <a href="prebuilt-pc.php" target="_blank">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="assets/caro-pc01.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/car-pc02.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/caro-pc03.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        </a>   
    </div>

    <!--LAPTOPS-->

    <div class="laps p-4">
      <h1 class="text-center mb-3 fw-bold" data-aos="fade-right" data-aos-duration="3000">Laptops</h1>

      <a href="https://www.google.com" target="_blank">
      <div class="lap-banner">
        <h1 class="text-dark">BANNER CONTAINING LAPTOP DETAILS</h1>
      </div>
      </a>
    </div>

    <!--ACCESS-->

    <div class="access bg01 p-4">
      <h1 class="text-center mb-3 fw-bold" data-aos="fade-right" data-aos-duration="3000">Accessories</h1>

      <!--SWIPER-->
      <!-- FIX RESPONSIVENESS -->
      <div class="swiper mySwiper p-5">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                <a class="text text-decoration-none" href="">
                <div class="review p-4 border-custom text-center">
                    <img src="assets/comp.png">
                    <h5 class="my-3">Components</h5>
                    <p class="mb-0 text-primary">upto 15% off. on AMD CPU's</p>
                </div>
                </a>
            </div>

            <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                <a href="" class="text text-decoration-none">
                <div class="review p-4 border-custom text-center">
                    <img src="assets/control.png" alt="">
                    <h5 class="my-3">Controllers</h5>
                    <p class="mb-0 text-primary">New arrival : PS5 Shock Controllers</p>
                </div>
                </a>
            </div>

            <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                <a href="" class="text text-decoration-none">
                <div class="review p-4 border-custom text-center">
                    <img src="assets/head.png" alt="">
                    <h5 class="my-3">Headphones</h5>
                    <p class="mb-0 text-primary">Flat 10% off. on JBL Headphones.</p>
                </div>
                </a>
            </div>

            <div class="swiper-slide" data-aos="fade-out" data-aos-duration="2000">
                <a href="" class="text text-decoration-none">
                <div class="review p-4  text-center">
                    <img src="assets/peri.png" alt="">
                    <h5 class="my-3">Peripherals</h5>
                    <p class="mb-0 text-primary">New Mechanical keyboards!</p>
                </div>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    </div>

    <div class="text-left w-100 min-vh-50 p-4 bg02"><h1 data-aos="flip-up" data-aos-duration="500">Having any queries?</h1> <h2 data-aos="fade-right" data-aos-duration="3000">Feel free to write it down!</h2></div>
    
    <form class="bg01 p-4 py-4" action="admin/add-customer-query.php" method="post">
      <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="name" class="form-control" id="exampleFormControlInput1" name="customer_name"  placeholder="Name">
      </div>

      <div class="form-group py-4">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="customer_mail" placeholder="name@example.com">
      </div>


      <div class="form-group py-4">
        <label for="exampleFormControlTextarea1">Queries</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="customer_query" rows="3"></textarea>
      </div>

      <input class="btn bg02 p-4 w-100" type="submit" name="add_query"></input>
    </form>



    <div class="cart-float-btn">
      <div class="btn">
        CART 
      </div>
    </div>

    

    <footer class="fw-bold text-center bg02 text-red">Designed and Developed by <span class="text-black" ><a href="https://linkedin.com/in/matheshkumarsj">Mathesh Kumar</a></span>


    </footer>

    
    <script src="./js/app.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        AOS.init();


        document.onreadystatechange = function() {
          if (document.readyState !== "complete") {
              document.querySelector("body").style.visibility = "hidden";
              document.querySelector("#spinner").style.visibility = "visible";
          } else {
              document.querySelector("#spinner").style.display = "none";
              document.querySelector("body").style.visibility = "visible";
          }
      };
    </script>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
      // Reset any previous error messages
      resetErrors();

      // Validate the name field
      var nameInput = form.querySelector('input[name="customer_name"]');
      if (!nameInput.value.trim()) {
        displayError(nameInput, "Please enter a valid name");
        event.preventDefault();
      }

      // Validate the email field
      var emailInput = form.querySelector('input[name="customer_mail"]');
      if (!isValidEmail(emailInput.value.trim())) {
        displayError(emailInput, "Please enter a valid email address");
        event.preventDefault();
      }

      // Validate the query field
      var queryTextarea = form.querySelector('textarea[name="customer_query"]');
      if (!queryTextarea.value.trim()) {
        displayError(queryTextarea, "Please enter a query");
        event.preventDefault();
      }
    });

    // Add real-time validation on input
    form.addEventListener("input", function (event) {
      var target = event.target;

      if (target.tagName === "INPUT" || target.tagName === "TEXTAREA") {
        resetErrors();

        // Validate the name field as the user types
        if (target.name === "customer_name" && !target.value.trim()) {
          displayError(target, "Please enter a valid name");
        }

        // Validate the email field as the user types
        if (target.name === "customer_mail" && !isValidEmail(target.value.trim())) {
          displayError(target, "Please enter a valid email address");
        }

        // Validate the query field as the user types
        if (target.name === "customer_query" && !target.value.trim()) {
          displayError(target, "Please enter a query");
        }
      }
    });

    function isValidEmail(email) {
      // Basic email validation using a regular expression
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }

    function displayError(inputElement, errorMessage) {
      var errorDiv = document.createElement("div");
      errorDiv.className = "text-danger";
      errorDiv.textContent = errorMessage;

      inputElement.parentNode.appendChild(errorDiv);
    }

    function resetErrors() {
      var errorMessages = form.querySelectorAll(".text-danger");
      errorMessages.forEach(function (error) {
        error.parentNode.removeChild(error);
      });
    }
  });
</script>

<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween : 24,
    speed: 1000,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 2,
        },

    }
  });
</script>

</body>
</html>



