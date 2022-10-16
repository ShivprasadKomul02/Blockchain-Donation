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
  <body>
   

<script src="main.js"></script>

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

            <p class="logo-tagline">    Contribute to feed someone</p>

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

   

    <div id="sign-up" >
      <form class="form-signin" action="" method="post">
        <img
          class="mb-4"
          src="images/user.png"
          alt=""
          width="40"
          height="37"
        />
        <h1 class="h3 mb-3 fw-normal">Create New Campaign</h1>
       
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="xyz"
            id="compaignname"
          />
          <label for="floatingInput">Campain Name</label>
        </div>
        
        <div class="form-floating">
          <input
            type="number"
            class="form-control"
            placeholder="xyz"
            id="targetamount"
          />
          <label for="floatingPassword">Target Amount in ETHER</label>
        </div>
        <div class="form-floating">
          <input
            type="number"
            class="form-control"
            placeholder="xyz"
            id="deadline"
          />
          <label for="floatingPassword">End Date</label>
        </div>
        
        
        

        
        <div class="form-floating">
         <textarea rows = "5" cols = "60" id = "description" class="form-control">
            
         </textarea><br>
          <label for="floatingPassword">Description </label>
        </div>


        <button class="w-100 btn btn-lg btn-primary" onclick="createCampaignFunc()">
          Create
        </button>

        
      </form>
    </div>


    <footer>
      <div class="bottombanner container-fluid">
        <div class="row">
          <div class="col-md-4 logo-box my-auto">
            <span class="text-white" style="font-size: 20px">Chingari Donation</span>
            <span style="margin-left: 2px; margin-right: 2px">|</span>
            <span>Come ahead and take part in saving lives.</span>
          </div>

          <div class="col-md-8 social-icons">
            <ul class="list-unstyled my-auto">
              <li class="social-icon">
                <a href="http://www.facebook.com"
                  ><img src="images/facebook.png" alt="fb"
                /></a>
              </li>
              <li class="social-icon">
                <a href="http://www.twitter.com"
                  ><img src="images/twitter.png" alt="twt"
                /></a>
              </li>
              <li class="social-icon">
                <a href="http://www.instagram.com"
                  ><img src="images/instagram.png" alt="insta"
                /></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    

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