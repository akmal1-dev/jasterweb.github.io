<?php
  $data   = file_get_contents('data.json');
  $data = json_decode($data, true);
  $data = $data["data"];
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jaster Web</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url().'assets/vendor/aos/aos.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/bootstrap-icons/bootstrap-icons.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/boxicons/css/boxicons.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/glightbox/css/glightbox.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/remixicon/remixicon.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/swiper/swiper-bundle.min.css'?>" rel="stylesheet">

s  <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">JasterWeb</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Bermitra Bersama Kami</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Kami mempunyai team profesional yang dapat membantu bisnis anda</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#about" class="btn-get-started scrollto">Join Us</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="<?php echo base_url().'assets/img/hero.png'?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <?php foreach ($about as $abt) : ?>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
              <p><?= $abt['about_kiri']; ?></p>
              <!-- <ul>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              </ul> -->
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <p><?= $abt['about_kanan']; ?></p>
              <a href="#" class="btn-learn-more">Learn More</a>
            </div>
            <?php endforeach;?>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Layanan</h2>
          <p>Kami menyediakan beberapa jasa layanan</p>
        </div>

          <div class="row">
          <?php foreach ($service as $srv) : ?>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <h4 class="title"><a href=""><?= $srv['judul']; ?></a></h4>
                <p class="description"><?= $srv['deskripsi']; ?></p>
              </div>
            </div>
            <?php endforeach;?>

        </div>


      </div>
    </section><!-- End Services Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Anggota kami yang sudah profesional</p>
        </div>

        <div class="row">

            <?php foreach ($mahasiswa as $mhs) : ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" >
                      <div class="member-img">
                          <img src="image/<?= $mhs["foto"]; ?>" class="img-fluid" alt="">
                          
                      </div>
                      <div class="member-info">
                          <h4><?= $mhs['nama']; ?></h4>
                          <span><?= $mhs['npm']; ?></span>
                      </div>
                    </div>
                </div>
            <?php endforeach;?>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Harga Paket</h2>
          <p>Kami menawarkan harga paket agar lebih murah dan banyak bonus</p>
        </div>

        <div class="row">
        <?php foreach ($pricing as $prc) : ?>
            <div class="col-lg-4 col-md-6">
              <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                <h3><?= $prc['judul']; ?></h3>
                <h4><sup>Rp.</sup><?= $prc['harga']; ?><span> / month</span></h4>
                <ul>
                  <li><?= $prc['reward_satu']; ?></li>
                  <li><?= $prc['reward_dua']; ?></li>
                  <li><?= $prc['reward_tiga']; ?></li>
                  <li><?= $prc['reward_empat']; ?></li>
                  <li><?= $prc['reward_lima']; ?></li>
                  <li><?= $prc['reward_enam']; ?></li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
          <?php endforeach;?>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-7 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
            <?php foreach ($about as $abt) : ?>
              <h3>JasterWeb</h3>
              <p><?= $abt['about_kanan']; ?></p>
              
              <?php endforeach;?>
            </div>
          </div>

          <div class="col-lg-5 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($contact as $cnt) : ?>
              <div class="info">
                <div>
                  <i class="ri-map-pin-line"></i>
                  <p><?= $cnt['alamat']; ?></p>
                </div>

                <div>
                  <i class="ri-mail-send-line"></i>
                  <p><?= $cnt['email']; ?></p>
                </div>

                <div>
                  <i class="ri-phone-line"></i>
                  <p><?= $cnt['telepon']; ?></p>
                </div>

              </div>
            <?php endforeach;?>
          </div>

          <!-- <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>JasterWeb</strong>. All Rights Reserved
          </div>
          <div class="credits">
           
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#hero" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#services" class="scrollto">service</a>
            <a href="#team" class="scrollto">team</a>
            <a href="#pricing" class="scrollto">pricing</a>
            <a href="#contact" class="scrollto">contact</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url().'assets/vendor/purecounter/purecounter_vanilla.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/aos/aos.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/glightbox/js/glightbox.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/isotope-layout/isotope.pkgd.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/swiper/swiper-bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/php-email-form/validate.js'?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url().'assets/js/main.js'?>"></script>

</body>

</html>