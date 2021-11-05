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
    <div class="article-clean">
        <div class="container">
            <div class="row" style="margin-top: 55px;">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro"></div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade" class="highlight-phone" style="background-image: url(<?= base_url() ?>assets/img/slidedokter.jpg);background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro" style="background-color: rgba(0,167,157,0.47);padding-top: 10px;padding-left: 10px;padding-bottom: 10px;padding-right: 10px;border-radius: 10px;">
                        <h1 class="text-center" style="color: rgb(255,255,255);">Cari Rumah Sakit</h1>
                        <p class="text-justify" style="color: rgb(246,252,255);">Halaman untuk mencari dokter berdasarkan rumah sakit yang Anda inginkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="text" placeholder="Cari Rumah Sakit">
                            <div class="input-group-append"><button class="btn btn-light" type="button">Cari</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    $no = 1;
    foreach ($rs as $rs) {
        echo ('
    <div data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center" style="padding-bottom: 15px;padding-top: 15px;"><i class="fas fa-hospital-alt" style="font-size: 240px;"></i></div>
                <div class="col-md-8 text-center" style="padding-bottom: 15px;">
                    <h1 class="text-center border rounded" style="background-color: #00a79d;color: rgb(255,255,255);margin-top: 15px;margin-bottom: 15px;">' . $rs->hospitals_name . '</h1><i class="fas fa-city" style="font-size: 45px;"></i>
                    <p class="text-center" style="margin-bottom: 0px;">' . $rs->address . '<br></p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Dokter</th>
                                    <th>Jenis Dokter</th>
                                </tr>
                            </thead>
                            <tbody>');
        foreach ($res as $r) {
            if ($no == $r->hospitals_id) {
                echo ('
                                <tr>
                                    <td>Dr. ' . $r->name . '</td>
                                    <td>' . $r->jenis_dokter . '</td>
                                </tr>');
            }
        }
        echo ('</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>');
        $no++;
    }
    ?>
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