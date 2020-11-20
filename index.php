<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="./img/logo2.png">

  <title>Pipe Cutter</title>


  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
  <link href="./css/main.css" rel="stylesheet">
  <link href="./css/normalize.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./css/dashboard.css" rel="stylesheet">
</head>

<body">
<!-- PHP includes -->
<?php include './php/main.php';?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="./img/logo2.png" class="nav-logo d-inline-block align-top" alt="">Pipe Cutter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?difficulty=Easy">Easy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?difficulty=Medium">Medium</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?difficulty=Hard">Hard</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">

    <div class="col-sm table-responsive">
      <h1 class="h2">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button onclick="toggleSolution()" class="btn btn-secondary" type="button">See Solution?</button>
        </div>
      </div>
      <div id="currentSolutionContainer">
        <table id="currentSolutionTable" class="table table-striped table-bordered table-sm" cellspacing="0"
               width="100%">
          <thead>
          <tr>
            <th>Undo</th>
            <th>Length</th>
            <th>Price</th>
          </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <div>Current Solution Profit: $<span id="currentSolutionProfit" value="0.00">0.00</span></div>
      </div>
      <?php include './php/generateSolution.php' ?>

    </div>
    <div class="col-sm col-lg-4 table-responsive">
      <h2>Current Market</h2>
      <table id="priceTable" class="table table-striped table-bordered table-sm" cellspacing="0"
             width="100%">
        <thead>
        <tr>
          <th>Cut Here?</th>
          <th>Length</th>
          <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php include './php/generateMarket.php' ?>
        </tbody>
      </table>
    </div>
  </div>

  <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
</div>


<!-- Bootstrap core JavaScript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/vendor/jquery-slim.min.js"></script>
<!--  <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>-->
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script src="./js/vendor/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

<script src="js/main.js"></script>
</body>

</html>
