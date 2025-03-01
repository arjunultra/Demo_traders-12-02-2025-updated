<header>
    <!-- Topbar / Marquee -->
    <div class="top-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="marquee L text-dark text-center smallfnt">
                        Diwali sale is open now. Buy early for the best discounts! Happy Diwali....!!!!
                        &nbsp; <i class="bi bi-whatsapp text-success"></i> +91 9999999999
                        &nbsp; <i class="bi bi-telephone text-primary"></i> +91 8888888888, +91 7777777777
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar with Logo -->
    <nav id="my-nav" class="navbar navbar-expand-lg navbar-light sticky-top bg-light bg-main">
        <div class="container-fluid">
            <a class="navbar-brand text-red" href="index.php">
                <img class="logo rounded-circle" src="./images/logo.webp" alt="Demo Traders" title="Demo Traders">
                <em class="text-yellow">Demo</em> <em class="text-red">Traders</em>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar"
                aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list nav-icon text-dark"> Menu</span>
            </button>
            <div id="myNavbar" class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav text-center">
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

    <!-- Info Cards Row -->
    <div class="container-fluid mb-3 mt-4">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="header-info-box shadow p-3 bg-white rounded">
                    <img class="info-icon" src="./images/location-pin.png" alt="location-pin">
                    <h6 class="text-main">Address</h6>
                    <p class="m-0">123, Demo Street, Sivakasi</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="header-info-box shadow p-3 bg-white rounded">
                    <img class="info-icon" src="./images/phone.png" alt="Phone">
                    <h6 class="text-main">Call Us</h6>
                    <p class="m-0">(+91) 99999 99999</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="header-info-box shadow p-3 bg-white rounded">
                    <img class="info-icon" src="./images/mail.png" alt="Mail">
                    <h6 class="text-main">Mail Us</h6>
                    <p class="m-0">contact@demotraders.com</p>
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