<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" data-aos="fade" id="mainNav" style="background-color: #00a79d;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" style="color: #ffffff;" href="<?= base_url('c_pasien'); ?>">AYO&nbsp;<i class="fa fa-heartbeat"></i> Sehat</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_pasien/cariartikel') ?>" style="color: #ffffff;">Artikel</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_pasien/aboutus'); ?>" style="color: #ffffff;">About US</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_pasien/bmi'); ?>" style="color: #ffffff;">Kalkulator BmI</a></li>
                    <li class="nav-item" role="presentation" style="margin-top: 5px;">
                        <div class="nav-item dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="padding-top: 8px;padding-right: 16px;padding-bottom: 8px;padding-left: 16px;color: rgb(0,167,157);background-color: #ffffff;border-radius: 10PX;"><strong><?= $this->session->userdata('name'); ?></strong></a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="<?= base_url('c_pasien/update'); ?>">Update Akun</a><a class="dropdown-item" role="presentation" href="<?= base_url('c_pasien/applykeluhan') ?>">Lihat Data Apply</a><a class="dropdown-item" role="presentation" href="<?= base_url('c_main/logout'); ?>">Logout&nbsp;&nbsp;<i class="icon-logout"></i></a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div data-aos="fade-up" class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2" style="padding-top: 55px;">
                    <div class="intro">
                        <h1 class="text-center" style="color: rgb(0,167,157);">About Us</h1>
                        <p class="text-center"> </p><img class="img-fluid" src="<?= base_url()  ?>assets/img/2.jpg">
                    </div>
                    <section id="faq" style="padding: 2px;margin: 11px;">
                        <hr class="star-dark mb-5">
                        <div class="container">
                            <div class="faqelement"><button class="btn btn-primary faq on" type="button" style="box-shadow: none;">Apa itu ayosehat.com?</button>
                                <div class="panel">
                                    <p>Ayosehat Menyediakan informasi tips kesehatan dan artikel terkini dan terupdate dalam dunia kesehatan dan medis. Artikel ditulis oleh dokter professional terpercaya.</p>
                                    <p>Website yang menjadi jembatan antara pasien dan dokter untuk menentukan jadwal untuk melakukan konsultasi yang bisa dilakukan tanpa terbatas dengan tempat dan waktu.</p>
                                    <p>Ayosehat juga Menyediakan informasi untuk mencari rumah sakit dan apotek. Hasil yang akurat karena ayosehat.com telah bekerja sama dengan rumah sakit &amp; farmasi ternama.</p>
                                </div>
                            </div><br>
                            <div class="faqelement"><button class="btn btn-primary faq on" type="button" style="box-shadow: none;">Bagaimana cara mengajukan janji konsultasi dengan dokter?</button>
                                <div class="panel">
                                    <p>Caranya sangat mudah yaitu:</p>

                                    <ol>
                                        <li>Daftarkan diri anda di website AyoSehat</li>
                                        <li>Cari dokter bedasarkan data dokter, ataupun lokasi rumah sakitnya</li>
                                        <li>Tekan Buat Janji, lalu lengkapi formulir termasuk waktu yang anda inginkan</li>
                                        <li>Tunggu response dari sang dokter di bagian Data apply</li>
                                        <li>Jika disetujui, Selamat anda bisa langsung berkonsultasi dengan dokter pada waktu yang disetujui !
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <hr class="star-dark mb-5">
                        </div>
                    </section>
                    <div class="text">
                        <figure></figure>
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