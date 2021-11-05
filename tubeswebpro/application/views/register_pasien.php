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
    <div data-aos="fade" class="register-photo" style="margin-top: 55px;padding-top: 91px;padding-bottom: 90px;">
        <div class="form-container">
            <div class="image-holder" style="background-image: url(<?= base_url(''); ?>assets/img/dokter4.jpg);background-position: center;"></div>
            <form method="post" action="<?= base_url("c_main/registerp") ?>">
                <h2 class="text-center"><strong>Buat</strong>&nbsp;akun pasien.</h2>
                <div class="form-group">
                    <p>Nama Lengkap</p><input class="form-control" type="text" name="name" id="name" placeholder="Nama Lengkap di KTP" value="<?= set_value('name'); ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <p>Email</p><input class="form-control" type="text" name="email" id="email" placeholder="Email Aktif Anda" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <p>Tanggal Lahir</p><input class="form-control" type="date" name="dob" id="dob" value="<?= set_value('date'); ?>">
                    <?= form_error('dob', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <p>Password</p><input class="form-control" type="password" name="password1" id="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <p>Ulangi Password</p><input class="form-control" type="password" name="password2" id="password2" placeholder="Password (Ulangi)">
                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <p>Jenis Kelamin</p>
                <div class="form-check"><input class="form-check-input" type="radio" name="jenisk" id="jenisk" value="Pria"><label class="form-check-label" for="jenisk">Pria</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" name="jenisk" id="jenisk" value="Wanita"><label class="form-check-label" for="jenisk">Wanita</label></div>
                <?= form_error('jenisk', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(0,167,157);">Daftar PASIEN</button></div><a class="already" href="<?= base_url("c_main"); ?>">Sudah punya akun? Masuk disini.</a>
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