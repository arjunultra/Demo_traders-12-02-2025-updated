<header>
    <!-- Topbar / Marquee -->
    <div class="top-bg bg-red">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="marquee L text-light text-center smallfnt">
                        சிறிய குடும்ப நிகழ்வுகளிலிருந்தும் பெரிய திருவிழாக்கள் வரை, எங்கள் பட்டாசு தொகுப்புகள் ஒவ்வொரு
                        தருணத்தையும் வண்ணமும் ஒளியும் ஒலி கொண்டும் பிரகாசமாக்குகின்றன.
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
                <em class="text-red heading6">Kaleeswari</em> <em class="text-main heading6">Crackers</em>
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