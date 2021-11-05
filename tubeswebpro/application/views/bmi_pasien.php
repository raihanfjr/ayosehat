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
    <div data-aos="fade" class="highlight-phone" style="background-image: url(<?= base_url() ?>assets/img/weight.jpg);background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro" style="background-color: rgba(0,167,157,0.64);padding-top: 10px;padding-left: 10px;padding-bottom: 10px;padding-right: 10px;border-radius: 10px;">
                        <h1 class="text-center" style="color: rgb(255,255,255);">Kalkulator BMI</h1>
                        <p class="text-justify" style="color: rgb(246,252,255);">Kalkulator BMI (Indeks Massa Tubuh) adalah sebuah kalkulator yang digunakan untuk menentukan berat badan yang ideal atau kurus atau obesitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" style="margin-bottom: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><img src="<?= base_url() ?>assets/img/health.png" style="max-width: 350px;padding-top: 15px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;"></div>
                <div class="col-md-8">
                    <h1 class="text-center border rounded" style="background-color: #00a79d;color: rgb(255,255,255);margin-top: 15px;margin-bottom: 15px;">Indeks Massa Tubuh</h1>
                    <p class="text-justify" style="margin-bottom: 0px;"><em>Body mass index</em>&nbsp;(BMI) atau indeks massa tubuh (IMT) adalah parameter yang digunakan untuk menghitung berat badan seseorang. Melalui perhitungan ini, akan diketahui apakah berat badan Anda tergolong normal, kurang, atau
                        berlebih.<br><br>Perlu diingat bahwa berat badan ideal setiap orang berbeda-beda. Oleh karena itu, cara untuk tahu apakah berat badan tergolong ideal atau tidak yaitu dengan mengetahu IMT atau BMI. Selain berat badan, Anda juga
                        harus mengetahui tinggi badan yang merupakan salah satu komponen pengukurannya.<br><br>Cara menghitung indeks massa tubuh yang praktis dan mudah salah satunya bisa menggunakan kalkulator BMI online. Anda bisa menggunakan fitur
                        ini di manapun dan kapan pun.<br><br>Perlu menjadi catatan bahwa BMI bukanlah pengukuran yang akurat karena tidak bisa menjelaskan secara detail mengenai masalah berat badan seseorang. Hasil perhitungan BMI juga tidak dapat memperhitungkan
                        lemak dalam tubuh untuk mengukur risiko penyakit kronis.<br><br>Di sisi lain, Anda Anda dapat mengetahui informasi dasar mengenai masalah berat badan secara keseluruhan. Angka BMI bisa menjadi peringatan bagi Anda untuk menjaga
                        berat badan normal agar hidup lebih sehat.<br><br>Cara menggunakan&nbsp;<strong>Kalkulator BMI DokterSehat:</strong><br></p>
                    <ul>
                        <li>Masukkan tinggi badan Anda (dalam satuan cm)<br></li>
                        <li>Masukkan berat badan Anda (dalam satuan kg)<br></li>
                        <li>Klik “Hitung!”<br></li>
                        <li>Hasil perhitungan BMI Anda akan muncul<br></li>
                    </ul>
                    <p class="text-justify" style="margin-bottom: 0px;">Hasil perhitungan BMI akan disesuaikan dengan tinggi badan dan berat badan yang Anda masukkan ke dalam kalkulator. Selanjutnya, Anda bisa mengetahui apakah Anda tergolong kurus, ideal, gemuk, atau obesitas.<br><br></p>

                    <script type="text/javascript">
                        function calculateBMI() {
                            var weight = document.bmiCalc.weight.value
                            var height = document.bmiCalc.height.value

                            if (weight > 0 && height > 0) {
                                var finalBmi = weight / (height / 100 * height / 100);
                                document.bmiCalc.bmi.value = new Number(finalBmi).toFixed(2)

                                if (finalBmi < 17) {
                                    document.bmiCalc.meaning.value = "Sangat Kurus"
                                }

                                if (finalBmi > 17 && finalBmi < 18.4) {
                                    document.bmiCalc.meaning.value = "Kurus"
                                }

                                if (finalBmi > 18.5 && finalBmi < 25) {
                                    document.bmiCalc.meaning.value = "Normal"
                                }

                                if (finalBmi > 25.1 && finalBmi < 27) {
                                    document.bmiCalc.meaning.value = "Gemuk"
                                }

                                if (finalBmi > 27) {
                                    document.bmiCalc.meaning.value = "Sangat Gemuk"
                                }

                            } else {
                                alert("Please fill in all fields.")
                            }
                        }
                    </script>

                    <form id="form" name="bmiCalc">
                        <div class="row">
                            <div class="col text-center" style="background-color: #aeefec;padding-top: 20px;padding-bottom: 20px;border-radius: 10px">
                                <h2>Tinggi Badan (cm)</h2><input for="weight" placeholder="Isi Tinggi Badan Anda*" type="text" name="height" style="width: 325px;border-radius: 5px">
                                <h2>Berat Badan (kg)</h2><input for="height" placeholder="Isi Berat Badan Anda*" type="text" name="weight" style="width: 325px;border-radius: 5px">
                                <div class="row">
                                    <div class="col"><button onclick="calculateBMI()" class="btn btn-primary" type="button" style="background-color: #035aa6;margin-top: 10px;margin-bottom: 10px;">Hitung</button></div>
                                </div>
                                <h2>Angka BMI</h2><input type="text" id="hasil" style="width: 325px;" name="bmi" disabled>
                                <h2>Golongan</h2><input type="text" id="hasil" style="width: 325px;" name="meaning" disabled>
                            </div>
                        </div>
                    </form>
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
    </div>