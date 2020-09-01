<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ROC Intl</title>

  <!--My CSS -->
  <link href="css/home.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <img src="img/logo.png" alt="Roc Int label with logo" width="250">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Flights
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="arrivals.php">Arrivals</a>
              <a class="dropdown-item" href="departures.php">Departures</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="parkingOption.php">Parking</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="action_page.php">Lost & Found</a>
              <a class="dropdown-item" href="action_page.php">Accessibility</a>
              <a class="dropdown-item" href="action_page.php">Baggage Claim</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/image4.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Rochester International Airport</h3>
            <p>We are committed to getting you where you need to go.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/image2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>New Mobile Updates</h3>
            <p>Download the ROC Intl App in the app store</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/image3.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Find Updates Here on Our Website</h3>
            <p>Departure and Arrival updates are on the flights tab.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container" >

    <h2 class="my-4">Flights and Parking</h2>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 shadow-lg">
          <h4 class="card-header">Arrivals</h4>
          <div class="card-body">
            <p class="card-text">Click the button below to find flights inbound to ROC Intl.</p>
          </div>
          <div class="card-footer">
            <a href="arrivals.php" class="btn btn-primary bg-success">Inbound</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 shadow-lg">
          <h4 class="card-header">Departures</h4>
          <div class="card-body">
            <p class="card-text">Click the button below to find flights outbound of ROC Intl.</p>
          </div>
          <div class="card-footer">
            <a href="departures.php" class="btn btn-primary bg-success">Outbound</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 shadow-lg">
          <h4 class="card-header">Baggage</h4>
          <div class="card-body">
            <p class="card-text">For how to check-in bags, getting to the baggage claim area, as well as other baggage needs click the button below. </p>
          </div>
          <div class="card-footer">
            <a href="action_page.php" class="btn btn-primary bg-success">Baggage information</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <h2>Services</h2>
    </br>
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 shadow-lg">
          <a href="#"><img class="card-img-top" src="img/pic1.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="action_page.php">Lost & Found</a>
            </h4>
            <p class="card-text">Have you lost something? Maybe check our Lost & Found department located in Terminal 3. Click here to find it on the map. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 shadow-lg">
          <a href="#"><img class="card-img-top" src="img/pic2.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="action_page.php">Accessibility</a>
            </h4>
            <p class="card-text">Schedule travel plans with our Accessibility Support team. You can find resources here for scheduling and other ways of transportation and assisted activities. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 shadow-lg">
          <a href="#"><img class="card-img-top" src="img/pic3.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="parkingOption.php">Parking</a>
            </h4>
            <p class="card-text">Find what lots to park in throughout terminal 1, 2, and 3. You may also look at the parking costs through this link as well. </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <div class="card shadow-lg">
      <div class="card-body">
        <h5 class="card-title">General Map - Upper Level</h5>
        <p class="card-text">The Upper level has the security checkpoint. There are Three terminals 1, 2, and 3.</p>
      </div>
      <img class="card-img-bottom" src="img/upperLevel.png" alt="Card image cap" style="width:auto;padding:10px;">
    </div> </br>

    <div class="card shadow-lg">
      <div class="card-body">
        <h5 class="card-title">General Map - Lower Level</h5>
        <p class="card-text">The Lower level has baggage claim as well as customer for some international flights. There is access to rental cars, public transportation, and cabs.</p>
      </div>
      <img class="card-img-bottom" src="img/lowerLevel.png" alt="Card image cap" style="width:auto;padding:10px;">
    </div> </br>

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Parking Reservations</h2>
        <p>Going on a long trip?</p>
        <p></p><strong>Leave Your Car in Our Care</strong>
        <ul>
          <li>Cheaper than alternative options</li>
          <li>Bus transportation to and from the terminals</li>
          <li>Under out watch</li>
          <li>No hassle guaranteed</li>
        </ul>

      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="img/image5.jpg" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Email us today to reserve your space: contactus@rochesterintl.com</p>
        <p>Check availability to reserve a space here</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="action_page.php">Check Availability</a>
      </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-light">
    <div class="container">
      <p class="m-0 text-center text-black">Copyright &copy; Rochester Intl 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
