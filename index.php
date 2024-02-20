<?php
session_start();
$username = '';

if (isset($_SESSION['logid'])) {
    $DB_HOST = "localhost";
    $DB_USER = "root";
    $DB_PASS = "root";
    $DB_NAME = "adv";
    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $logid = $_SESSION['logid'];
    $query = "SELECT username FROM login WHERE logid = '$logid'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
    }

    $conn->close();
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OtakuHub Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">OtakuHub</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <?php include('includes/navbar.php') ?>
       

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Welcome <?php echo $username; ?></h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Fellow Otaku! this is your personalized website to collect your different anime, manga, and Waifu.</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#why-us" class="btn-get-started">Get Started</a>
           
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <!-- ======= Animanga Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Best Anime and Manga</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('assets/img/cid.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Fate/Grand Order</h3>
                    <h4 class="mb-3">Synopsis.</h4>
                    <p>The story is set in 2015. A powerful organization utilizing both magic and science at that time called the Organization for the Preservation of Human Order, Finis Chaldea, or simply Chaldea for short, is tasked with saving humanity from extinction.</p>
                  </div>
                </div><!-- End slide items -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Kimetsu no Yaiba</h3>
                    <h4 class="mb-3">Synopsis.</h4>
                    <p>A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">One Piece</h3>
                    <h4 class="mb-3">Synopsis.</h4>
                    <p>ONE PIECE is a legendary high-seas quest unlike any other. Luffy is a young adventurer who has longed for a life of freedom ever since he can remember. He sets off from his small village on a perilous journey to find the legendary fabled treasure, ONE PIECE, to become King of the Pirates!</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Kage no Jitsuryokusha ni Naritakute!</h3>
                    <h4 class="mb-3">Synopsis.</h4>
                    <p>In modern-day Japan, a boy named Minoru Kageno aspires to be a mastermind, exerting power from the shadows. During his clandestine training, an unforeseen accident occurs when he gets hit by a truck, leading to his untimely demise. To his surprise, he finds himself reborn in a fantastical realm as Cid Kagenou.</p>
                  </div>
                </div><!-- End slide item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Animanga Section -->

   <!-- ======= Quote Section ======= -->
   <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>I'm not Lazy I'm just Highly Motivated to do Nothing.</h3>
            <p>-Houtarou Oreki.</p>
          </div>
        </div>

      </div>
    </section><!-- End Quote Section -->


    <!-- ======= Genre Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Genres</h2>

        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-dribbble" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Shounen</a></h4>
              <p class="description">Shonen is the most popular one among all the five types of anime. You must have heard the word ‘Shonen’ at least once in your life even if you are not into anime. The literal meaning of Shōnen is a boy. This type of anime is generally targeted toward teen boys (12-18 years old) but even teen girls like to watch them.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-incognito" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Seinen</a></h4>
              <p class="description">The literal meaning of Seinen is “youth,” and the anime and manga in this category are targeted toward adult men. So, this anime type covers the audience who are 18 and above in age, predominantly males but is also liked by females.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-globe2" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Isekai</a></h4>
              <p class="description">Protagonist dies in the real world and gets reincarnated into a magical world/fantasy land.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-heart" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Romance</a></h4>
              <p class="description">Romance anime explores love and relationships between its characters. This genre often focuses on the development of romantic feelings between its characters, as well as the challenges they face in maintaining those relationships.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Slice of Life</a></h4>
              <p class="description">Captures the daily lives of the characters and the drama around them.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-airplane-engines" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Mecha</a></h4>
              <p class="description">Mecha anime features giant robots, or mecha, as the primary focus of the story. This genre often showcases epic battles between towering mechanical robots, as well as the personal struggles and character development of their pilots.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Genre Section -->

    <!-- ======= Quote Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>I'm not Lazy, I'm just Conserving my Energy.</h3>
            <p>-Houtarou Oreki.</p>
          </div>
        </div>

      </div>
    </section><!-- End Quote Section -->


    <!-- ======= Waifu Section ======= -->
    <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Best Waifu of All Time</h2>

        </div>

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/miku.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-author">  5-toubun no Hanayome</span>
              </div>
              <h3 class="post-title">Miku Nakano</h3>
              <p>Miku Nakano is the one of the main characters in the manga and anime series 5-toubun no Hanayome. She is one of the quintuplet sisters, along with Ichika, Nino, Yotsuba, and Itsuki Nakano. Miku is the third eldest of the siblings and serves as one of the main love interests for the protagonist, Futaro Uesugi.</p>
              <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/shiro.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-author"> No Game No Life</span>
              </div>
              <h3 class="post-title">Shiro Nai</h3>
              <p>Shiro is the main female protagonist of the No Game No Life series and the calm and calculative half of the siblings.Abandoned by her parents, Shiro is an 11-year-old shut-in gamer. Along with her step-brother, Sora, they form Blank/Kuhaku. Sora's dad married Shiro's mother, both having remarried, thus making Shiro and Sora step-siblings.</p>
              <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/kurumi.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-author"> Date A Alive</span>
              </div>
              <h3 class="post-title">Kurumi Tokisaki</h3>
              <p> Kurumi Tokisaki is the third Spirit to appear. Due to her brutal actions, she is referred to as the Worst Spirit. She is also the first Spirit to appear as an antagonist in the Date A Live series.</p>
              <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/nezuko.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-author"> Kimetsu No Yaiba</span>
              </div>
              <h3 class="post-title">Nezuko Kamado</h3>
              <p>She is a demon and the younger sister of Tanjiro Kamado and one of the two remaining members of the Kamado family. Formerly a human, she was attacked and transformed into a demon by Muzan Kibutsuji.</p>
              <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/himiko.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-author"> Boku No Hero</span>
              </div>
              <h3 class="post-title">Himiko Toga</h3>
              <p>Himiko Toga is a major antagonist of the My Hero Academia manga and anime series.She was a member of the League of Villains, affiliated with the Vanguard Action Squad, and later becoming one of the nine lieutenants of the Paranormal Liberation Front.</p>
              <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/Jeanne.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-author"> Fate/Grand Order</span>
              </div>
              <h3 class="post-title">Jeanne D'arc Alter</h3>
              <p>Jeanne D'arc Alter, she represents the Alter counterpart of Jeanne d'Arc. However, being designated as an 'Alter' does not indicate a mere alternate aspect of Jeanne d'Arc. Instead, she represents the embodiment of vengeance attributed to Gilles de Rais, the French Army's marshal who grieved for Jeanne d'Arc's death, fabricated by means of the Holy Grail shortly after Jeanne's execution in 1431. </p>
              <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>


          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/nico.png" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-author"> One Piece</span>
              </div>
              <h3 class="post-title">Nico Robin</h3>
              <p>Nico Robin, also known by her epithet "Devil Child" and the "Light of the Revolution", is the archaeologist of the Straw Hat Pirates and one of the Senior Officers of the Straw Hat Grand Fleet. She is the seventh member of the crew and the sixth to join, doing so at the end of the Arabasta Arc.</p>
              <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/yor.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-author"> Family X Spy</span>
              </div>
              <h3 class="post-title">Yor Forger</h3>
              <p> Yor Forger is the tritagonist of the SPY x FAMILY series. While she works as an ordinary office clerk at Berlint City Hall, she also leads a secret life as a Garden assassin under the code name "Thorn Princess".</p>
              <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->
   <!-- ======= Quote Section ======= -->
   <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Lazy is such an Ugly Word, I Prefer the Term Selective Participation.</h3>
            <p>-Houtarou Oreki.</p>
           
          </div>
        </div>

      </div>
    </section><!-- End Quote Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  <?php include('includes/footer.php') ?>
   
  </footer><!-- End Footer --><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>