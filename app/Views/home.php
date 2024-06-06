<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Fadhillah Dinurahman</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url("template")?>/css/bootstrap.css" />
  <!-- fonts awesome style -->
  <link href="<?= base_url("template")?>/css/font-awesome.min.css" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url("template")?>/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= base_url("template")?>/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <div class="custom_menu-btn">
          <button onclick="openNav()">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>
        </div>
        <div id="myNav" class="overlay">
          <div class="menu_btn-style ">
            <button onclick="closeNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div class="overlay-content">
            <a class="active" href="/">
              Beranda
            </a>
            <a class="" href="/about">
              Tentang Saya
            </a>
            <a class="" href="/portfolio">
              Portfolio
            </a>
          </div>
        </div>
        <a class="navbar-brand" href="/">
          <span>
            Fadhillah Dinurahman
          </span>
        </a>
        <a href="#callus" class="call_btn">
          Hubungi Saya
        </a>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div class="container-fluid">
        <div class="row">
          <div class="detail-box col-lg-4 col-md-5">
            <div id="" class="carousel slide slider_text_carousel" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="detail_content">
                    <div>
                      <h1>
                        Biografi <br>
                        Studio
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="img-box col-lg-8 col-md-7">
            <div id="" class="carousel slide slider_image_carousel carousel-fade" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?= base_url("template")?>/images/slider-img.jpg" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url("template")?>/images/slider-img2.jpg" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url("template")?>/images/slider-img3.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="carousel_btn-box">
              <a class="slider_btn_prev" href="" role="button" data-slide="prev">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="slider_btn_next" href="" role="button" data-slide="next">
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="img-box col-lg-8 col-md-7">
          <img src="<?= base_url("template")?>/images/about-img.jpg" alt="" />
        </div>
        <?php foreach ($fadhillah as $data) : ?>
        <div class="detail-box detail_box_common col-lg-4 col-md-5 text_center">
          <div class="heading_container heading_center">
            <h2>
                <?= $data->title; ?>
            </h2>
          </div>
          <p>
            <?= $data->subtitle; ?>
          </p>
        </div>
        <?php endforeach?>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- portfolio section -->

  <section class="portfolio_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Portfolio
        </h2>
      </div>
      <div class="portfolio_container ">
        <div class="box-1">
          <div class="img-box b-1">
            <img src="<?= base_url("template")?>/images/p1.jpg" alt="">
            <div class="btn-box">
              <a href="" class="btn-1">
                <i class="fa fa-share-alt" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="img-box b-2">
            <img src="<?= base_url("template")?>/images/p2.jpg" alt="">
            <div class="btn-box">
              <a href="" class="btn-1">
                <i class="fa fa-share-alt" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="box-2">
          <div class="box-2-top">
            <div class="img-box b-3">
              <img src="<?= base_url("template")?>/images/p3.jpg" alt="">
              <div class="btn-box">
                <a href="" class="btn-1">
                  <i class="fa fa-share-alt" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="box-3">
          <div class="img-box b-1">
            <img src="<?= base_url("template")?>/images/p4.jpg" alt="">
            <div class="btn-box">
              <a href="" class="btn-1">
                <i class="fa fa-share-alt" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="img-box b-2">
            <img src="<?= base_url("template")?>/images/p5.jpg" alt="">
            <div class="btn-box">
              <a href="" class="btn-1">
                <i class="fa fa-share-alt" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div>
      </div>
    </div>
  </section>
  <!-- end portfolio section -->

  <!-- contact section -->
  
  <section class="contact_section" id="callus">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 detail-box detail_box_common">
          <div>
            <div class="heading_container">
              <h2>
                Get In Touch
              </h2>
            </div>
            <div class="info_contact">
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Lokasi
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6171.8184437400605!2d106.89198574200334!3d-6.910248390508214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e683633c6144fc9%3A0xa704012d9f4e7d5a!2sSukamanah%2C%20Kec.%20Cisaat%2C%20Kabupaten%20Sukabumi%2C%20Jawa%20Barat%2043152!5e0!3m2!1sid!2sid!4v1717090117823!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </span>
                </a>
                <a href="https://wa.me/6289516814943" target="_blank">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Whatsapp +62 895 1681 4943
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    m.fadhillah1218@gmail.com
                  </span>
                </a>
              </div>
              <div class="info_social">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
  
  <script src="<?= base_url("template")?>/js/jquery-3.4.1.min.js"></script>
  <script src="<?= base_url("template")?>/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
  <script src="<?= base_url("template")?>/js/custom.js"></script>

</body>

</html>