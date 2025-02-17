<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inner Balance Care | Homepage</title>

    <!-- Custom CSS -->
     <link rel="stylesheet" href="Assets/CSS/style.css">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONT AWESOME -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body class="bg-light" style="background: rgb(255,255,255);
background: linear-gradient(73deg, rgba(255,255,255,1) 8%, rgba(29,159,180,0.25262605042016806) 87%);">

    <!-- Header -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center justify-content-center" href="#"> <img src="./Assets/Img/logo.png" alt="" class="img-fluid" style="width: 50px; height: auto;"> Inner Balance</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto ms-auto my-2 my-lg-0 gap-4 navbar-nav-fixed" >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" datao-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#" >Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
                  </li>
            </ul>
              <button onclick="window.location='auth/signin.php'" class="btn text-white" style="background-color: #1D9DB4;" >Get started</button>
          </div>
        </div>
      </nav>

      <div class="container-fluid">

      <div class="container px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-2 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="Assets/Img/Hero.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn text-white btn-lg px-4 me-md-2"  style="background-color: #1D9DB4;">Book Appointment</button>
              <button type="button" class="btn btn-outline-secondary btn-lg px-4">Learn More</button>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- About section -->
<section class="about-section container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content">
                        <h2 class="fw-semi-bold text-black">Who we are</h2>
                        <h3 class="fw-bold text-black">About <span class="text-light">Us</span></h3>
                        <p>
                            At Inner Balance care, we are dedicated to helping individuals rediscover their inner strength and achieve mental harmony.
                            Through compassionate care and personalized programs, we create a safe space where healing and growth flourish.
                            Our goal is to empower every individual to embrace wellness and lead a balanced, fulfilling life.
                        </p>
                        <button class="btn btn-outline-light">Learn more</button>
                    </div>
                </div>
                <div class="col-lg-7 ">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card p-4 text-center">
                                <div class="card-icon"><i class="fas fa-people-carry"></i></div>
                                <h5 class="mt-3">Compassion</h5>
                                <p>We understand, respect, and continually promote sincere care for our clients and their families.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 text-center">
                                <div class="card-icon"><i class="fas fa-handshake"></i></div>
                                <h5 class="mt-3">Commitment</h5>
                                <p>We have and maintain a relentless optimism to guide those we care for through their wellness journey.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 text-center">
                                <div class="card-icon"><i class="fas fa-lightbulb"></i></div>
                                <h5 class="mt-3">Knowledge</h5>
                                <p>We rely on hard-backed data in our care delivery and management. Our practice requires a combination of science and art.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 text-center">
                                <div class="card-icon"><i class="fas fa-book-open"></i> </div>
                                <h5 class="mt-3">Research</h5>
                                <p>We pursue continuous improvement to care, professional development, and creating an impact.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- services section -->
<section class="services_sec container">
  <div class="container">
    
  <div class="head_sec">
<h2 class="fw-semi-bold   d-flex justify-content-center align-items-center py-5" >What we  offer</h2>
<h3 class="fw-bold text-#363636  d-flex justify-content-center align-items-center py-2">Our <span class="text-right">Services</span></h3>
  <p class="d-flex justify-content-center align-itegigms-center py-2" style="font-size:24px;">Outpatient programs tailored to meet client health <br> needs and goals. Explore our programs</p>
</div>

<div class="cards_ main d-flex justify-content-center align-items-center g-4 me-auto ms-auto ">
  <!-- <div class="col-lg-7"> -->
  <div class="row align-items-center  g-4">
            <div class="col-md-3 me-auto ms-auto  ">
                <div class="card p-4 text-center">
                  <div class="icon_cards"><i class="fas fa-laptop"></i></div>
                <h5 class="mt-3">Telehealth</h5>
              <p >
                With technology constantly improving, psychosocial treatment can be done within the comforts of home. Remote support allows flexible healing and recovery.   
                </p>
              </div>
            </div>

            <div class="col-md-3 me-auto ms-auto ">
                <div class="card p-4 text-center">
                  <div class="icon_cards"><i class="fas fa-laptop"></i></div>
                <h5 class="mt-3">Telehealth</h5>
              <p >
                With technology constantly improving, psychosocial treatment can be done within the comforts of home. Remote support allows flexible healing and recovery.   
                </p>
              </div>
            </div>
            <div class="col-md-3 me-auto ms">
                <div class="card p-4 text-center">
                  <div class="icon_cards"><i class="fas fa-laptop"></i></div>
                <h5 class="mt-3">Telehealth</h5>
              <p >
                With technology constantly improving, psychosocial treatment can be done within the comforts of home. Remote support allows flexible healing and recovery.   
                </p>
              </div>
            </div>

            <div class="col-md-3">
                <div class="card p-4 text-center">
                  <div class="icon_cards"><i class="fas fa-laptop"></i></div>
                <h5 class="mt-3">Telehealth</h5>
              <p >
                With technology constantly improving, psychosocial treatment can be done within the comforts of home. Remote support allows flexible healing and recovery.   
                </p>
              </div>
            </div>
        
            <div class="col-md-3">
                <div class="card p-4 text-center">
                  <div class="icon_cards"><i class="fas fa-laptop"></i></div>
                <h5 class="mt-3">Telehealth</h5>
              <p >
                With technology constantly improving, psychosocial treatment can be done within the comforts of home. Remote support allows flexible healing and recovery.   
                </p>
              </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 text-center">
                  <div class="icon_cards"><i class="fas fa-laptop"></i></div>
                <h5 class="mt-3">Telehealth</h5>
              <p >
                With technology constantly improving, psychosocial treatment can be done within the comforts of home. Remote support allows flexible healing and recovery.   
                </p>
              </div>
            </div>
        
        
        
        


   <!-- </div>  -->

    </div>
 </div>





 </div>


</section>



</div>
</div>
    
    <!-- Boostrap Js -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
