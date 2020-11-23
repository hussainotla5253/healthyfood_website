<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="we're HealthyFood, your new premium Restaurant. We know you're
          always busy. No time for cooking. So let us take care of that, we're
          really good at it, we promise to provide you best services!"
    />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/grid.css" />
    <link rel="stylesheet" href="css/queries.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/animate.css" />

    <!-- icon  -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="icon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="icon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="icon/favicon-16x16.png"
    />
    <link rel="manifest" href="icon/site.webmanifest" />
    <link rel="mask-icon" href="icon/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="icon/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-config" content="icon/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />

    <!-- icon end  -->

    <title>Healthy Food</title>
  </head>
  <body id="home">
    <header>
      <!-- navigation bar -->
      <nav class="sticky">
        <div class="row">
          <img src="img/white-Logo-03-02.png" alt="" class="logo" />
          <img src="img/BLACK-Logo-03.png" alt="" class="logo-black" />
          <ul class="nav-bar js--nav-bar">
            <li><a href="#home">Home</a></li>
            <li><a href="#meals">Menu</a></li>
            <li><a href="#plans">Reservations </a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about-us">About Us</a></li>
          </ul>

          <a class="mobile-nav-icon js--nav-icon"
            ><ion-icon name="menu-outline" class="icon-nav"></ion-icon>
          </a>
        </div>
      </nav>

      <!-- hero text -->
      <div class="hero-text">
        <h1>
          Goodbye junk food. <br />
          Adapt super healthy meals.
        </h1>
        <a class="btn btn-full js--scroll-to-plans" href="#">Healthy meals.</a>
        <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
      </div>
    </header>

    <!-- section 1 -->
    <section class="section-features js--section-features">
      <div class="row">
        <h2>Get healthy food &mdash; not fast food</h2>
        <p class="paragraph-1">
          Hello, we're HealthyFood, your new premium Restaurant. We know you're
          always busy. No time for cooking. So let us take care of that, we're
          really good at it, we promise to provide you best services!
        </p>
      </div>

      <div class="row js--wp-1">
        <div class="col col-1 span-1-of-4 box">
          <ion-icon name="infinite-outline" class="icon-b"></ion-icon>
          <h3>OUR 365 DAYS SERVICE</h3>
          <p>
            Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero
            malesuada feugiat. Curabitur non nulla sit amet nisl tempus
            convallis quis ac lectus. Sed porttitor lectus nibh.
          </p>
        </div>

        <div class="col col-1 span-1-of-4 box">
          <ion-icon name="time-outline" class="icon-b"></ion-icon>
          <h3>READY IN 15 MINUTES</h3>

          <p>
            Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero
            malesuada feugiat. Curabitur non nulla sit amet nisl tempus
            convallis quis ac lectus. Sed porttitor lectus nibh.
          </p>
        </div>

        <div class="col col-1 span-1-of-4 box">
          <ion-icon name="nutrition-outline" class="icon-b"></ion-icon>
          <h3>100% ORGANIC</h3>
          <p>
            Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero
            malesuada feugiat. Curabitur non nulla sit amet nisl tempus
            convallis quis ac lectus. Sed porttitor lectus nibh.
          </p>
        </div>

        <div class="col col-1 span-1-of-4 box">
          <ion-icon name="restaurant-outline" class="icon-b"></ion-icon>
          <h3>PROFESSIONAL CHEFS</h3>

          <p>
            Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero
            malesuada feugiat. Curabitur non nulla sit amet nisl tempus
            convallis quis ac lectus. Sed porttitor lectus nibh.
          </p>
        </div>
      </div>
    </section>

    <!-- section meals  -->

    <section class="meals" id="meals">
      <ul class="meals-img clearfix">
        <li>
          <figure class="meal-photo">
            <img src="img/Healthy Food Logo-04.png" alt="" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="img/Healthy Food Logo-05.png" alt="" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="img/Healthy Food Logo-06.png" alt="" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="img/Healthy Food Logo-07.png" alt="" />
          </figure>
        </li>
      </ul>

      <ul class="meals-img clearfix">
        <li>
          <figure class="meal-photo">
            <img src="img/Healthy Food Logo-08.png" alt="" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="img/Healthy Food Logo-09.png" alt="" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="img/Healthy Food Logo-10.png" alt="" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="img/Healthy Food Logo-11.png" alt="" />
          </figure>
        </li>
      </ul>
    </section>

    <!-- section how it works -->

    <section class="section-3">
      <div class="row">
        <h2>How it works &mdash; Simple as 1, 2, 3</h2>
      </div>

      <div class="row">
        <div class="col span-1-of-2 steps-box">
          <img src="img/iphone-03.png" alt="" class="app-screen js--wp-2" />
        </div>
        <div class="col span-1-of-2 steps-box">
          <div class="works-step">
            <div>1</div>
            <p>
              Choose the subscription plan that best fits your needs and sign up
              today.
            </p>
          </div>

          <div class="works-step">
            <div>2</div>
            <p>
              Order your delicious meal using our mobile app or website. Or you
              can even call us!
            </p>
          </div>

          <div class="works-step">
            <div>3</div>
            <p>
              Enjoy your meal after less than 20 minutes. See you the next time!
            </p>
          </div>

          <a href="#" class="btn-app">
            <img src="img/apple.png " alt="apps store"
          /></a>
          <a href="#" class="btn-app">
            <img src="img/play store.png " alt="apps store"
          /></a>
        </div>
      </div>
    </section>

    <!-- section cities -->

    <section class="section-cities">
      <div class="row js--wp-3">
        <h2>We're currently in these cities</h2>

        <div class="row js--wp-3">
          <div class="col span-1-of-4 box">
            <img src="img/new york.jpg" alt="new york" />
            <h3>New york</h3>
            <div class="city-feature">
              <ion-icon
                name="person-circle-outline"
                class="icon-small"
              ></ion-icon>
              3200+ happy eaters
            </div>

            <div class="city-feature">
              <ion-icon name="star-outline" class="icon-small"></ion-icon>
              150+ top chefs
            </div>

            <div class="city-feature">
              <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
              <a href="#" class="btn-city">@healthyfood_ny</a>
            </div>
          </div>

          <div class="col span-1-of-4 box">
            <img src="img/paris.jpg" alt="paris" />
            <h3>Paris</h3>
            <div class="city-feature">
              <ion-icon
                name="person-circle-outline"
                class="icon-small"
              ></ion-icon>
              2100+ happy eaters
            </div>

            <div class="city-feature">
              <ion-icon name="star-outline" class="icon-small"></ion-icon>
              110+ top chefs
            </div>

            <div class="city-feature">
              <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
              <a href="#" class="btn-city">@healthyfood_paris</a>
            </div>
          </div>

          <div class="col span-1-of-4 box">
            <img src="img/las-vegas.jpg" alt="las vegas" />
            <h3>Las Vegas</h3>
            <div class="city-feature">
              <ion-icon
                name="person-circle-outline"
                class="icon-small"
              ></ion-icon>
              1500+ happy eaters
            </div>

            <div class="city-feature">
              <ion-icon name="star-outline" class="icon-small"></ion-icon>
              80+ top chefs
            </div>

            <div class="city-feature">
              <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
              <a href="#" class="btn-city">@healthyfood_vegas</a>
            </div>
          </div>

          <div class="col span-1-of-4 box">
            <img src="img/london.jpg" alt="london" />
            <h3>London</h3>
            <div class="city-feature">
              <ion-icon
                name="person-circle-outline"
                class="icon-small"
              ></ion-icon>
              2300+ happy eaters
            </div>

            <div class="city-feature">
              <ion-icon name="star-outline" class="icon-small"></ion-icon>
              130+ top chefs
            </div>

            <div class="city-feature">
              <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
              <a href="#" class="btn-city">@healthyfood_london</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- section coustomer review -->

    <section id="section-testimonials">
      <div class="row h2-color">
        <h2>Our customers reviews</h2>
      </div>

      <div class="row">
        <div class="col span-1-of-3">
          <blockquote>
            Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
            Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
            dui. Vivamus suscipit tortor eget felis porttitor volutpat.
            <cite>
              <img src="img/customer-2.png" alt="Murtaza" />
              Murtaza otla
            </cite>
          </blockquote>
        </div>

        <div class="col span-1-of-3">
          <blockquote>
            Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
            Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
            dui. Vivamus suscipit tortor eget felis porttitor volutpat.
            <cite>
              <img src="img/customer-1.png" alt="Tasneem" />
              Tasneem chawand
            </cite>
          </blockquote>
        </div>

        <div class="col span-1-of-3">
          <blockquote>
            Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
            Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
            dui. Vivamus suscipit tortor eget felis porttitor volutpat.
            <cite>
              <img src="img/customer.png" alt="Murtaza" />
              Ali asger otla
            </cite>
          </blockquote>
        </div>
      </div>
    </section>

    <!-- section plans -->

    <section class="section-plans js--section-plans" id="plans">
      <div class="row">
        <h2>Start eating healthy today</h2>
      </div>

      <div class="row">
        <div class="col span-1-of-3">
          <div class="plan-box js--wp-4">
            <div>
              <h3>Premium</h3>
              <p class="plan-price">$399 <span>/ month</span></p>
              <p class="plan-price-meal">that's only 13.30$ per meal</p>
            </div>

            <div>
              <ul>
                <li>
                  <ion-icon
                    name="checkmark-outline"
                    class="icon-small"
                  ></ion-icon>
                  1 Meal everyday
                </li>

                <li>
                  <ion-icon
                    name="checkmark-outline"
                    class="icon-small"
                  ></ion-icon>
                  Order 24/7
                </li>

                <li>
                  <ion-icon
                    name="checkmark-outline"
                    class="icon-small"
                  ></ion-icon>
                  Access to new meals
                </li>

                <li>
                  <ion-icon
                    name="checkmark-outline"
                    class="icon-small"
                  ></ion-icon>
                  Free delivery
                </li>
              </ul>
            </div>

            <div>
              <a href="#" class="btn btn-full"> Sign up now</a>
            </div>
          </div>
        </div>

        <div class="col span-1-of-3">
          <div class="plan-box">
            <div>
              <h3>Pro</h3>
              <p class="plan-price">$150 <span>/ month</span></p>
              <p class="plan-price-meal">that's only 15.0$ per meal</p>
            </div>

            <div>
              <ul>
                <li>
                  <ion-icon
                    name="checkmark-outline"
                    class="icon-small"
                  ></ion-icon>
                  1 meal 10days/month
                </li>

                <li>
                  <ion-icon
                    name="checkmark-outline"
                    class="icon-small"
                  ></ion-icon>
                  Order 24/7
                </li>

                <li>
                  <ion-icon
                    name="checkmark-outline"
                    class="icon-small"
                  ></ion-icon>
                  Access to new meals
                </li>

                <li>
                  <ion-icon
                    name="checkmark-outline"
                    class="icon-small"
                  ></ion-icon>
                  Free delivery
                </li>
              </ul>
            </div>

            <div>
              <a href="#" class="btn btn-ghost"> Sign up now</a>
            </div>
          </div>
        </div>

        <div class="col span-1-of-3">
          <div class="plan-box">
            <div>
              <h3>Starter</h3>
              <p class="plan-price">$19 <span>/ meal</span></p>
              <p class="plan-price-meal">&nbsp;</p>
            </div>

            <div>
              <ul>
                <li>
                  <ion-icon
                    name="checkmark-outline"
                    class="icon-small"
                  ></ion-icon>
                  1 Meal
                </li>

                <li>
                  <ion-icon
                    name="checkmark-outline"
                    class="icon-small"
                  ></ion-icon>
                  Order from 8am to 4pm
                </li>

                <li>
                  <ion-icon name="close-outline" class="icon-small"></ion-icon>
                </li>

                <li>
                  <ion-icon
                    name="checkmark-outline"
                    class="icon-small"
                  ></ion-icon>
                  Free delivery
                </li>
              </ul>
            </div>

            <div>
              <a href="#" class="btn btn-ghost"> Sign up now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- section contact form TODO: -->
    <section class="section-form" id="form">
      <div class="row">
        <h2>We're happy to hear from you</h2>
      </div>
      <div class="row">
        <form method="post" action="mailer-new.php" class="contact-form">
          <div class="row">

            <?php
             if($_GET['success'] == 1){
              echo "<div class=\"form-messages success\">Thank you! your message has been sent.</div>";
            }

             if($_GET['success'] == -1){
               echo "<div class=\"form-messages error\">Something wrong!</div>";
            }
            
            ?>

          
          </div>

          <!-- Name  -->
          <div class="row">
            <div class="col span-1-of-3">
              <label for="name"> Name </label>
            </div>

            <div class="col span-2-of-3">
              <input
                type="text"
                name="name"
                id="name"
                class="type"
                placeholder="Your name"
                required
              />
            </div>
          </div>

          <!-- email  -->

          <div class="row">
            <div class="col span-1-of-3">
              <label for="email"> Email </label>
            </div>

            <div class="col span-2-of-3">
              <input
                type="email"
                name="email"
                id="email"
                class="type"
                placeholder="Your Email"
                required
              />
            </div>
          </div>

          <!-- how did you find us -->

          <div class="row">
            <div class="col span-1-of-3">
              <label for="find-us"> How did you find us? </label>
            </div>

            <div class="col span-2-of-3">
              <select name="find-us" id="find-us">
                <option value="Friends">Friends</option>
                <option value="Social media" selected>Social media</option>
                <option value="Advertisement">Advertisement</option>
                <option value="poster">poster</option>
                <option value="others">others</option>
              </select>
            </div>
          </div>

          <!-- newsltter -->

          <div class="row">
            <div class="col span-1-of-3">
              <label for=""> Newletter? </label>
            </div>

            <div class="col span-2-of-3">
              <input type="checkbox" name="news" id="news" checked />
              Yes please
            </div>
          </div>

          <!-- drop us a line -->

          <div class="row">
            <div class="col span-1-of-3">
              <label for="message"> Drop us a line </label>
            </div>

            <div class="col span-2-of-3">
              <textarea
                name="message"
                id="message"
                placeholder="Your message"
              ></textarea>
            </div>
          </div>

          <!-- sign in  button  -->

          <div class="row">
            <div class="col span-1-of-3">
              <label for=""> &nbsp; </label>
            </div>

            <div class="col span-2-of-3">
              <input
                type="submit"
                name="submit"
                value="Send it"
                class="send-it"
              />
            </div>
          </div>
        </form>
      </div>
    </section>

    <!-- footer section TODO: -->
    <footer id="about-us">
      <div class="row">
        <div class="col span-1-of-2">
          <ul class="footer-nav">
            <li>
              <a href="#">About us</a>
            </li>

            <li>
              <a href="#">Blog</a>
            </li>

            <li>
              <a href="#">iOS App</a>
            </li>
            <li>
              <a href="#"> Press</a>
            </li>
            <li>
              <a href="#">Android App</a>
            </li>
          </ul>
        </div>

        <div class="col span-1-of-2">
          <ul class="social-link">
            <li>
              <a href="#"
                ><ion-icon name="logo-facebook" class="facebook"></ion-icon
              ></a>
            </li>

            <li>
              <a href="#"
                ><ion-icon name="logo-twitter" class="twitter"></ion-icon
              ></a>
            </li>

            <li>
              <a href="#"
                ><ion-icon name="logo-instagram" class="instagram"></ion-icon
              ></a>
            </li>

            <li>
              <a href="#"
                ><ion-icon name="logo-youtube" class="youtube"></ion-icon
              ></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row">
        <p>Copyright &copy; 2020 by HealthyFood. All rights reserved.</p>
      </div>
    </footer>

    <!-- google sheet form js  -->
    <script>
      const scriptURL =
        "https://script.google.com/macros/s/AKfycbwd3tVy4v5HEL9rzLoeP7-KTSkvtIoxt2fWmj4VeP7nd0rpxhM/exec";
      const form = document.forms["google-sheet"];

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) =>
            alert("Thanks for Contacting us..! We Will Contact You Soon...")
          )
          .catch((error) => console.error("Error!", error.message));
      });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
  </body>
</html>
