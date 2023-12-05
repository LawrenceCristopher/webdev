<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <link rel="stylesheet" href="css/style.css">
          <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
          <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
          <title>5B Printshoppe</title>
          <link rel="icon" href="img/logo.png" type="image">
     </head>

     <style>
          .navbar-custom {
               background: linear-gradient(135deg, #8A2BE2, #4169E1);
          }
     </style>
     <body> <?php require_once 'process.php'; ?>
          <!-- Alert -->
          <?php if(isset($_SESSION['message'])): ?>
           <div class="alert alert-
      <?php echo $_SESSION['msg_type']; ?>" role="alert"> <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?> </div> <?php endif; ?>

          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3 fixed-top">
               <div class="container">
                    <a class="navbar-brand fw-bold" href="#">
                         <img src="img/logo.png" alt="" width="35" height="30" class="d-inline-block align-text-top"> 5B PRINTING </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navmenu">
                         <ul class="navbar-nav ms-auto">
                              <li class="nav-item">
                                   <a href="#Home" class="nav-link text-white fw-bold">Home</a>
                              </li>
                              <li class="nav-item">
                                   <a href="#About" class="nav-link text-white fw-bold">About</a>
                              </li>
                              <li class="nav-item">
                                   <a href="#Services" class="nav-link text-white fw-bold">Services</a>
                              </li>
                              <li class="nav-item">
                                   <a href="#Gallery" class="nav-link text-white fw-bold">Gallery</a>
                              </li>
                              <li class="nav-item">
                                   <a href="#faq" class="nav-link text-white fw-bold">FAQ</a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>

          <!-- Showcase -->
          <section id="Home" class="bg-dark text-light p-5 text-center text-sm-start" style="background-image: url('img/bg.png'); background-size: cover; background-position: center;">
               <div class="container">
                    <div class="d-sm-flex align-items-center justify-content-between">
                         <div>
                              <h1 style="font-size: 4rem;">Where Quality,</h1>
                              <h1>meets <span class="text-info">print</span>
                              </h1>
                              <h1>your story, our canvas</h1>
                              <br>
                              <br>
                              <a href="#contact-section" class="btn btn-primary btn-lg" style="font-weight: bold;">Contact Us</a>
                         </div>
                         <img class="img-fluid w-50 d-none d-sm-block" src="img/icon.png" alt="">
                    </div>
               </div>
          </section>
          <br>

          <!-- About -->
          <section id="About" class="p-5 text-center">
               <div class="container">
                    <div class="row align-items-center justify-content-between">
                         <div class="col-md">
                              <img src="img/icon3.png" class="img-fluid" alt="" />
                         </div>
                         <div class="col-md p-5">
                              <h2>About</h2>
                              <br>
                              <h5> "Welcome to 5B Printing, where precision meets creativity in the world of printing! We take pride in being your one-stop destination for high-quality printing solutions tailored to your unique needs. With state-of-the-art technology and a commitment to excellence, we offer a diverse range of printing services, including offset and digital printing, large format printing, and customized solutions for businesses of all sizes. <br> At 5B Printing, we understand the importance of visual impact. Our team of skilled professionals combines artistic flair with technical expertise to bring your ideas to life on paper. Whether you need eye-catching marketing materials, stunning business collateral, or personalized stationery, we have the tools and expertise to make it happen. </h5>
                         </div>
                    </div>
               </div>
          </section>
          <br>

          <!-- Services -->
          <section id="Services" class="p-5 bg-light text-dark">
               <div class="container text-center">
                    <h2 class="mt-4 mb-4">Our Services</h2>
                    <br>
                    <div class="row">
                         <!-- Card 1 -->
                         <div class="col-md-3">
                              <div class="card text-center bg-success text-light">
                                   <div class="card-body">
                                        <i class="fas fa-icon"></i>
                                        <!-- Add your icon class here -->
                                        <h5 class="card-title">
                                             <img src="img/printer.png" alt="Icon" class="img-fluid">
                                        </h5>
                                        <h5 class="card-text">Reciept Printing</h5>
                                   </div>
                              </div>
                         </div>
                         <!-- Card 2 -->
                         <div class="col-md-3">
                              <div class="card text-center bg-warning text-light">
                                   <div class="card-body">
                                        <i class="fas fa-icon"></i>
                                        <h5 class="card-title">
                                             <img src="img/printing-machine.png" alt="Icon" class="img-fluid">
                                        </h5>
                                        <h5 class="card-text">Yearbooks</h5>
                                   </div>
                              </div>
                         </div>
                         <!-- Card 3 -->
                         <div class="col-md-3">
                              <div class="card text-center bg-danger text-light">
                                   <div class="card-body">
                                        <i class="fas fa-icon"></i>
                                        <!-- Add your icon class here -->
                                        <h5 class="card-title">
                                             <img src="img/color.png" alt="Icon" class="img-fluid">
                                        </h5>
                                        <h5 class="card-text">Calendar</h5>
                                   </div>
                              </div>
                         </div>
                         <!-- Card 4 -->
                         <div class="col-md-3">
                              <div class="card text-center bg-dark text-light">
                                   <div class="card-body">
                                        <i class="fas fa-icon"></i>
                                        <!-- Add your icon class here -->
                                        <h5 class="card-title">
                                             <img src="img/offset.png" alt="Icon" class="img-fluid">
                                        </h5>
                                        <h5 class="card-text">More</h5>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <br>

          <!-- Digital Printing Solution -->
          <section id="Digital Printing" class="p-5 bg-lighttext-dark">
               <div class="container">
                    <div class="row align-items-center justify-content-between">
                         <div class="col-md p-5">
                              <h1>Digital Printing Solution</h1>
                              <br>
                              <h4 class=" text-lg"> Discover the future of printing with our cutting-edge Digital Printing Solution. Revolutionize your printing experience with advanced technologies, bringing unparalleled quality, flexibility, and efficiency to your projects. </h4>
                         </div>
                         <div class="col-md">
                              <img src="img/icon2.png" class="img-fluid" alt="" />
                         </div>
                    </div>
               </div>
          </section>
          <br>

          <!--Gallery-->
          <div class="photo-gallery" id="Gallery">
               <div class="container">
                    <div class="intro">
                         <h2 class="text-center"> Gallery</h2>
                    </div>
                    <div class="row photos">
                         <!--First Row-->
                         <div class="col-sm-6 col-md-4 col-lg-3 item">
                              <a href="img/gallery/1.jpg" data-lightbox="photos">
                                   <img class="img-fluid" src="img/gallery/1.jpg">
                              </a>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-3 item">
                              <a href="img/gallery/2.jpg" data-lightbox="photos">
                                   <img class="img-fluid" src="img/gallery/2.jpg">
                              </a>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-3 item">
                              <a href="img/gallery/11.png" data-lightbox="photos">
                                   <img class="img-fluid" src="img/gallery/11.png">
                              </a>
                         </div>
                         <!--Second Row-->
                         <div class="col-sm-6 col-md-4 col-lg-3 item">
                              <a href="img/gallery/3.jpg" data-lightbox="photos">
                                   <img class="img-fluid" src="img/gallery/3.jpg">
                              </a>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-3 item">
                              <a href="img/gallery/4.jpg" data-lightbox="photos">
                                   <img class="img-fluid" src="img/gallery/4.jpg">
                              </a>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-3 item">
                              <a href="img/gallery/122.jpg" data-lightbox="photos">
                                   <img class="img-fluid" src="img/gallery/122.jpg">
                              </a>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-3 item">
                              <a href="img/gallery/6.jpg" data-lightbox="photos">
                                   <img class="img-fluid" src="img/gallery/6.jpg">
                              </a>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-3 item">
                              <a href="img/gallery/7.jpg" data-lightbox="photos">
                                   <img class="img-fluid" src="img/gallery/7.jpg">
                              </a>
                         </div>
                    </div>
               </div>
          </div>
          <br>
          <br>
          <br>

          <!-- FAQ -->
          <div class="faq_area section_padding_130" id="faq">
               <div class="container">
                    <div class="row justify-content-center">
                         <div class="col-12 col-sm-8 col-lg-6">
                              <!-- Section Heading-->
                              <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                   <h3>
                                        <span>Frequently </span> Asked Questions
                                   </h3>
                                   <div class="line"></div>
                              </div>
                         </div>
                    </div>
                    <div class="row justify-content-center">
                        
                    <!-- FAQ Area-->
                         <div class="col-12 col-sm-10 col-lg-8">
                              <div class="accordion faq-accordian" id="faqAccordion">
                                   <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <div class="card-header" id="headingOne">
                                             <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How can I install this app? <span class="lni-chevron-up"></span>
                                             </h6>
                                        </div>
                                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                             <div class="card-body">
                                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem facere deserunt sint animi sapiente vitae suscipit.</p>
                                                  <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <div class="card-header" id="headingTwo">
                                             <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">The apps isn't installing? <span class="lni-chevron-up"></span>
                                             </h6>
                                        </div>
                                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                             <div class="card-body">
                                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem facere deserunt sint animi sapiente vitae suscipit.</p>
                                                  <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="card border-0 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                        <div class="card-header" id="headingThree">
                                             <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Contact form isn't working? <span class="lni-chevron-up"></span>
                                             </h6>
                                        </div>
                                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                             <div class="card-body">
                                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem facere deserunt sint animi sapiente vitae suscipit.</p>
                                                  <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                          
                              <!-- Support Button-->
                              <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                   <i class="lni-emoji-sad"></i>
                                   <p class="mb-0 px-2">Can't find your answers?</p>
                                   <a href="#"> Contact us</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <br>
          <br>
          <br>
          <br>
       
          <!-- Testemonials -->
          <div class="container mt-5 mb-5 text-center">
               <h1>Testemonials</h1>
               <br>
               <!-- First Testimonial -->
               <div class="row g-2">
                    <div class="col-md-4">
                         <div class="card p-3 text-center px-4">
                              <!-- User Image -->
                              <div class="user-image">
                                   <img src="img/zayn.jpg" class="rounded-circle" width="80">
                              </div>
                              <!-- User Content -->
                              <div class="user-content">
                                   <h5 class="mb-0">Lawrence Bustamante</h5>
                                   <span>Graphics Artist</span>
                                   <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h6>
                              </div>
                              <!-- Ratings -->
                              <div class="ratings">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                              </div>
                         </div>
                    </div>
                    <!-- Second Testimonial -->
                    <div class="col-md-4">
                         <div class="card p-3 text-center px-4">
                              <!-- User Image -->
                              <div class="user-image">
                                   <img src="img/hans.jpg" class="rounded-circle" width="80">
                              </div>
                              <!-- User Content -->
                              <div class="user-content">
                                   <h5 class="mb-0">Hans Fred Refacort</h5>
                                   <span>Operator</span>
                                   <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h6>
                              </div>
                              <!-- Ratings -->
                              <div class="ratings">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                              </div>
                         </div>
                    </div>
                    <!-- Third Testimonial -->
                    <div class="col-md-4">
                         <div class="card p-3 text-center px-4">
                              <!-- User Image -->
                              <div class="user-image">
                                   <img src="img/john.jpg" class="rounded-circle" width="100">
                              </div>
                              <!-- User Content -->
                              <div class="user-content">
                                   <h5 class="mb-0">John Cantil</h5>
                                   <span>Proof Reader</span>
                                   <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h6>
                              </div>
                              <!-- Ratings -->
                              <div class="ratings">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <footer class="bg-dark text-light p-5">
               <div class="container">
                    <div class="row">
                      
                    <!-- Contact Information -->
                         <div class="col-md-3">
                              <h4>Contact Us</h4>
                              <p class="text-left" style="color: white;">Location: Surigao City</p>
                              <p class="text-left" style="color: white;">Contact Number: 09328484</p>
                              <p class="text-left" style="color: white;">Email: <a href="mailto:5bprinting@email.com" class="text-light" style="color: white;">5bprinting@email.com</a>
                              </p>
                              <p class="text-left" style="color: white;">Location: San Juan</p>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251624.44580916644!2d125.41917438929805!3d9.797174955987142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x330136c91863193d%3A0x8d809adba4083ee4!2sSurigao%20City%2C%20Surigao%20del%20Norte!5e0!3m2!1sen!2sph!4v1700216717630!5m2!1sen!2sph" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>
                         <!-- Follow Us and Contact Form -->
                         <div class="col-md-8">
                              <div class="row">
                                   <!-- Follow Us -->
                                   <div class="col-md-4 text-start">
                                        <h4>Follow Us</h4>
                                        <div class="social-icons me-md-4">
                                             <div class="icon-group mb-3">
                                                  <a href="#" target="_blank" class="text-light">
                                                       <img src="img/facebook.png" alt="Facebook Icon" width="32" height="32">
                                                       <span class="icon-text">@5B Printing Shop</span>
                                                       <br>
                                                  </a>
                                             </div>
                                             <div class="icon-group mb-3">
                                                  <a href="#" target="_blank" class="text-light">
                                                       <img src="img/instagram.png" alt="Instagram Icon" width="32" height="32">
                                                       <span class="icon-text">@5B Printing</span>
                                                  </a>
                                             </div>
                                        </div>
                                   </div>
                                   <!-- Contact Form -->
                                   <div class="col-md-8 text-start">
                                        <h4>Contact Form</h4>
                                        <form action="process.php" method="post">
                                             <div class="mb-3">
                                                  <label for="name" class="form-label text-light">Name:</label>
                                                  <input type="name" class="form-control" name="name" id="name" placeholder="Your Name">
                                             </div>
                                             <div class="mb-3">
                                                  <label for="email" class="form-label text-light">Email:</label>
                                                  <input type="email" class="form-control" name="email_address" id="email_address" placeholder="Your Email">
                                             </div>
                                             <div class="mb-3">
                                                  <label for="message" class="form-label text-light">Message:</label>
                                                  <textarea class="form-control" id="messagedata" name="messagedata" rows="4" placeholder="Your Message"></textarea>
                                             </div>
                                             <button type="submit" name="sendit" class="btn btn-primary">Submit</button>
                                        </form>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </footer>
          <footer class="p-5 bg-light text-dark text-center position-relative">
               <div class="container">
                    <span class="fw-bold">Copyright &copy; 2023 Lawrence Bustamante</span>
                    <a href="adminpage.php?admin=true" style="color:white;">Secret Admin</a>
                    <a href="#" class="position-absolute bottom-0 end-0 p-5">
                         <i class="bi bi-arrow-up-circle h1"></i>
                    </a>
               </div>
          </footer>
          <!-- Script -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
         
          <!-- Script -->
          <script>
               document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                         e.preventDefault();
                         const target = document.querySelector(this.getAttribute('href'));
                         if (target) {
                              target.scrollIntoView({
                                   behavior: 'smooth'
                              });
                         }
                    });
               });
          </script>
     </body>
</html>