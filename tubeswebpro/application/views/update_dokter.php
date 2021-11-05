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
        <form method="post" action="<?= base_url("c_dokter/update") ?>" style="width: 900px;max-width: 900px;margin-top: 40px;">
            <h2 class="text-center">Update Data Akun</h2>
            <?= $this->session->flashdata('message'); ?>
            <p>Nama*</p>
            <div class="form-group"><input class="form-control" type="text" name="name" id="name" placeholder="Nama Sesuai KTP Anda" value="<?= $this->session->userdata('name'); ?>"></div>
            <p>Asal Rumah Sakit*</p>
            <div class="form-group">
                <select class="form-control" id="hospital" name="hospital">
                    <option value=1 <?php if ($res['id_rs'] == 1) {
                                        echo ('selected="selected"');
                                    } ?>>Rumah Sakit Permata Cibubur</option>
                    <option value=2 <?php if ($res['id_rs'] == 2) {
                                        echo ('selected="selected"');
                                    } ?>>Rumah Sakit Hassan Sadikin</option>
                    <option value=3 <?php if ($res['id_rs'] == 3) {
                                        echo ('selected="selected"');
                                    } ?>>Rumah Sakit Persahabatan</option>
                    <option value=4 <?php if ($res['id_rs'] == 4) {
                                        echo ('selected="selected"');
                                    } ?>>Rumah Sakit Permata Depok</option>
                </select>
            </div>
            <p>Jenis Dokter*</p>
            <div class="form-group">
                <div class="form-check"><input class="form-check-input" type="radio" id="du" name="job" value="Dokter Umum" <?php if ($res['jenis_dokter'] == "Dokter Umum") {
                                                                                                                                echo ('checked="checked"');
                                                                                                                            } ?>><label class="form-check-label" for="du">Dokter Umum</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="dsa" name="job" value="Dokter Spesialis Anak" <?php if ($res['jenis_dokter'] == "Dokter Spesialis Anak") {
                                                                                                                                            echo ('checked="checked"');
                                                                                                                                        } ?>><label class="form-check-label" for="dsa">Dokter Spesialis Anak</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="dsj" name="job" value="Dokter Spesialis Jantung" <?php if ($res['jenis_dokter'] == "Dokter Spesialis Jantung") {
                                                                                                                                                echo ('checked="checked"');
                                                                                                                                            } ?>><label class="form-check-label" for="dsj">Dokter Spesialis Jantung</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="dske" name="job" value="Dokter Spesialis Kecantikan" <?php if ($res['jenis_dokter'] == "Dokter Spesialis Kecantikan") {
                                                                                                                                                    echo ('checked="checked"');
                                                                                                                                                } ?>><label class="form-check-label" for="dske">Dokter Spesialis Kecantikan</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="dsk" name="job" value="Dokter Spesialis Kulit" <?php if ($res['jenis_dokter'] == "Dokter Spesialis Kulit") {
                                                                                                                                            echo ('checked="checked"');
                                                                                                                                        } ?>><label class="form-check-label" for="dsk">Dokter Spesialis Kulit</label></div>
            </div>
            <p>Email*</p>
            <div class="form-group"><input class="form-control" type="text" name="email" placeholder="Alamat Email Anda" value="<?= $this->session->userdata('email'); ?>"></div>
            <p>Tanggal Lahir*</p>
            <div class="form-group"><input class="form-control" type="date" name="dob" id="dob" value="<?= $this->session->userdata('birth_date'); ?>"></div>
            <p>Jenis Kelamin*</p>
            <div class="form-group">
                <div class="form-check"><input class="form-check-input" type="radio" id="pria" name="jenisk" value="Pria" <?php if ($this->session->userdata('jenis_kelamin') == 'Pria') {
                                                                                                                                echo ('checked="checked"');
                                                                                                                            } ?>><label class="form-check-label" for="formCheck-1">Pria</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="wanita" name="jenisk" value="Wanita" <?php if ($this->session->userdata('jenis_kelamin') == 'Wanita') {
                                                                                                                                    echo ('checked="checked"');
                                                                                                                                } ?>><label class="form-check-label" for="formCheck-1">Wanita</label></div>
            </div>
            <p>Password*</p>
            <div class="form-group"><input class="form-control" type="password" id="password" name="password" placeholder="Password Lama Anda"></div>
            <div class="form-group text-center"><button class="btn btn-primary" type="submit">Update</button></div>
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