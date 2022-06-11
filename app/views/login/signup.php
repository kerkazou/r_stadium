<?php require APPROOT . '/views/includes_site/header.php'; ?>

<body>
    <!-- Header -->
    <header id="header">

        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg navbar-shrink navbar-dark bg-dark px-5 py-3 fixed-top" id="navbar">
            <a class="navbar-brand" id="logo2" href="<?php echo URLROOT ;?>/#home">R-STADIUM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                Menu <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav text-uppercase d-flex gap-3 ms-auto py-4 py-lg-0" id="menu">
                    <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT ;?>/#reservation">Reservation</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#about" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                        <ul class="dropdown-menu dropdown-menu-dark bg-dark" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo URLROOT ;?>/#about">Notre Offre</a></li>
                            <li><a class="dropdown-item" href="<?php echo URLROOT ;?>/#about">Nos Services</a></li>
                            <li><a class="dropdown-item" href="<?php echo URLROOT ;?>/#about">Vos Avantages</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT ;?>/#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT ;?>/#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT ;?>/Logins">LOG IN</a></li>
                </ul>
            </div>            
        </nav>
        
        <div class="w-100 vh-100 d-flex flex-column justify-content-center align-items-center gap-3 text-light">
            <div class="text-center">
                <div class="fs-1 fs-sm-3">Become a member of the largest sports catalog in Morocco</div>
                <p style="font-weight: 500; margin-top: 0px" class="fs-4 fs-sm-6">Make your activities more accessible and visible with <span>R-Stadium</span></p>
            </div>
        </div>
    </header>

    <!-- Log-in -->
    <section class="row d-flex justify-content-center align-items-center" style="margin-top: -100px;">
        <div class="col-6 d-flex flex-column justify-content-center align-items-center gap-3 shadow-sm p-3 mb-5 py-5 bg-body rounded">
            <h1 class="text-center mb-3">Register with</h1>
            <div class="d-flex justify-content-center align-items-center gap-5">
                <i class="fa-brands fa-facebook btn btn-outline-light shadow-sm p-3 bg-body rounded fs-1"></i>
                <i class="fa-brands fa-google btn btn-outline-light shadow-sm p-3 bg-body rounded fs-1"></i>
            </div>
            <p class="text-sm font-weight-bold text-secondary">or</p>
            <form class="d-flex flex-wrap justify-content-center align-items-center gap-4 px-5" method="POST" action="<?php echo URLROOT ;?>/login/signup">
                <input type="text" name="first_name" class="form-control form-control-lg" placeholder="First Name*">
                <input type="text" name="last_name" class="form-control form-control-lg" placeholder="Last Name*">
                <input type="text" name="email" class="form-control form-control-lg" placeholder="Email*">
                <input type="text" name="phone" class="form-control form-control-lg" placeholder="Phone Number">
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                <input type="password" name="conf_password" class="form-control form-control-lg" placeholder="Confirm Password">
                <input type="submit" class="btn btn-lg btn-primary btn-lg w-25 mb-0" value="Register">
            </form>
            <p class="text-sm mt-3 mb-0">Already have an account? <a href="<?php echo URLROOT ;?>/login/signin" class="text-dark font-weight-bolder">Sign in</a></p>
        </div>
    </section>
</body>

<?php require APPROOT . '/views/includes_site/footer.php'; ?>


<style>
    /* Login */
    .fa-brands{
        color: var(--color-green) !important;
    }
    input[type="submit"]{
        background-color: var(--color-green) !important;
        border: none;
    }
</style>