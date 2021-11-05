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
                        <h1 class="text-center" style="color: rgb(255,255,255);">Data Apply</h1>
                        <p class="text-justify" style="color: rgb(246,252,255);">Halaman berisi data yang sudah di apply untuk melakukan konsultasi. Anda bisa membatalkan janji atau konsultasinya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-top: 15px;">
                    <h1 class="text-center" style="margin-top: 20px;margin-bottom: 25px;">Data Apply Rumah Sakit</h1>
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 30px;margin-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pasien</th>
                                    <th>Nama Dokter</th>
                                    <th>Nama Rumah Sakit</th>
                                    <th>Tanggal Konsultasi</th>
                                    <th>Kondisi</th>
                                    <th>Update Data</th>
                                    <th>Batal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($res as $r) {
                                    echo ('
                                <tr>
                                    <td>' . $no++ . '</td>
                                    <td>' . $r->name . '</td>
                                    <td>Dr. ' . $r->dr_name . '</td>
                                    <td>' . $r->hospitals_name . '</td>
                                    <td>' . $r->konsultasi_date . '</td>
                                    <td>' . $r->kondisi . '</td>
                                    <td><a class="btn btn-info" role="button" href="' . base_url('c_pasien/updatekeluhan/') . $r->konsultasi_id . '">Update</a></td>
                                    <td><a class="btn btn-danger" href="' . base_url('c_pasien/deletekeluhan/') . $r->konsultasi_id . '">Batal</a></td>
                                </tr>');
                                }
                                ?>
                                <!-- <tr>
                                    <td>2.</td>
                                    <td>Muhamad Zulkarnaen Yudha Bahari</td>
                                    <td>Dr. M. Raihan Fijar</td>
                                    <td>Rumah Sakit Hasan Sadikin</td>
                                    <td>18 Agustus 2020</td>
                                    <td>Belum Konfirmasi</td>
                                    <td><a class="btn btn-info" role="button" href="update_pasien(login).html">Update</a></td>
                                    <td><button class="btn btn-danger" type="submit" >Batal</button></td>
                                </tr> -->
                            </tbody>
                        </table>
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