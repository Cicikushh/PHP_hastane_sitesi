<?php
// Include the PHP script to fetch comments and doctor info
include('getComments.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>ÖZAY HASTANESİ</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="hastalık, randevu, hastane,klinik,doktor,online" name="keywords">
        <meta content="Hastane randevusu" name="description">

        <!-- Favicon -->
        <link href="img/logo.jpg" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/doktorProfilcss.css">
    </head>
    <body>
        
         <!-- Topbar Start -->
        <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Açılış Saati : Pzt - Cmrts : 8:00  - 17:00, Pazar Kapalı </small>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                        <div class="me-3 pe-3 border-end py-2">
                            <p class="m-0"><i class="fa fa-envelope-open me-2"></i>ozayhastanesi@gmail.com</p>
                        </div>
                        <div class="py-2">
                            <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+0232 553 5353</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0 text-primary"><img src="img/logo.jpg" id="logo">ÖZAY</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link">Anasayfa</a>
                    <a href="hakkimizda.html" class="nav-item nav-link">Hakkımızda</a>
                    <a href="hizmetler.html" class="nav-item nav-link">Hizmetlerimiz</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sayfalar</a>
                        <div class="dropdown-menu m-0">
                            <a href="doktorlar.html" class="dropdown-item">Doktorlarımız</a>
                            <a href="gorusler.html" class="dropdown-item">Görüşler</a>
                            <a href="randevu.html" class="dropdown-item">Randevu</a>
                        </div>
                    </div>
                    <a href="iletisim.html" class="nav-item nav-link">İletişim</a>
                </div>
                <a href="giris.html" class="btn btn-primary py-2 px-4 ms-3">Giriş Yap / Üye Ol</a>
            </div>
        </nav>
        <!-- Navbar End -->
        <div id="container">
            <div id="topDiv">
                <div id="profileDiv">
                    <div id="pfp">
                        <img id="pfpPhoto" src="img/<?php echo $doctor['photo']; ?>" alt="Doctor Photo" />
                    </div>
                    <div id="profilOzetDiv">
                        <div id="isimUzmanlikDiv">
                            <p id="doktorname"><?php echo $doctor['name']; ?></p>
                            <p id="uzmanlik">Kardiyolog</p>
                        </div>
                        <div id="ortPuanDiv">
                            <p>8.5 / 10</p>
                        </div>
                        <div id="istatistikDiv">
                            <div class="istatistikler">
                                <img src="img/seen.png" class="istatistikIcon">
                                <p class="istatistik">245</p>
                            </div>
                            <div class="istatistikler">
                            </div>
                            <div class="istatistikler">
                                <img src="img/rateicon.png" class="istatistikIcon">
                                <p class="istatistik">168</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="randevuDiv">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Randevu Oluştur</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Hizmet Seçiniz</option>
                                        <option value="1">Nöroloji</option>
                                        <option value="2">Kalp Hastalıkları</option>
                                        <option value="3">Dermatoloji</option>
                                        <option value="2">Psikiyatri</option>
                                        <option value="3">Kardiyoloji</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Doktor Seçiniz</option>
                                        <option value="1">Hüseyin Tokat</option>
                                        <option value="2">Turgay Zülam</option>
                                        <option value="3">Burak Evrentuğ</option>
                                        <option value="4">Öznur Ayazoğlu Şimşek</option>
                                        <option value="5">Volkan Abur</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Adınız" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Mailiniz" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Randevu Tarihi" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Randevu Saati" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Randevu Al</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="bottomDiv">
                <hr>
                <p id="label">Değerlendirme ve Görüşler</p>
                <div id="yorumlar">

                <?php
                    if (count($comments) > 0) {
                        foreach ($comments as $comment) {
                            echo "<p class='yorum'><strong>" . htmlspecialchars($comment['name']) . ":</strong> " . htmlspecialchars($comment['comment']) . " <em>on " . $comment['created_at'] . "</em></p>";
                            echo "<hr>";
                        }
                    } else {
                    echo "<p>Henüz hiç yorum yapılmamış.</p>";
                    }
                    ?>
                </div>
                <div id="yorumyap">
                    <form action="submitComment.php" method="POST">
                        <input type="hidden" name="doctor_id" value="<?php echo $doctor_id; ?>" />
                        <input type="text" name="name" id="name" placeholder="Adınız" required />
                        <br>
                        <label for="comment">Yorumunuz:</label>
                        <textarea name="comment" id="comment" placeholder="Yorum Giriniz..." required></textarea>
                        <br>
                        <button type="submit">Gönder</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Newsletter Start -->
        <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
            <div class="container">
                <div class="bg-primary p-5">
                    <form class="mx-auto" style="max-width: 600px;">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Mailiniz">
                            <button class="btn btn-dark px-4">Biz Size Ulaşalım</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->
    

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
            <div class="container pt-5">
                <div class="row g-5 pt-4">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Hızlı Linkler</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Anasayfa</a>
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Hakkımızda</a>
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Hizmetlerimiz</a>
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Değerlendirmeler</a>
                            <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>İletişim</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Popüler Linkler</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Anasayfa</a>
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Hakkımızda</a>
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Hizmetlerimiz</a>
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Değerlendirmeler</a>
                            <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>İletişim</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Bize Ulaşın</h3>
                        <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Bornova/İzmir</p>
                        <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>ozayhastanesi@gmail.com</p>
                        <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+90 212 553 5353</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Bizi Takip Edin</h3>
                        <div class="d-flex">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://x.com/home?lang=tr"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://tr.linkedin.com/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com/"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-light py-4" style="background: #051225;">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">ÖZAy Hastanesi</a>. Tüm Haklar Saklıdır.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <p class="mb-0">Tasarlayan : <a class="text-white border-bottom" href="https://htmlcodex.com">ÖzAy Hastanesi</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="lib/twentytwenty/jquery.event.move.js"></script>
        <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>