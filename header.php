<header>
    <!-- Topbar / Marquee -->
    <div class="top-bg bg-red">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="marquee L text-light text-center smallfnt">
                        Diwali sale is open now. Buy early for the best discounts! Happy Diwali....!!!!
                        &nbsp; <i class="bi bi-whatsapp text-success"></i> +91 8870758418
                        &nbsp; <i class="bi bi-telephone-fill text-primary"></i> +91 8870758418, +91 8870838338
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar with Logo -->
    <nav id="my-nav" class="navbar navbar-expand-lg navbar-dark text-dark bg-light overflow-hidden">
        <div class="container-fluid">
            <a class="navbar-brand text-red" href="index.php">
                <img class="logo rounded-circle" src="./images/logo.webp" alt="Kaleeswari Crackers"
                    title="Kaleeswari Crackers">
                <em class="text-red">Kaleeswari</em> <em class="text-main">Crackers</em>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar"
                aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list nav-icon text-main "> Menu</span>
            </button>
            <div id="myNavbar" class="collapse navbar-collapse text-dark justify-content-center justify-content-lg-end">
                <ul class="navbar-nav text-center">
                    <li class="nav-item pr-2 mr-lg-4 <?php if ($page == "home") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mr-lg-4 pr-2 <?php if ($page == "about") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item mr-lg-4 pr-2 <?php if ($page == "products") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item mr-lg-4 pr-2 <?php if ($page == "safety") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="safety.php">Safety Tips</a>
                    </li>
                    <li class="nav-item mr-lg-4 pr-2 <?php if ($page == "contact") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Info Cards Row -->
    <div class="container-fluid">
        <div class="row bg-dark-blue text-center p-2 p-md-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="header-info-box shadow p-3 my-3 my-md-0 bg-warning rounded">
                    <img class="info-icon" src="./images/location-pin.png" alt="location-pin">
                    <h6 class="text-main">Address</h6>
                    <p class="m-0">Sivakasi</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="header-info-box shadow p-3 mb-3 mb-md-0 bg-warning rounded">
                    <img class="info-icon" src="./images/phone.png" alt="Phone">
                    <h6 class="text-main">Call Us</h6>
                    <p class="m-0">(+91) 8870758418 , 8870838338</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="header-info-box mt-0 mt-md-5 mt-lg-0 shadow p-lg-3 mb-4 mb-md-0 bg-warning rounded">
                    <img class="info-icon" src="./images/mail.png" alt="Mail">
                    <h6 class="text-main">Mail Us</h6>
                    <p class="m-0">kaleeswaricrackerssvks@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
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