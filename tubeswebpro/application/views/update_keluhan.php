<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" data-aos="fade" id="mainNav" style="background-color: #00a79d;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" style="color: #ffffff;" href="<?= base_url('c_pasien'); ?>">AYO&nbsp;<i class="fa fa-heartbeat"></i> Sehat</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="artikel(login).html" style="color: #ffffff;">Artikel</a></li>
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
    <div class="contact-clean">
        <form method="post" action="<?= base_url("c_pasien/updatekeluhan/") . $res['konsultasi_id'] ?>" style="width: 900px;max-width: 900px;margin-top: 40px;">
            <h2 class="text-center">Update Data Pasien</h2>
            <p>Nama*</p>
            <div class="form-group"><input class="form-control" type="text" name="name" id="name" placeholder="Nama Sesuai KTP Anda" value="<?= $res['name'] ?>" readonly></div>
            <p>Email*</p>
            <div class="form-group"><input class="form-control" type="text" name="email" id="email" placeholder="Alamat Email Anda" value="<?= $res['email'] ?>" readonly></div>
            <p>Tanggal Lahir*</p>
            <div class="form-group"><input class="form-control" type="date" name="dob" id="dob" value="<?= $res['birth_date'] ?>" readonly></div>
            <p>Jenis Kelamin*</p>
            <div class="form-group">
                <div class="form-check"><input class="form-check-input" type="radio" name="jenisk" id="jenisk" <?php if ($res['jenis_kelamin'] == 'Pria') {
                                                                                                                    echo ('checked="checked"');
                                                                                                                } ?><label class="form-check-label" for="formCheck-1">Pria</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" name="jenisk" id="jenisk" <?php if ($res['jenis_kelamin'] == 'Wanita') {
                                                                                                                    echo ('checked="checked"');
                                                                                                                } ?><label class="form-check-label" for="formCheck-1">Wanita</label></div>
            </div>
            <p>Nama Dokter*</p>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Nama Dokter Yang Anda Pilih" value="<?= $res['dr_name'] ?>" readonly></div>
            <p>Nama Rumah Sakit*</p>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Nama Rumah Sakit Yang Anda Pilih" value="<?= $res['hospitals_name'] ?>" readonly></div>
            <p>Tanggal Pertemuan Konsultasi*</p>
            <div class="form-group"><input class="form-control" type="date" name="dok" id="dok" value="<?= $res['konsultasi_date'] ?>"></div>
            <p>Keluhan*</p>
            <div class="form-group"><textarea class="form-control" name="keluhan" id="keluhan" placeholder="Keluhan Medis Yang Anda Rasakan" rows="14"><?= $res['keluhan'] ?></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">Update</button></div>
        </form>
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