<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home | Paesano</title>
</head>
<body>
  <div class="container">
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
<div class="modal" id="modal1">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>
</div>
<div class="modal" id="modal2">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Some text in the Modal..</p>
    </div>
  </div>
  <div class="modal" id="modal3">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Some text in the Modal..</p>
    </div>
  </div>
<div class="product">
    <section class="divs">
    <h1>Candon Barbers</h1>
    <p class="barber-description">Paesano</p>
    <div class="row">
        <div class="cup">
            <img src="img/img3.jpg">
            <div class="layer">
                <a href="#" id="modalLink1"><h3>Barbers 1</h3></a>
            </div>
        </div>

        <div class="cup">
            <img src="img/img3.jpg">
            <div class="layer">
                <a href="#" id="modalLink2"><h3>Barbers 2</h3></a>
            </div>
        </div>

        <div class="cup">
            <img src="img/img3.jpg">
            <div class="layer">
                <a href="#" id="modalLink1"><h3>Barbers 1</h3></a>
            </div>
        </div>

    </div>
</section>
</div>

<div class="product">
    <section class="divs">
    <h1>Sta. Lucia Barbers</h1>
    <p class="barber-description">Paesano</p>
    <div class="row">
        <div class="cup">
            <img src="img/img3.jpg">
            <div class="layer">
                <a href="#" id="modalLink1"><h3>Barbers 1</h3></a>
            </div>
        </div>

        <div class="cup">
            <img src="img/img3.jpg">
            <div class="layer">
                <a href="#" id="modalLink2"><h3>Barbers 2</h3></a>
            </div>
        </div>

        <div class="cup">
            <img src="img/img3.jpg">
            <div class="layer">
                <a href="#" id="modalLink2"><h3>Barbers 2</h3></a>
            </div>
        </div>

    </div>
</section>
</div>
<script>
  // Function to open the modal for the clicked coffee item
  function openModal(index) {
    document.querySelectorAll(".modal")[index].style.display = "block";
  }

  // Function to close the modal for the clicked coffee item
  function closeModal(index) {
    document.querySelectorAll(".modal")[index].style.display = "none";
  }

  // Event listeners for each coffee item's button
  document.querySelectorAll("[id^='modalLink']").forEach(function (button, index) {
    button.onclick = function () {
      openModal(index);
    };
  });

  // Event listeners for each modal's close button
  document.querySelectorAll(".close").forEach(function (closeBtn, index) {
    closeBtn.onclick = function () {
      closeModal(index);
    };
  });

  // Event listener to close the modal when clicking outside of it
  window.onclick = function(event) {
    document.querySelectorAll(".modal").forEach(function (modal, index) {
      if (event.target == modal) {
        closeModal(index);
      }
    });
  };
</script>
<script src="main.js"></script>
</body>
</html>
