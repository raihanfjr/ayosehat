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
    <div class="contact-clean">
        <form method="post" action="<?= base_url('c_dokter/createartikel') ?>" enctype="multipart/form-data" style="width: 900px;max-width: 900px;margin-top: 40px;">
            <h2 class="text-center">Buat Artikel</h2>
            <?= $this->session->flashdata('message'); ?>
            <p>Judul Artikel*</p>
            <div class="form-group"><input class="form-control" type="text" name="title" id="title" placeholder="Judul Artikel"></div>
            <p>Deskripsi Artikel*</p>
            <div class="form-group"><textarea class="form-control" name="body" id="body" placeholder="Deskripsi Artikel Yang Anda Buat" rows="14"></textarea></div>
            <p>Photo Artikel*</p>
            <div class="form-group"><input type="file" name="photo" id="photo"></div>
            <p>Password*</p>
            <div class="form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Password Lama Anda"></div>
            <div class="form-group text-center"><button class="btn btn-primary" type="submit" value="upload">Buat</button></div>
        </form>
    </div>
    <div class="footer-clean" style="background-color: rgb(0,167,157);padding-top: 25px;padding-bottom: 25px;">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 item social">
                        <h3 style="color: rgb(255,255,255);">Website ayosehat.com</h3>
                        <p class="copyright" style="color: rgb(255,255,255);">Ayosehat.com?? 2020</p>
                    </div>
                </div>
            </div>
        </footer>