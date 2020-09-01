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
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<!-- Page Content -->
<div class="container" >

  <img src="img/image1.jpg" class="img-fluid" alt="Responsive image">

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Arrivals</h1>
      <p class="lead">Look below to find the status of an arriving flight</p>
    </div>
  </div>

  <table class="table">
    <thead>
    <tr>
      <th scope="col">From</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Airline</th>
      <th scope="col">Flight #</th>
      <th scope="col">Gate</th>
      <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>Toronto</td>
      <td>8-10-20</td>
      <td>12:26 PM</td>
      <td>Southeast</td>
      <td>1746</td>
      <td>27</td>
      <td>On Time</td>
    </tr>
    <tr>
      <td>Chicago</td>
      <td>8-10-20</td>
      <td>1:14 PM</td>
      <td>Southeast</td>
      <td>2467</td>
      <td>6</td>
      <td>On Time</td>
    </tr>
    <tr>
      <td>Philadelphia</td>
      <td>8-10-20</td>
      <td>1:22 PM</td>
      <td>Zeta</td>
      <td>1556</td>
      <td>12</td>
      <td>On Time</td>
    </tr>
    <tr>
      <td>New York</td>
      <td>8-10-20</td>
      <td>1:35 PM</td>
      <td>Southeast</td>
      <td>0572</td>
      <td>9</td>
      <td>Arrived</td>
    </tr>
    <tr>
      <td>Charlotte</td>
      <td>8-10-20</td>
      <td>1:43 PM</td>
      <td>Ohio Air</td>
      <td>2973</td>
      <td>23</td>
      <td>Arrived</td>
    </tr>
  </table>

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
