<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="./assets/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="./assets/css/agri.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" sizes="310x310" type="image/png" href="assets/pic/title.png">
    <title>INAGRO</title>
</head>

<body>
    <!-- Navbar -->
    <header class="navbar-fixed">
        <nav class="indigo darken-4 z-depth-0">
            <div class="nav-wrapper">
                <a href="index.html" class="brand-logo">
                    <img src="./assets/pic/Inagro putih.png">
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger green-text"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down header-menunya">
                    <li><a href="home_agribusiness.html">Home</a></li>
                    <li><a href="about_us_agribusiness.html">About Us</a></li>
                    <li><a class='dropdown-button' href='#' data-target='dropdown1' data-beloworigin="true">Our
                            Product</a></li>
                    <li><a href="our_facilities_agribusiness.html">Our Facilities</a></li>
                    <li><a href="news_media_agribusiness.html">News and Media</a></li>
                    <li><a href="inagro_care_agribusiness.html">Inagro Care</a></li>
                    <li class="aktif"><a href="contact_us_agribusiness.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <ul id='dropdown1' class='dropdown-content dropdown-nested'>
        <li><a class="indigo-text text-darken-3" href="tissue_culture.html">Tissue Culture</a>
        </li>
        <li><a class="indigo-text text-darken-3" href="mycorrhiza.html">Mycorrhiza</a>
        </li>
        <li><a class="indigo-text text-darken-3" href="potted_fruit_trees.html">Potted Fruit Trees</a></li>
    </ul>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="home_agribusiness.html">Home</a></li>
        <li><a href="about_us_agribusiness.html">About Us</a></li>
        <li><a class='dropdown-button' href='#' data-target='dropdown2' data-beloworigin="true">Our
                Product</a></li>
        <li><a href="our_facilities_agribusiness.html">Our Facilities</a></li>
        <li><a href="news_media_agribusiness.html">News and Media</a></li>
        <li><a href="inagro_care_agribusiness.html">Inagro Care</a></li>
        <li class="aktif"><a href="contact_us_agribusiness.php">Contact Us</a></li>
    </ul>

    <ul id='dropdown2' class='dropdown-content dropdown-nested'>
        <li><a class="indigo-text text-darken-3" href="tissue_culture.html">Tissue Culture</a>
        </li>
        <li><a class="indigo-text text-darken-3" href="mycorrhiza.html">Mycorrhiza</a>
        </li>
        <li><a class="indigo-text text-darken-3" href="potted_fruit_trees.html">Potted Fruit Trees</a></li>
    </ul>
    <!-- Akhir Navbar -->

    <!-- Paralax -->
    <div class="parallax-container">
        <div class="parallax"><img src="assets/pic/agrotourism/about us agrotourism/agrotourism inagro.JPG"></div>
    </div>
    <!-- Akhir Paralax -->

    <!-- contact us -->
    <section id="contact" class="contact whitenya lighten-3 scrollspy">
        <div class="container">
            <h3 class="indigo-text text-darken-4 center helvetica-extra">Contact Us</h3>
            <div class="row">
                <div class="col m5 s12">
                    <div class="card-panel indigo darken-2 center white-text">
                        <i class="material-icons">email</i>
                        <p class="justify helvetica-45">Please select the area of business that you would like to get in
                            touch with
                            and fill out the
                            relevant form below :</p>
                    </div>
                    <div>
                        <ul id="hover-kontak" class="collapsible helvetica-45">
                            <li>
                                <div class="collapsible-header">
                                    <i class="material-icons">filter_drama</i>
                                    Contact Us
                                </div>
                                <div class="collapsible-body">
                                    <p>If you would like to make a general enquiry or are unsure about what you need,
                                        please contact us and someone will be in touch as soon as possible.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    <i class="material-icons">shopping_cart</i>
                                    Our Products
                                </div>
                                <div class="collapsible-body">
                                    <p>Would you like to order our products?
                                        If you would like to place an order or discuss prices and stock availability,
                                        please contact us and a member of the business team will be in touch shortly
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    <i class="material-icons">assignment</i>
                                    Our Programs
                                </div>
                                <div class="collapsible-body">
                                    <p>Are you interested in our programs?
                                        We offer a wide range of activities for groups and families and would be happy
                                        to discuss how they can best suits you.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    <i class="material-icons">sports_kabaddi</i>
                                    Trainings & Gathering
                                </div>
                                <div class="collapsible-body">
                                    <p>Are you interested in our programs?
                                        How can our team help?
                                        Whether it’s corporate gathering or trainings, our expert team are here to help.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col m7 s12">
                    <form method="post" action="">
                        <div class="left-align card-panel helvetica-45">
                            <h5>Please Fill out this form</h5>
                            <div class="input-field">
                                <input type="text" name="name" id="name" required class="validate">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" class="validate" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="phone" id="phone">
                                <label for="phone">Phone Number</label>
                            </div>
                            <div class="input-field">
                                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <button type="submit" name="action" class="btn green darken-2">Send</button>
                        </div>
                    </form>
                </div>
            </div>

            <?php
            if (isset($_POST['action'])) {
                $to = "admin@inagro.co.id";
                $from = $_POST['email'];
                $first_name = $_POST['name'];
                $phone = $_POST['phone'];
                $subject = "message";
                $message = $first_name . " Nomor Hp: " . $phone . " Mengatakan:" . "\n\n" .
                    $_POST['message'];

                $headers = "From:" . $from;
                $headers2 = "From:" . $to;
                mail($to, $subject, $message, $headers);
                echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
            }
            ?>

            <!-- Maps Inagro -->
            <div>
                <h3 class="left-align grey-text text-darken-3  helvetica-extra">My Google Maps</h3>
            </div>
            <div class=" map-responsive">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.2182069337828!2d106.68316441402966!3d-6.494033195302338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69dd0e6339f40d%3A0x8ba05934f5645580!2sInagro!5e0!3m2!1sid!2sid!4v1568357119468!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <!-- Akhir Maps Inagro -->
        </div>
    </section>
    <!-- Akhir contact us -->

    <!-- Footer -->
    <footer class="indigo darken-4 white-text center Deskripsi-Helvetica">
        <a href="https://www.instagram.com/inagro.id/" target="_blank"><img id="footernya" src="assets/pic/about us agro/footer/ig icon.png"></a>
        <a href="https://www.facebook.com/InagroAgroEduFun" target="_blank"><img id="footernya" src="assets/pic/about us agro/footer/fb icon.png"></a>
        <a href="https://www.youtube.com/channel/UCmfbrcWC0UXNT-x461Umpfg" target="_blank"><img id="footernya" src="assets/pic/about us agro/footer/youtube icon.png"></a>
        <a href="https://wa.me/6281297952896?text=Nama%3A%0AEmail%3A%0APertanyaan%3A" target="_blank"><img id="footernya" src="assets/pic/about us agro/footer/wa icon.png"></a>
        <div class="container">
            <div class="row">
                <div class="col m6 s12 light">
                    <h5>OUR LOCATION</h5>
                    <p>Jalan Raya Jampang KM. 7, Karihkil, Ciseeng, Cibeuteung Udik, Kec. Ciseeng, Bogor, Jawa Barat
                        16330</p>
                </div>
                <div class="col m6 s12 light">
                    <h5>QUICK LINK</h5>
                    <p><a class="putih" href="">Contact Us |</a> <a class="putih" href="">About Us |</a> <a class="putih" href="">Career</a></p>
                </div>
            </div>
            <p>Copyright PT. Intidaya Agrolestari ALL RIGHT RESERVED &copy; 2019</p>
        </div>
    </footer>
    <!-- Akhir Footer -->

    <!-- Preloader -->
    <div class="preloader-background">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Preloader -->

    <!--Import jQuery before materialize.js-->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5a4b8deb4b401e45400bd768/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./assets/js/materialize.min.js"></script>
    <script src="./assets/js/custom.js"></script>
</body>

</html>