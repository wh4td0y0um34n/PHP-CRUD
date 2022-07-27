<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Portofolio</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="nav-container">
      <div class="nav-logo">
        <img src="img/hack2.png" alt="">
      </div>
      <div class="nav-link">
        <a href="#" class="link-list">Home</a>
        <a href="form.php" class="link-list">CRUD</a>
        <a href="#" class="link-list">Gallery</a>
        <a href="#" class="link-list">Blog</a>
        <a href="#" class="link-list">Contact US</a>
      </div>
      <div class="nav-login">
        <a href="#" class="btn-login">Login</a>
      </div>
    </div>
    <main class="bodyslyder">
      <div class="slider">
        <div class="slides">
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <div class="slide first">
            <img src="img/1.jpg" alt="">
          </div>
          <div class="slide">
            <img src="img/2.jpg" alt="">
          </div>
          <div class="slide">
            <img src="img/3.jpg" alt="">
          </div>
          <div class="slide">
            <img src="img/4.jpg" alt="">
          </div>
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
          </div>
        </div>
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
      </div>
      <script type="text/javascript">
      var counter = 1;
      setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4){
          counter = 1;
        }
      }, 5000);
      </script>
    </main>
    <section class="about" id="aboutus">
      <div class="main">
        <img src="img/coding.jpg">
        <div class="about-text">
          <h2>About</h2>
          <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Quod corrupti eum at dignissimos harum quis, dolorum 
              cumque ea veniam sequi quos amet provident sit dolor 
              expedita quaerat sint, neque accusamus.
            </p>
          <button type="button">Let's Talk</button>
        </div>
      </div>
    </section>
    
    <div class="service" id="services">
      <div class="title">
        <h2>Our Services</h2>
      </div>
  
      <div class="box">
        <div class="card">
          <i class="fas fa-bars"></i>
          <h5>Web Development</h5>
          <div class="pra">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
  
            <p style="text-align: center;">
              <a class="button" href="#">Read More</a>
            </p>
          </div>
        </div>
  
        <div class="card">
          <i class="far fa-user"></i>
          <h5>Web Development</h5>
          <div class="pra">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
  
            <p style="text-align: center;">
              <a class="button" href="#">Read More</a>
            </p>
          </div>
        </div>
  
        <div class="card">
          <i class="far fa-bell"></i>
          <h5>Web Development</h5>
          <div class="pra">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
  
            <p style="text-align: center;">
              <a class="button" href="#">Read More</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <p id="contactus">Contact Us :</p>
      <div class="social">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
      </div>
      <p class="end">© 2022 Agung Gumilang</p>
    </footer>
      </body>
</html>
