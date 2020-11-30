<!doctype html>
<html lang="en">
<!--
    Jackson Hoenig
    Final Project 5130
    Rod Cutting Problem Solution Game
    Pipe Cutter
    11/30/2020
-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0>
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="./img/logo2.png">

  <title>Pipe Cutter</title>


  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
  <link href="./css/main.css" rel="stylesheet">
  <link href="./css/normalize.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Custom styles for this template -->
  <link href="./css/dashboard.css" rel="stylesheet">

</head>

<body">
<!--Celebrate confetti-->
<script src="https://cdn.jsdelivr.net/gh/mathusummut/confetti.js/confetti.min.js"></script>

<!-- PHP includes -->
<?php include './php/main.php';?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Pipe Cutter</a>
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

    <div class="col-lg col-md table-responsive">
      <h1 class="h2">Your Solution</h1>
      <div>Current Solution Profit: $<span id="currentSolutionProfit" value="0.00">0.00</span></div>
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
    </div>
    <div class="col-lg col-md table-responsive">
      <h1 class="h2">Calculated Solution</h1>
      <div>

        <button onclick="toggleSolution(this)" class="btn btn-secondary" type="button">Show Solution</button>

      </div>
      <table hidden="true" id="solutionTable" class="table table-striped table-bordered table-sm" cellspacing="0"
             width="100%">
        <thead>
        <tr>
          <th>Length</th>
          <th>Price</th>
        </tr>
        </thead>
        <tbody>

        <?php include './php/generateSolution.php' ?>
        </tbody>
      </table>
      <?php
      //show max value
      echo "<div hidden='true' id='solutionPrice'>The Max Profit that can be reached is: $<span id='solutionTotalProfit'>".number_format($valueArray[count($marketArray)], 2,'.', ',')."</span></div>";
      ?>
    </div>
    <div class="col col-lg-4 table-responsive">
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
