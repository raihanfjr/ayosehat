<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" data-aos="fade" id="mainNav" style="background-color: #00a79d;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="<?= base_url('c_main/indexguest') ?>" style="color: #ffffff;">AYO&nbsp;<i class="fa fa-heartbeat"></i> Sehat</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_main/artikel') ?>" style="color: #ffffff;">Artikel</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_main/aboutus') ?>" style="color: #ffffff;">About US</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_main/bmi') ?>" style="color: #ffffff;">Kalkulator BmI</a></li>
                    <li class="nav-item" role="presentation" style="background-color: #ffffff;border-radius: 10px;"><a class="nav-link js-scroll-trigger" href="<?= base_url('') ?>" style="color: #00a79d;height: 22px;">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div data-aos="fade" class="register-photo" style="margin-top: 55px;padding-top: 140px;padding-bottom: 140px;">
        <div class="form-container">
            <div class="image-holder" style="background-image: url(<?= base_url() ?>assets/img/2.jpg);background-position: center;"></div>
            <form method="post">
                <h2 class="text-center"><strong>Pilih</strong>&nbsp;jenis akun.</h2>
                <div class="form-group"><a class="btn btn-primary btn-block" role="button" href="<?= base_url("c_main/registerp") ?>" style="background-color: rgb(0,167,157);">Pasien</a></div>
                <div class="form-group"><a class="btn btn-primary btn-block" role="button" href="<?= base_url("c_main/registerd") ?>" style="background-color: rgb(0,167,157);">DOKTER</a></div>
                <a class="already" href="<?= base_url("c_main") ?>">Sudah punya akun? Masuk disini.</a>
            </form>
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