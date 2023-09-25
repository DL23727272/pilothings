<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="modals.php">
    <title>Home | Paesano</title>
</head>
<body>
  <div class="container-fluid sticky-navbar">
    <nav class="navbar">
      <a href="index.php"><img src="img/paesano_logo.jpg"></a>
      <ul class="nav-item">
        <li class="nav-link"><a href="index.php" class="link">Home</a></li>
        <li class="nav-link"><a href="service.php" class="link">Book</a></li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </div>

  <!-- The Modal -->
  <?php include 'modals.php'; ?>


  <!-----Products------>

  <div class="product">
    <section class="divs">
      <h1>Candon City Barbers</h1>
      <p class="barber-description">Paesano</p>
      <div class="row">
        <div class="cup">
          <img src="img/img3.jpg">
          <div class="layer">
            <a href="#" data-toggle="modal" data-target="#barber1"><h3>Barbers 1</h3></a>
          </div>
        </div>

        <div class="cup">
          <img src="img/img3.jpg">
          <div class="layer">
            <a href="#" data-toggle="modal" data-target="#barber2"><h3>Barbers 2</h3></a>
          </div>
        </div>

        <div class="cup">
          <img src="img/img3.jpg">
          <div class="layer">
            <a href="#" data-toggle="modal" data-target="#barber3"><h3>Barbers 3</h3></a>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!---
  <div class="product">
    <section class="divs">
      <h1>Sta. Lucia Barbers</h1>
      <p class="barber-description">Paesano</p>
      <div class="row">
        <div class="cup">
          <img src="img/img3.jpg">
          <div class="layer">
            <a href="#" data-toggle="modal" data-target="#barber4"><h3>Barbers 4</h3></a>
          </div>
        </div>

        <div class="cup">
          <img src="img/img3.jpg">
          <div class="layer">
            <a href="#" data-toggle="modal" data-target="#barber5"><h3>Barbers 5</h3></a>
          </div>
        </div>

        <div class="cup">
          <img src="img/img3.jpg">
          <div class="layer">
            <a href="#" data-toggle="modal" data-target="#barber6"><h3>Barbers 6</h3></a>
          </div>
        </div>
      </div>
    </section>
  </div>

  Include Bootstrap JS (jQuery and Popper.js are also required) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // You can keep your JavaScript code for opening and closing the modal here.
  </script>
  <script src="main.js"></script>
</body>
</html>
