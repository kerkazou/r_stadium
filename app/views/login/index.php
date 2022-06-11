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
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                        <ul class="dropdown-menu dropdown-menu-dark bg-dark" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" id="btn_sign_in" href="#sign_in">Sign In</a></li>
                            <li><a class="dropdown-item" id="btn_sign_up" href="#sign_up">Sign Up</a></li>
                        </ul>
                    </li>                
                </ul>
            </div>            
        </nav>
        <!-- header -->
        <div class="w-100 vh-100 d-flex flex-column justify-content-center align-items-center gap-3 text-center text-light animate__animated animate__backInDown">
            <div class="fs-1 fs-sm-3">Become a member of the largest sports catalog in Morocco</div>
            <p style="font-weight: 500; margin-top: 0px" class="fs-4 fs-sm-6">Make your activities more accessible and visible with <span>R-Stadium</span></p>
        </div>
    </header>

    <!-- Log-in -->
    <section class="row d-flex flex-column justify-content-center align-items-center" style="margin-top: -100px;">
        <!-- sign-in -->
        <div id="sign_in" class="col-md-6 col-sm-8 col-10">
            <div class="d-flex flex-column justify-content-center align-items-center gap-3 shadow-sm p-3 mb-5 py-5 bg-body rounded animate__animated animate__bounceIn">
                <h1 class="text-center mb-3">Login With</h1>
                <div class="d-flex justify-content-center align-items-center gap-5">
                    <i class="fa-brands fa-facebook btn btn-outline-light shadow-sm p-3 bg-body rounded fs-1"></i>
                    <i class="fa-brands fa-google btn btn-outline-light shadow-sm p-3 bg-body rounded fs-1"></i>
                </div>
                <p class="text-sm font-weight-bold text-secondary">or</p>
                <div id="error_sign_in"></div>
                <form class="d-flex flex-wrap justify-content-center align-items-center" method="POST" action="<?php echo URLROOT ;?>/logins/signin" data-parsley-validate>
                    <input type="text" name="email" class="form-control form-control-lg col-sm-10 col-11 my-2" placeholder="Email*" required data-parsley-type="email">
                    <input type="password" name="password" class="form-control form-control-lg col-sm-10 col-11 my-2" placeholder="Password*" required data-parsley-minlength="3">
                    <div class="col-sm-10 col-11 form-check form-switch fs-5 d-flex align-items-center ms-5 my-2">
                        <input class="form-check-input" style="" name="rememberme" type="checkbox" id="rememberme">
                        <label class="form-check-label" for="rememberme">Remember me</label>
                    </div>
                    <input type="submit" class="btn btn-lg btn-primary btn-lg col-md-5 col-8 mb-0" value="Register">
                </form>
                <p class="text-sm mt-3 mb-0">Don't have an account? <a href="<?php echo URLROOT ;?>/logins#sign_up" class="text-dark font-weight-bolder">Sign in</a></p>
            </div>
        </div>

        <!-- sign-up -->
        <div id="sign_up" class="col-md-6 col-sm-8 col-10">
            <div class="d-flex flex-column justify-content-center align-items-center gap-3 shadow-sm p-3 mb-5 py-5 bg-body rounded animate__animated animate__bounceIn">
                <h1 class="text-center mb-3">Register with</h1>
                <div class="d-flex justify-content-center align-items-center gap-5">
                    <i class="fa-brands fa-facebook btn btn-outline-light shadow-sm p-3 bg-body rounded fs-1"></i>
                    <i class="fa-brands fa-google btn btn-outline-light shadow-sm p-3 bg-body rounded fs-1"></i>
                </div>
                <p class="text-sm font-weight-bold text-secondary">or</p>
                <div id="error_sign_up"></div>
                <form class="d-flex flex-wrap justify-content-center align-items-center" method="POST" action="<?php echo URLROOT ;?>/logins/signup" data-parsley-validate>
                    <input type="text" name="first_name" class="form-control form-control-lg col-sm-10 col-11 my-2" placeholder="First Name*" required data-parsley-minlength="3">
                    <input type="text" name="last_name" class="form-control form-control-lg col-sm-10 col-11 my-2" placeholder="Last Name*" required data-parsley-minlength="3">
                    <input type="text" name="email" class="form-control form-control-lg col-sm-10 col-11 my-2" placeholder="Email*" required data-parsley-type="email">
                    <input type="text" name="phone" class="form-control form-control-lg col-sm-10 col-11 my-2" placeholder="Phone Number">
                    <input type="password" name="password" class="form-control form-control-lg col-sm-10 col-11 my-2" placeholder="Password*" required data-parsley-minlength="3">
                    <input type="password" name="conf_password" class="form-control form-control-lg col-sm-10 col-11 my-2" placeholder="Confirm Password*" required data-parsley-minlength="3">
                    <div class="col-sm-10 col-11 d-flex flex-column">
                        <div>
                            <label class="fs-5 me-2" for="administrator">Administrator </label>
                            <input value="2" name="role" type="radio" id="administrator" required>
                        </div>
                        <div>
                            <label class="fs-5 me-2" for="player">Player </label>
                            <input value="3" name="role" type="radio" id="player" required>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-lg btn-primary btn-lg col-md-5 col-8 mb-0" value="Register">
                </form>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="<?php echo URLROOT ;?>/logins#sign_in" class="text-dark font-weight-bolder">Sign in</a></p>
            </div>
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