<?php
require 'php/config.php' ;

$sql = 'SELECT * FROM mobil';
$result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Aralaya Rental</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

  </head>

  <body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
      <div
        class="container d-flex justify-content-center justify-content-md-between"
      >
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-phone d-flex align-items-center"
            ><span>+62 87483 6372 32</span></i
          >
          <i class="bi bi-clock d-flex align-items-center ms-4"
            ><span> Mon-Sat : 9AM - 21PM</span></i
          >
        </div>
      </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-lg-between"
      >
        <h1 class="logo me-auto me-lg-0">
          <a href="index.html">Aralaya Rental</a>
        </h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#menu">Vehicle List</a></li>
            <li><a class="nav-link scrollto" href="#events"
                >Terms and Conditions</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
        <a
          href="#menu"
          class="book-a-table-btn scrollto d-none d-lg-flex"
          >Book a vehicle</a
        >
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div
        class="container position-relative text-center text-lg-start"
        data-aos="zoom-in"
        data-aos-delay="100"
      >
        <div class="row">
          <div class="col-lg-8">
            <h1>Welcome to <span>My Rental Vehicle!</span></h1>
            <h2>Explore with Ease, Rent Your Ride Today!"</h2>

            <div class="btns">
              <a href="#menu" class="btn-menu animated fadeInUp scrollto"
                >Our Vehicle List</a
              >
              <a
                href="#book-a-table"
                class="btn-book animated fadeInUp scrollto"
                >Book a Vehicle</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div
              class="col-lg-6 order-1 order-lg-2"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="about-img">
                <img src="assets/image/mobil_about.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>Selamat datang di Aralaya Rental.</h3>
              <p class="fst-italic">
                Di Aralaya Rental, kami berkomitmen untuk menyediakan layanan
                sewa kendaraan yang luar biasa, disesuaikan dengan kebutuhan
                Anda. Dengan pengalaman bertahun-tahun di industri ini, kami
                memahami betapa pentingnya transportasi yang handal untuk
                perjalanan Anda.
              </p>
              <ul>
                <li>
                  <i class="bi bi-check-circle"></i> Visi kami ialah menjadi
                  mitra perjalanan terpercaya, kami ingin menjadi pilihan utama
                  pelanggan dalam memenuhi kebutuhan mobilitas serta menjadi
                  mitra yang dapat diandalkan untuk perjalanan mereka di seluruh
                  dunia.
                </li>
                <li>
                  <i class="bi bi-check-circle"></i> Misi kami ialah memiliki
                  hubungan jangka panjang dengan pelanggan, mitra, dan
                  masyarakat, kami berusaha untuk membangun dan memelihara
                  hubungan yang kuat dengan pelanggan kami, mitra bisnis, dan
                  komunitas lokal dengan integritas, kepercayaan, dan dedikasi.
                </li>
              </ul>
              <p>
                Apakah Anda merencanakan liburan akhir pekan, perjalanan bisnis,
                atau liburan keluarga, percayakan Aralaya Rental untuk
                menyediakan kendaraan yang sempurna sesuai kebutuhan Anda.
                Hubungi kami hari ini untuk mempelajari lebih lanjut tentang
                layanan kami atau untuk melakukan pemesanan. Kami menantikan
                kesempatan untuk melayani Anda!
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Why Us</h2>
            <p>Why Choose Our Rental?</p>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <span>01</span>
                <h4>Kualitas Kendaraan</h4>
                <p>
                  Kami menawarkan armada kendaraan yang terawat dengan baik dan
                  memastikan kenyamanan dan keamanan Anda selama perjalanan.
                </p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="zoom-in" data-aos-delay="200">
                <span>02</span>
                <h4>Harga Terjangkau</h4>
                <p>
                  Kami menawarkan harga yang kompetitif dan opsi sewa yang
                  fleksibel, sesuai dengan anggaran dan jadwal Anda.
                </p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="zoom-in" data-aos-delay="300">
                <span>03</span>
                <h4>Pemesanan yang Mudah</h4>
                <p>
                  Dengan platform pemesanan online yang user-friendly, Anda
                  dapat memesan kendaraan dengan cepat dan mudah dari mana saja
                  dan kapan saja.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- End Why Us Section -->

      <!-- ======= Menu Section ======= -->

      <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>List</h2>
            <p>Check Our Vehicle List</p>
          </div>

        <div id="cards_landscape_wrap-2">
          <div class="container">
            <div class="row">
              
            <?php if (mysqli_num_rows($result) > 0) : ?>
              <?php while ($row = mysqli_fetch_assoc($result)) :?>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="register.php">
                  <div class="card-flyer">
                    <div class="text-box">
                      <div class="image-box">
                        <img
                          src="assets/image/<?= $row['image']?>"
                          alt=""
                        />
                      </div>
                      <div class="text-container">
                        <h6><?= $row['merk']?></h6>
                        <p>Harga/Hari = Rp.<?= $row['harga']?></p>
                        <p>Kapasitas Kendaraan = <?= $row['seat']?></p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php endwhile ; ?>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

      <!-- End Menu Section -->

      <!-- ======= Terms and Condition ======= -->
      <section id="events" class="events">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Terms and Condition</h2>
            <p>Terms anda Condition Of Aralaya Rental</p>
          </div>

          <div
            class="events-slider swiper-container"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img
                      src="assets/image/terms and condition.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Penggunaan Layanan</h3>
                    <p class="fst-italic">
                    1. Pengguna harus berusia minimal 18 tahun atau sesuai dengan batasan usia yang berlaku di yurisdiksi mereka.
                    2. Pengguna harus memberikan informasi yang akurat dan lengkap saat melakukan pendaftaran atau reservasi.
                    3. Pengguna bertanggung jawab sepenuhnya atas semua aktivitas yang terjadi di bawah akun mereka.
                    4. Pengguna dilarang menggunakan layanan ini untuk tujuan ilegal atau melanggar hukum.
                    </p>
                    <p>
                    - Pengguna diharuskan untuk membaca, memahami, dan menyetujui semua syarat dan ketentuan sebelum menggunakan layanan ini.
                    - Penggunaan layanan ini menyiratkan penerimaan sepenuhnya terhadap semua ketentuan yang tercantum di sini.
                    - Kami berhak untuk menolak akses ke layanan kepada siapa pun yang melanggar syarat dan ketentuan ini.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Terms and Condition item -->

              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img
                      src="assets/image/pembayaran.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Pemesanan dan Pembayaran</h3>
                    <p class="fst-italic">
                    1. Pemesanan kendaraan harus dilakukan melalui platform resmi kami.
                    2. Pembayaran harus dilakukan sesuai dengan tarif yang berlaku pada saat pemesanan.
                    3. Pembayaran yang sudah dilakukan tidak dapat dikembalikan kecuali dalam kasus yang diatur oleh kebijakan pembatalan kami.
                    </p>
                    <p>
                    - Pemesanan kendaraan harus dilakukan melalui prosedur yang ditetapkan oleh platform kami.
                    - Setiap biaya dan tarif akan dijelaskan dengan jelas selama proses pemesanan.
                    - Pembayaran harus dilakukan sesuai dengan instruksi yang diberikan pada saat pemesanan, 
                      dan kami tidak bertanggung jawab atas keterlambatan pembayaran yang disebabkan oleh pihak ketiga.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Terms and Condition item -->

              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img
                      src="assets/image/car.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Penggunaan Kendaraan</h3>
                    <p class="fst-italic">
                    1. Pengguna harus mematuhi semua peraturan dan hukum yang berlaku saat menggunakan kendaraan yang disewa.
                    2. Kendaraan harus dikembalikan dalam kondisi yang sama seperti pada saat pengambilan, kecuali ada kerusakan yang disebabkan oleh faktor di luar kendali pengguna.
                    3. Kami berhak untuk memeriksa dan mengevaluasi kondisi kendaraan sebelum dan setelah penyewaan.
                    </p>
                    <p>
                    - Pengguna harus mematuhi semua peraturan dan hukum yang berlaku saat menggunakan kendaraan yang disewa, termasuk namun tidak terbatas pada peraturan lalu lintas dan aturan penggunaan jalan.
                    - Kendaraan harus dikembalikan dalam kondisi yang sama seperti pada saat pengambilan, kecuali ada kerusakan yang disebabkan oleh faktor di luar kendali pengguna. Kerusakan yang melebihi keausan normal dapat dikenakan biaya tambahan.
                    - Kami berhak untuk memeriksa dan mengevaluasi kondisi kendaraan sebelum dan setelah penyewaan, serta mempertahankan bukti seperti foto atau rekaman untuk dokumentasi.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Terms and Condition item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Terms and Condition Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
          </div>
        </div>

        <div class="container" data-aos="fade-up">
          <div class="row mt-5">
            <div class="col-lg-4">
              <div class="info">

                <div class="open-hours">
                  <i class="bi bi-clock"></i>
                  <h4>Open Hours:</h4>
                  <p>
                    Monday-Saturday:<br />
                    09:00 AM - 21:00 PM
                  </p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>aaralayarental@gmail.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+62 859 5932 1163</p>
                </div>
              </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
              <form
                action="forms/contact.php"
                method="post"
                role="form"
                class="php-email-form"
              >
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="form-group mt-3">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="8"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>Aralaya Rental</h3>
                <p>
                  <strong>Phone:</strong> +62 859 5932 1163<br />
                  <strong>Email:</strong> aaralayarental@gmail.com<br />
                </p>
                <div class="social-links mt-3">
                  <a href="#https://www.instagram.com/allyyaana/" class="instagram"
                    ><i class="bx bxl-instagram"></i
                  ></a>
                  <a href="#https://id.linkedin.com/in/allyya-nur-azizah-0089842b0" class="linkedin"
                    ><i class="bx bxl-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Aralaya Rental</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
