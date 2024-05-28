<!doctype html>
<html lang="en">

<head>
    <title>CarRental &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="landing/fonts/icomoon/style.css">

    <link rel="stylesheet" href="landing/css/bootstrap.min.css">
    <link rel="stylesheet" href="landing/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="landing/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="landing/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="landing/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="landing/css/style.css">

</head>

<body>


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3">
                        <div class="site-logo">
                            <a href="index.html"><strong>CarRental</strong></a>
                        </div>
                    </div>

                    <div class="col-9  text-right">

                        <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                                <li><a href="#listings" class="nav-link">Rent</a></li>
                                <li><a href="#testimonials" class="nav-link">Testimonials</a></li>

                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>


        <div class="hero" style="background-image: url('landing/images/hero_1_a.jpg');">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="row mb-5">
                            <div class="col-12 intro">
                                <h2 class="text-center">
                                    <strong> Samboga Rent Car</strong> adalah penyedia jasa sewa mobil terpercaya yang hadir untuk menemani perjalanan Anda. Kami menawarkan berbagai jenis mobil yang sesuai dengan kebutuhan dan budget Anda, mulai dari city car yang lincah hingga SUV yang tangguh untuk menjelajahi alam.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="site-section">
            <div class="container">
                <h2 class="section-heading mb-5"><strong>
                        Bagaimana Cara Rental Mobil Di <strong>
                            Samboga Car Rent
                        </strong> ?
                    </strong></h2>
                <div class="row mb-5">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>1</span>
                            <div class="step-inner">
                                <span class="number text-primary">01.</span>
                                <h3>
                                    Pilih Mobil Yang Anda Inginkan
                                </h3>
                                <p>
                                    Berbagai pilihan mobil yang sesuai dengan kebutuhan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>2</span>
                            <div class="step-inner">
                                <span class="number text-primary">02.</span>
                                <h3>
                                    Isikan Form Pemesanan
                                </h3>
                                <p>
                                    Isikan form pemesanan dengan lengkap dan benar.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>3</span>
                            <div class="step-inner">
                                <span class="number text-primary">03.</span>
                                <h3>
                                    Konfirmasi Pemesanan & Pembayaran
                                </h3>
                                <p>
                                    Konfirmasi pemesanan dan lakukan pembayaran.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="site-section bg-light" id="listings">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>
                                Mobil Yang Tersedia
                            </strong></h2>
                        <p class="mb-5">
                            Berikut adalah beberapa mobil yang tersedia untuk disewa.
                        </p>
                    </div>
                </div>


                <div class="row">
                    <?php foreach ($vehicles as $key => $vehicle) : ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="listing d-block  align-items-stretch">
                                <div class="listing-img h-100 mr-4">
                                    <img src="<?= $vehicle['image'] ?>" alt="Image" class="img-fluid">
                                </div>
                                <div class="listing-contents h-100">
                                    <h3>
                                        <strong><?= $vehicle['name'] ?></strong>
                                    </h3>
                                    <div class="rent-price">
                                        <strong>
                                            Rp <?= number_format($vehicle['daily_price']) ?>
                                        </strong><span class="mx-1">/</span>Hari
                                    </div>
                                    <div>
                                        <p>
                                            <?= $vehicle['description'] ?>
                                        </p>
                                        <p><a href="#" class="btn btn-primary btn-sm">
                                                Pesan Sekarang
                                            </a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>



        <div class="site-section bg-light" id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Testimoni</strong></h2>
                        <p class="mb-5">
                            Apa kata mereka tentang <strong>Samboga Car Rent</strong> ?
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="landing/images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Mike Fisher</span>
                                    <span>Owner, Ford</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="landing/images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Jean Stanley</span>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="landing/images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Katie Rose</span>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>
                            Dapatkan harga sewa mobil yang kompetitif dengan berbagai pilihan paket sewa yang fleksibel sesuai dengan durasi dan kebutuhan perjalanan Anda.
                        </p>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Company</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#testimonials">Testimoni</a></li>
                                    <li><a href="#listings">
                                            Daftar Mobil
                                        </a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15213.984530559117!2d110.93706423234467!3d-7.8090189371117695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2e360ee9490b%3A0xf04efdd3ce153d1!2sAlun%20Alun%20Giri%20Krida%20Bakti!5e0!3m2!1sid!2sid!4v1716728814245!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="landing/js/jquery-3.3.1.min.js"></script>
    <script src="landing/js/popper.min.js"></script>
    <script src="landing/js/bootstrap.min.js"></script>
    <script src="landing/js/owl.carousel.min.js"></script>
    <script src="landing/js/jquery.sticky.js"></script>
    <script src="landing/js/jquery.waypoints.min.js"></script>
    <script src="landing/js/jquery.animateNumber.min.js"></script>
    <script src="landing/js/jquery.fancybox.min.js"></script>
    <script src="landing/js/jquery.easing.1.3.js"></script>
    <script src="landing/js/bootstrap-datepicker.min.js"></script>
    <script src="landing/js/aos.js"></script>

    <script src="landing/js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('.maps iframe').prop('width', '100%');
            $('.maps iframe').prop('loading', 'lazy');

            $('#hamburger').click(function() {
                $('#navbar-mobile').toggle();
            });
        });
    </script>

</body>

</html>