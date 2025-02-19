<header>
    <!-- Topbar / Marquee -->
    <div class="top-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="marquee L text-light text-center smallfnt">
                        Diwali sale is open now. Buy early for the best discounts! Happy Diwali....!!!!
                        &nbsp; <i class="bi bi-whatsapp text-success"></i> +91 9999999999
                        &nbsp; <i class="bi bi-telephone text-primary"></i> +91 8888888888, +91 7777777777
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-area bg-light text-color">
        <div class="container-fluid px-lg-5 py-lg-3">
            <div class="row">
                <div class="col-lg-4 col-md-12 my-auto crac2">
                    <div class="logo">
                        <a class="navbar-brand text-blu" href="index.php">
                            <img class="logo rounded-circle" src="./images/logo.webp" alt="Demo Traders"
                                title="Demo Traders">
                            <em class="text-main">Demo</em> <em class="text-blu">Traders</em>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row p-5 p-md-0">
                        <!-- Address -->
                        <div class="col-lg-4 col-md-4 col-12 text-dark text-center">
                            <div class="header-info-box">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-3">
                                        <img class="info-icon" src="./images/location-pin.png" alt="location-pin"
                                            title="Demo Traders">
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-main">Address</h6>
                                        <p class="helvetica m-0 font-weight-normal">123, Demo Street, Sivakasi</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-lg-4 col-md-4 col-12 text-dark text-center">
                            <div class="header-info-box">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-3">
                                        <img class="info-icon" src="./images/phone.png" alt="Phone"
                                            title="Demo Traders">
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-main">Call Us</h6>
                                        <p class="helvetica m-0 font-weight-normal smallfnt">(+91) 99999 99999</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mail -->
                        <div class="col-lg-4 col-md-4 col-12 text-dark text-center">
                            <div class="header-info-box">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-3">
                                        <img class="info-icon" src="./images/mail.png" alt="Mail" title="Demo Traders">
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-main">Mail Us</h6>
                                        <p class="helvetica m-0 font-weight-normal">contact@demotraders.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Navbar -->
    <nav id="my-nav" class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">

            <button class="navbar-toggler d-block d-lg-none mx-auto" type="button" data-toggle="collapse"
                data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list nav-icon text-white">Menu</span>
            </button>


            <div id="myNavbar" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 <?php if ($page == "home") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-2 <?php if ($page == "about") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item px-2 <?php if ($page == "products") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item px-2 <?php if ($page == "safety") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="safety.php">Safety Tips</a>
                    </li>
                    <li class="nav-item px-3 <?php if ($page == "contact") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Spacer (Prevents Content Jump) -->
    <div class="spacer d-none"></div>
</header>

<script src="js/jquery.min.js"></script>
<script src="js/marquee.js"></script>
<script>
    $('.L').marquee({
        duration: 16000,
        gap: 150,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: false,
        pauseOnHover: true
    });
</script>