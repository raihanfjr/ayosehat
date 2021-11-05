<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" data-aos="fade" id="mainNav" style="background-color: #00a79d;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" style="color: #ffffff;" href="<?= base_url('c_main/indexguest') ?>">AYO&nbsp;<i class="fa fa-heartbeat"></i> Sehat</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
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
                        <h1 class="text-center" style="color: rgb(255,255,255);">Artikel</h1>
                        <p class="text-justify" style="color: rgb(246,252,255);">Artikel yang berisi tips kesehatan, berita kesehatan, terupdate dan terkini<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <?php
    foreach ($res as $r) {
        echo ('
    <div data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><img src="' . base_url() . 'uploads/' . $r->photo . '" style="max-width: 350px;padding-top: 15px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;"></div>
                <div class="col-md-8">
                    <h1 class="text-center border rounded" style="background-color: #00a79d;color: rgb(255,255,255);margin-top: 15px;margin-bottom: 15px;">' . $r->title . '</h1>
                    <p class="text-justify" style="margin-bottom: 0px;">' . substr($r->body, 0, 600) . "..." . '<br><br></p>
                    <h1 class="text-center" style="background-color: #ffffff;color: rgb(255,255,255);margin-top: 0px;margin-bottom: 0px;"><a class="btn btn-primary text-left" role="button" style="background-color: rgb(234,1,1);" href="' . base_url('c_main/detilartikel/') . $r->id_artikel . '">Read MORE</a></h1>
                </div>
            </div>
        </div>
    </div>');
    }
    ?>
    <!-- <div data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><img src="<?= base_url() ?>assets/img/health.png" style="max-width: 350px;padding-top: 15px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;"></div>
                <div class="col-md-8">
                    <h1 class="text-center border rounded" style="background-color: #00a79d;color: rgb(255,255,255);margin-top: 15px;margin-bottom: 15px;">Cara menghapus bekas jerawat</h1>
                    <p class="text-justify" style="margin-bottom: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ex turpis, accumsan et est sed, faucibus dapibus est. Cras at cursus magna, at porttitor est. Aliquam erat volutpat. Morbi lobortis justo id nisl sodales tempus. Duis
                        pulvinar odio at dolor molestie, at gravida eros ultrices. Curabitur varius sodales posuere. In id vulputate urna, egestas feugiat lectus.&nbsp;<br><br></p>
                    <h1 class="text-center" style="background-color: #ffffff;color: rgb(255,255,255);margin-top: 0px;margin-bottom: 0px;"><a class="btn btn-primary text-left" role="button" style="background-color: rgb(234,1,1);" href="detil_artikel(dokter).html">Read MORE</a></h1>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><img src="<?= base_url() ?>assets/img/health.png" style="max-width: 350px;padding-top: 15px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;"></div>
                <div class="col-md-8">
                    <h1 class="text-center border rounded" style="background-color: #00a79d;color: rgb(255,255,255);margin-top: 15px;margin-bottom: 15px;">Update COVID-19 (22 April 2020)</h1>
                    <p class="text-justify" style="margin-bottom: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ex turpis, accumsan et est sed, faucibus dapibus est. Cras at cursus magna, at porttitor est. Aliquam erat volutpat. Morbi lobortis justo id nisl sodales tempus. Duis
                        pulvinar odio at dolor molestie, at gravida eros ultrices. Curabitur varius sodales posuere. In id vulputate urna, egestas feugiat lectus.&nbsp;<br><br></p>
                    <h1 class="text-center" style="background-color: #ffffff;color: rgb(255,255,255);"><a class="btn btn-primary text-left" role="button" style="background-color: rgb(234,1,1);" href="detil_artikel(dokter).html">Read MORE</a></h1>
                </div>
            </div>
        </div>
    </div> -->
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