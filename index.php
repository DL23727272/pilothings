<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
    <title>Home | Paesano</title>

    <script src="jquery-3.6.1.js"></script>
    <script>
        var i = 0;
        $(document).ready(function(){
            $('.slidertitle, #slider img').hide();
            showNextImage();
            setInterval(showNextImage, 3000);
        });

        function showNextImage(){
            i++;
            if (i > 3) { i = 1; }
            $('#sliderImage' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
            $('#title' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
        }
    </script>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <a href="index.php"><img src="img/paesano_logo.jpg" alt="Logo"></a>
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

    <section class="banner">
        <div id="slider">
        <img src="img/img1.jpg" id="sliderImage1">
        <div class="slidertitle" id="title1"></div>

        <img src="img/img2.jpg" id="sliderImage2">
        <div class="slidertitle" id="title2"></div>

        <img src="img/img3.jpg" id="sliderImage3">
        <div class="slidertitle" id="title3"></div>
        </div>
    </section>
    <section class="location" id="about">
            <h1>Visit Us</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!4v1694844955172!6m8!1m7!1s1raE9r_dktYMnJfWvwlkpw!2m2!1d17.1925608457103!2d120.446986625959!3f354.0218159548982!4f-7.73028807120005!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="contact_us" id="contact">
        <div class="container">
            <div class="row">
                <div class="contact_col">
                <div>
                    <i class="fa-solid fa-home"></i>
                    <span>
                        <h5>Marina st., Darapidap rd.</h5>
                        <p>San Antonio Candon City Ilocos Sur</p>
                    </span>
                </div>
                
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <h5>09771043166</h5>
                        <p>Everyday, 9AM to 5PM</p>
                    </span>
                </div>
            
                <div>
                   <i class="fa-solid fa-envelope"></i>
                   <span>
                       <h5>paesanobarbershop
                        @gmail.com</h5>
                       <p>Email us your query</p>
                   </span>
                </div>
                </div>

                <div class="contact_col">
                <form action="contactForm.php" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter email address" required>
                    <input type="text" name="subject" placeholder="Enter Your subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero_btn">Send Message</button>
                </form>
                </div>
            </div>
        </div>
    </section>

    <script src="main.js"></script>
</body>
</html>
