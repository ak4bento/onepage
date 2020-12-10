<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sejawat</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Agency Template" name="keywords">
        <meta content="Bootstrap Agency Template" name="description">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <?php
    /**
     * using mysqli_connect for database connection
     */

    $databaseHost = 'gakken.ckq1o0csslqp.ap-southeast-1.rds.amazonaws.com';
    $databaseName = 'welcome';
    $databaseUsername = 'gakken';
    $databasePassword = 'G4kk3n#AWS';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    echo $mysqli;
    ?>
    <body>
        <div class="wrapper">
            <!-- Hero Start -->
            <div class="hero" style="background: #00539C">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <img src="img/Logo%20Sejawat%20White.svg" alt="Image" width="20%">
                        </div>
                        <div class="col-md-8">
                            <h1>
                            <a href=""
                               class="typewrite"
                               data-period="2000"
                               data-type='[
                                "Premium Licence Scientific Journals  on your fingertips.",
                                "Daily dose of  medical science  articles.",
                                "Webinar and Podcast with Experts.",
                                "On-Demand  CME contents for your  convenience.",
                                "The go-to  digital resources for Indonesian doctors."]'>
                                <span class="wrap"></span>
                            </a>
                            </h1>
                        </div>
                        <div class="col-md-4">
                            <img src="img/group.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero End -->


            <!-- About Start -->
            <div class="faqs" style="padding-top: 20px">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2 class="section-title" style="font-size: 60px">Hadir untuk  Dokter Indonesia <strong>Januari 2021</strong></h2>
                        </div>
                        <div class="col-md-6" style="padding-right: 10%">
                            <form action="index.php">
                                <div class="form-group">
                                    <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Masukkan nama lengkap anda">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Masukkan email">
                                </div>
                                <button type="submit" class="btn btn-primary"><strong>Gabung</strong> Teman Sejawat</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            <!-- FAQs Start -->
            <div class="faqs" style="background: #cfe3eb">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="img/Logo%20Sejawat%20Blue.svg" alt="Image">
                        </div>
                        <div class="col-md-4" style="position: center; color: #4a7fc5">
                            <h2><p>adalah platform edukasi  khusus untuk dokter, sebelumnya dikenal dengan</p></h2>
                        </div>
                        <div class="col-md-4">
                            <img src="img/Logo%20Gakken-01.svg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <img src="img/sejawat-fitur.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->

            <!-- Call to Action Start -->
            <div class="call-to-action">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h2>Selalu terhubung dengan teman sejawat</h2>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to Action End -->
        </div>

        <?php

        // Check If form submitted, insert form data into users table.
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];

            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO users(name,email) VALUES('$name','$email')");

            header("Location: index.php");
        }
        ?>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script>
            var TxtType = function(el, toRotate, period) {
                this.toRotate = toRotate;
                this.el = el;
                this.loopNum = 0;
                this.period = parseInt(period, 10) || 2000;
                this.txt = '';
                this.tick();
                this.isDeleting = false;
            };

            TxtType.prototype.tick = function() {
                var i = this.loopNum % this.toRotate.length;
                var fullTxt = this.toRotate[i];

                if (this.isDeleting) {
                    this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                    this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

                var that = this;
                var delta = 200 - Math.random() * 100;

                if (this.isDeleting) { delta /= 2; }

                if (!this.isDeleting && this.txt === fullTxt) {
                    delta = this.period;
                    this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                    this.isDeleting = false;
                    this.loopNum++;
                    delta = 500;
                }

                setTimeout(function() {
                    that.tick();
                }, delta);
            };

            window.onload = function() {
                var elements = document.getElementsByClassName('typewrite');
                for (var i=0; i<elements.length; i++) {
                    var toRotate = elements[i].getAttribute('data-type');
                    var period = elements[i].getAttribute('data-period');
                    if (toRotate) {
                        new TxtType(elements[i], JSON.parse(toRotate), period);
                    }
                }
                // INJECT CSS
                var css = document.createElement("style");
                css.type = "text/css";
                css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
                document.body.appendChild(css);
            };
        </script>
    </body>
</html>
