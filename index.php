<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donation</title>
    
    <!-- Favicon link -->
    <link
      rel="icon"
      href="favicon/favicon.ico"
      sizes="16x16"
      type="image/png"
    />

    <!-- Css files linking -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    
    <link rel="stylesheet" href="css/styles.css" />


  </head>
<script
  src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"
  type="application/javascript">
</script>
<script src="main.js"></script>
  <body>
   



    <!-- Top banner with logo and contact -->
    <div class="topbanner container-fluid">
      <div class="row">
        <div class="col-md-4 logo-box my-auto">
          <img
            class="logo"
            src="images/donate1.png"
            alt="PICT Interns™ logo"
          />
          <p class="logo-text">Chingari Donation</p>

            <p class="logo-tagline">Contribute to feed someone</p>

        </div>

        <div class="col-md-8 contacts my-auto">
          <ul class="list-unstyled">
            <li class="list-items">

              <img src="images/metamask.png"/><br>
              <p name="metamask" onclick="connect()" id="accountwallet">Connect Metamask</p>

            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Navbar with toggler below md -->
    <nav id="nav1" class="navbar navbar-expand-md sticky-top">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="text-white">Menu</span>
        <img
          src="images/down-arrow.png"
          style="height: 1.5rem; width: 1.5rem"
          alt=""
        />
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-fill w-100 me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"
              >Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="createcampaign.php">Create Compaign</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="withdraw.php">Withdraw Funds</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donate.php">Donate Funds</a>
          </li>
      
           
          
        </ul>
      </div>
    </nav>

    <!-- New carousel -->
    <div id="myCarousel" class="carousel slide pointer-event" data-interval="3000" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/intern1.jpg"class="bd-placeholder-img" width="100%" alt="img1"><rect width="100%" height="100%" fill="#777"></rect></svg>
    
        </div>
        <div class="carousel-item">
          <img src="images/intern1.jpg"class="bd-placeholder-img" width="100%" alt="img1"><rect width="100%" height="100%" fill="#777"></rect></svg>
  
         
        </div>
        <div class="carousel-item">
          <img src="images/intern2.jpg"class="bd-placeholder-img" width="100%" alt="img1"><rect width="100%" height="100%" fill="#777"></rect></svg>
  
          
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- New features content -->
    <div class="container marketing">
       
      <!-- START THE FEATURETTES -->
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 my-auto">
          <h2 class="featurette-heading ">What we do </h2>
          <p class="lead">The more contributions fundraisers bring in, the bigger the impact. And today, it’s easier than ever to donate to a charity or a non-profit organization. In fact, since Facebook launched fundraising tools in 2015, fundraisers have raised over $2 billion for nonprofits through the social media platform.

With that in mind, securing donations for a fundraiser is still easier said than done. Even if you have a charity with a great mission, there’s a lot of competition out there for causes. But the right slogan that touches the hearts and minds of contributors, can transform a campaign into a life changer for the recipients of a cause.</p>
        </div>
        <div class="col-md-5">
          <img src="images/offering.jpg" alt="facility1" class="featurette-image img-fluid mx-auto" width="500" height="500"><rect width="100%" height="100%" fill="#eee"></rect>
             
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2 my-auto">
          <h2 class="featurette-heading">Blockchain Fundraising</h2></h2>
          <p class="lead">Peer-to-peer fundraising benefits nonprofits by expanding their reach past their own contact lists and into the networks of others. Donors have direct access to friends, family members, coworkers, and other peers that may have never heard of your organization. By creating a peer-to-peer fundraising campaign, nonprofits get exposure to people they may have otherwise never reached. Those advocating and soliciting donations for your cause do more than just raise money on behalf of your organization; their vocal, public support increases brand awareness for your mission</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="images/quality.jpg" alt="facility2" class="featurette-image img-fluid mx-auto" width="500" height="500"><rect width="100%" height="100%" fill="#eee"></rect>
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  



                  </div>
        <div class="col-md-5">
        <rect width="100%" height="100%" fill="#eee"></rect>
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <!-- /END THE FEATURETTES -->
  
    </div>

    <!-- Testimonials -->
    <section class="text-center my-5 testimonial-section">

  <!-- Section heading -->
  <h1 class="h1-responsive font-weight-bold my-5">Developed by </h1>

  <div class="wrapper-carousel-fix">
    <!-- Carousel Wrapper -->
    <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
      data-interval="2000">
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
          <div class="testimonial">
            <!--Avatar-->
            <div class="avatar mx-auto mb-4">
              <img src="images/itsme.jpg" class="rounded-circle img-fluid"
                alt="First sample avatar image">
            </div>
            <!--Content-->
            <!-- <p>
              <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
              eos
              id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur
              adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore
              sit, aspernatur praesentium iste impedit quidem dolor veniam.
            </p> -->
            <h4 class="font-weight-bold">Shivprasad Komul</h4>
            <!--Review-->
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star-half-alt blue-text"> </i>
          </div>
        </div>
        <!--First slide-->
        
    <!-- Javascript links -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
