<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" data-aos="fade" id="mainNav" style="background-color: #00a79d;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" style="color: #ffffff;" href="<?= base_url('c_dokter'); ?>">AYO&nbsp;<i class="fa fa-heartbeat"></i> Sehat</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_dokter/cariartikel') ?>" style="color: #ffffff;">Artikel</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_dokter/aboutus') ?>" style="color: #ffffff;">About US</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_dokter/bmi') ?>" style="color: #ffffff;">Kalkulator BmI</a></li>
                    <li class="nav-item" role="presentation" style="margin-top: 5px;">
                        <div class="nav-item dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="padding-top: 8px;padding-right: 16px;padding-bottom: 8px;padding-left: 16px;color: rgb(0,167,157);background-color: #ffffff;border-radius: 10PX;"><strong>Dr. <?= $this->session->userdata('name'); ?></strong></a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="<?= base_url('c_dokter/update') ?>">Update Akun</a><a class="dropdown-item" role="presentation" href="<?= base_url('c_dokter/createartikel'); ?>">Buat Artikel</a><a class="dropdown-item" role="presentation" href="<?= base_url('c_dokter/applykeluhan') ?>">Lihat Data Apply</a><a class="dropdown-item" role="presentation" href="<?= base_url('c_main/logout'); ?>">Logout&nbsp;&nbsp;<i class="icon-logout"></i></a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div data-aos="fade" class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(&quot;assets/img/3.jpg&quot;);background-position: center;margin-top: 55px;">
                    <div class="box" style="margin: 123px;margin-top: 150px;margin-right: 150px;margin-left: 150px;background-color: rgba(0,167,157,0.57);padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;border-radius: 10px;max-width: 470px;min-width: 200px;max-height: 187px;min-height: 187px;text-align: center;">
                        <h3 class="name" style="color: rgb(255,255,255);"><strong>AYO&nbsp;</strong><i class="fa fa-heartbeat"></i><strong>&nbsp;SEHAT</strong></h3>
                        <p class="description" style="color: rgb(255,255,255);text-align: left;">Menyediakan informasi tips kesehatan dan artikel terkini dan terupdate dalam dunia kesehatan dan medis. Artikel ditulis oleh dokter professional terpercaya.</p><a class="btn btn-primary" role="button" style="background-color: rgb(244,58,58);" href="<?= base_url('c_dokter/aboutus') ?>">ABOUT US</a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url(&quot;assets/img/5.jpg&quot;);background-position: top;margin-top: 55px;">
                    <div class="box" style="margin: 123px;margin-top: 150px;margin-right: 150px;margin-left: 150px;background-color: rgba(0,167,157,0.57);padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;border-radius: 10px;max-width: 470px;min-width: 200px;max-height: 187px;min-height: 187px;text-align: center;">
                        <h3 class="name" style="color: rgb(255,255,255);"><strong>AYO&nbsp;</strong><i class="fa fa-heartbeat"></i><strong>&nbsp;SEHAT</strong></h3>
                        <p class="description" style="color: rgb(255,255,255);text-align: left;">Website yang menjadi jembatan antara pasien dan dokter untuk menentukan jadwal untuk melakukan konsultasi yang bisa dilakukan tanpa terbatas dengan tempat dan waktu.</p><a class="btn btn-primary" role="button" style="background-color: rgb(244,58,58);" href="<?= base_url('c_dokter/aboutus') ?>">ABOUT US</a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url(&quot;assets/img/obat.jpg&quot;);background-position: center;margin-top: 55px;">
                    <div class="box" style="margin: 123px;margin-top: 150px;margin-right: 150px;margin-left: 150px;background-color: rgba(0,167,157,0.57);padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;border-radius: 10px;max-width: 470px;min-width: 200px;max-height: 187px;min-height: 187px;text-align: center;">
                        <h3 class="name" style="color: rgb(255,255,255);"><strong>AYO&nbsp;</strong><i class="fa fa-heartbeat"></i><strong>&nbsp;SEHAT</strong></h3>
                        <p class="description" style="color: rgb(255,255,255);text-align: left;">Menyediakan informasi untuk mencari rumah sakit dan apotek. Hasil yang akurat karena ayosehat.com telah bekerja sama dengan rumah sakit &amp; farmasi ternama.</p><a class="btn btn-primary" role="button" style="background-color: rgb(244,58,58);" href="<?= base_url('c_dokter/aboutus') ?>">ABOUT US</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div data-aos="fade-up" class="features-boxed">
        <div class="container">
            <div class="intro"></div>
            <div class="row justify-content-center features" style="padding-bottom: 0px;">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-stethoscope icon" style="color: #00a79d;"></i>
                        <h3 class="name">Konsultasi dengan dokter</h3>
                        <p class="description">Dokter professional dari berbagai daerah Indonesia selalu siap untuk melakukan konsultasi dengan Anda.</p><a class="btn btn-primary" role="button" style="background-color: rgb(244,58,58);color: rgb(255,255,255);" href="<?= base_url('c_dokter/cdokter') ?>">Cari Dokter</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-hospital-o icon" style="color: rgb(0,167,157);"></i>
                        <h3 class="name">Rumah Sakit</h3>
                        <p class="description">Ayosehat.com memiliki data rumah sakit di seluruh Indonesia. Cari rumah sakit di sekitar Anda sekarang.</p><a class="btn btn-primary" role="button" style="background-color: rgb(244,58,58);" href="<?= base_url('c_dokter/chospital') ?>">Cari rumah sakit</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fas fa-briefcase-medical icon" style="color: rgb(0,167,157);"></i>
                        <h3 class="name">Obat</h3>
                        <p class="description">Ayosehat.com telah bekerja sama dengan berbagai perusahaan terkenal seperti Apotek K24 dan Kimia Farma</p><a class="btn btn-primary" role="button" style="background-color: rgb(244,58,58);" href="<?= base_url('c_dokter/capotek') ?>">Cari Apotek</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="margin-bottom: 0px;padding-top: 0px;color: rgb(0,167,157);">Dokter di Ayosehat.com</h2>
            </div>
            <div class="row people" style="padding-top: 40px;padding-bottom: 0px;">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img src="assets/img/dokter1.png" style="max-width: 160px;max-height: 230px;">
                        <h3 class="name" style="color: rgb(0,167,157);">Johnson</h3>
                        <p class="title" style="color: rgb(23,23,23);">Dokter Jantung</p>
                        <p class="description">Rumah Sakit Permata Cibubur, Jakarta Timur</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img src="assets/img/dokter3.jpg" style="max-width: 160px;max-height: 230px;">
                        <h3 class="name" style="color: rgb(0,167,157);">Pharsa</h3>
                        <p class="title" style="color: rgb(23,23,23);">Dokter Kecantikan</p>
                        <p class="description">Rumah Sakit TNI Angkatan Laut Mintoharjo, Jakarta</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img src="assets/img/dokter2.jpg" style="max-height: 230px;">
                        <h3 class="name" style="color: rgb(0,167,157);">Hanzo</h3>
                        <p class="title" style="color: rgb(23,23,23);">Dokter Paru-paru</p>
                        <p class="description">Rumah Sakit Hasan Sadikin, Bandung, Jawa Barat</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-clean" style="background-color: rgb(0,167,157);padding-top: 25px;padding-bottom: 25px;">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 item social">
                        <h3 style="color: rgb(255,255,255);">Website ayosehat.com</h3>
                        <p class="copyright" style="color: rgb(255,255,255);">Ayosehat.com© 2020</p>
                    </div>
                </div>
            </div>
        </footer>