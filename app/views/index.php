<?php require APPROOT . '/views/includes_site/header.php'; ?>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <!-- Header -->
    <header id="header">

        <?php require APPROOT . '/views/includes_site/navbar.php'; ?>
        
        <!-- Home -->
        <div class="w-100 vh-100 d-flex flex-column justify-content-center align-items-center gap-3 text-light animate__animated animate__backInDown" id="home">
            <h1 class="text-uppercase">Welcome To R-Stadiom</h1>
            <h3 class="text-center">Easily find a stadium or a sports club in Morocco</h3>
            <form action="" class="w-100 d-flex flex-wrap justify-content-center align-items-center gap-3">
                <div class="search_select_box">
                    <select class="selectpicker" data-live-search="true">
                        <option value="all">All sports</option>
                        <?php foreach ($data['sports'] as $sport) : ?>
                            <option value="<?php echo  $sport->id ;?>"><?php echo  $sport->sport ;?></option>
                        <?php endforeach ;?>
                    </select>
                </div>
                <div class="search_select_box">
                    <select class="selectpicker" data-live-search="true">
                        <option>All the cities</option>
                        <?php foreach ($data['citys'] as $city) : ?>
                            <option value="<?php echo  $city->id ;?>"><?php echo  $city->city ;?></option>
                        <?php endforeach ;?>
                    </select>
                </div>
                <a class="btn btn-lg" id="btn_reservation" href="#reservation">Find Now</a>
            </form>
        </div>
    </header>

    <!-- Body -->
    <section>
        <!-- Reservation -->
        <div class="py-4" id="reservation">
            <!-- Menu Reservation -->
            <div class="d-md-flex justify-content-center align-items-center gap-3 shadow-sm py-3 px-3 mt-5 mb-5 bg-body rounded" id="menu_stadium">
                <div class="search_select_box">
                    <select class="selectpicker" data-live-search="true" id="sport">
                        <option value="0">All sports</option>
                        <?php foreach ($data['sports'] as $sport) : ?>
                            <option value="<?php echo  $sport->id ;?>"><?php echo  $sport->sport ;?></option>
                        <?php endforeach ;?>
                    </select>
                </div>
                <div class="search_select_box">
                    <select class="selectpicker" data-live-search="true" id="city">
                        <option value="0">All the cities</option>
                        <?php foreach ($data['citys'] as $city) : ?>
                            <option value="<?php echo  $city->id ;?>"><?php echo  $city->city ;?></option>
                        <?php endforeach ;?>
                    </select>
                </div>
                <div class="input-group">
                    <input type="text" id="name_stadium" class="form-control" placeholder="Username" style="height: 50px;">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                </div>
                <button class="btn btn-lg find_now" type="button" id="btn_reservation">Find Now</button>
            </div>
        <script>
            
            const find_now = document.querySelector('.find_now');
            find_now.addEventListener('click', function(){
                var sport = document.querySelector('#sport').value;
                var city = document.querySelector('#city').value;
                var name_stadium = document.querySelector('#name_stadium').value;
                $.ajax({
                    url:'<?=URLROOT?>/Site/ajax',
                    method:'POST',
                    data:{
                        sport:sport,
                        city:city,
                        name_stadium:name_stadium,
                    },
                    success:function(data){
                        console.log(data);
                        let stadiums=JSON.parse(data);
                        const cards_stadium = document.querySelector('#cards_stadium');
                        cards_stadium.innerHTML = '';
                        stadiums.forEach(stad=>{
                            let card=document.createElement('div');
                            card.className="card_stadium col-md-5 col-11 wow bounceInLeft";
                            card.dataset.wowDelay="1s";
                            card.innerHTML=`
                                        <div class="img_stadium">
                                            <img src="<?php echo URLROOT; ?>/assets/slider1.jpg" alt="Image">
                                        </div>
                                        <div class="text-center">
                                            <h2>${stad.name}</h2>
                                            <h5>${stad.city}.${stad.sport}</h5>
                                            <h5>${stad.site_web}</h5>
                                            <a class="btn btn-lg mt-4" id="btn_reservation" href="#">Book Now</a>
                                        </div>
                                        <div class="img_stadium">${stad.location}</div>
                            `;
                            cards_stadium.appendChild(card);
                        })
                    }
                });
            });
        </script>
            <!-- Card Reservation -->
            <div id="cards_stadium" class="flex-wrap gap-4">
                <?php foreach ($data['stadiums'] as $stadium) : ?>
                    <div class="card_stadium col-md-5 col-11 wow bounceInLeft" data-wow-delay="1s">
                        <div class="img_stadium"><img src="<?php echo URLROOT; ?>/assets/slider1.jpg" alt="Image"></div>
                        <div class="text-center">
                            <h2><?php echo $stadium->name ;?></h2>
                            <h5><?php echo $stadium->city.', '.$stadium->sport ;?></h5>
                            <h5><?php echo $stadium->site_web ;?></h5>
                            <a class="btn btn-lg mt-4" id="btn_reservation" href="#">Book Now</a>
                        </div>
                        <div class="img_stadium"><?php echo $stadium->location ;?></div>
                    </div>
                <?php endforeach ;?>
            </div>
        </div>

        <!-- About -->
        <div class="py-5" id="about">
            <div class="h1 text-center text-uppercase text-light">About Us</div>
            <div class="accordion" style="width: 90%;" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        NOTRE OFFRE
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="d-flex flex-wrap justify-content-center align-items-center gap-5">
                            <div class="card col-xl-3 col-md-5 col-sm-8 col-11 text-center border-0 h-100 py-5 shadow-sm">
                                <i class="fas fa-street-view icon"></i>
                                <div class="card-body my-0 my-sm-4 p-2 p-sm-3">
                                    <h5 class="card-title">The largest sports booking website in Morocco :</h5>
                                    <p class="card-text">
                                        R-Staduim lists several sports centers in Morocco. Find the sports activity of your choice in your region :
                                    </p>
                                    <div>
                                        <p class="btn btn-link text-info">Marrackech</p>
                                        <p class="btn btn-link text-info">Youssoufia</p>
                                        <p class="btn btn-link text-info">Safi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-xl-3 col-md-5 col-sm-8 col-11 text-center border-0 h-100 py-5 shadow-sm">
                                <i class="fas fa-volleyball-ball icon"></i>
                                <div class="card-body my-0 my-sm-4 p-2 p-sm-3">
                                    <h5 class="card-title">An unrivaled choice of sports activities :</h5>
                                    <p class="card-text">R-Stadium offers as many sports as possible: from football to bascketball, from tennis.</p>
                                    <div>
                                        <p class="btn btn-link text-info">Football</p>
                                        <p class="btn btn-link text-info">Basketball</p>
                                        <p class="btn btn-link text-info">Tennis</p>
                                        <p class="btn btn-link text-info">Fitness</p>  
                                    </div>
                                </div>
                            </div>
                            <div class="card col-xl-3 col-md-5 col-sm-8 col-11 text-center border-0 h-100 py-5 shadow-sm">
                                <i class="fa-solid fa-bolt icon"></i>
                                <div class="card-body my-0 my-sm-4 p-2 p-sm-3">
                                    <h5 class="card-title">Simple & instant online booking :</h5>
                                    <p class="card-text">
                                        Check the availability of your activity in real time and book instantly online, 24/7, without ever moving around or picking up the phone.
                                        Our planning tool allows you to align your calendar with that of your colleagues to organize sports after-works with ease and conviviality.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        NOS SERVICES
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="d-flex flex-wrap justify-content-center align-items-center gap-5">
                            <div class="card col-xl-3 col-md-5 col-sm-8 col-11 text-center border-0 h-100 py-5 shadow-sm">
                                <div class="icon"><i class="fas fa-map-marked-alt my-2"></i></div>
                                <div class="card-body my-0 my-sm-4 p-2 p-sm-3">
                                    <h5 class="card-title">Sports Directory</h5>
                                    <p class="card-text">
                                        Add your club to our directory for free so that our users can discover your infrastructure and services.
                                    </p>
                                </div>
                            </div>
                            <div class="card col-xl-3 col-md-5 col-sm-8 col-11 text-center border-0 h-100 py-5 shadow-sm">
                                <div class="icon"><i class="fas fa-calendar-check my-2"></i></div>
                                <div class="card-body my-0 my-sm-4 p-2 p-sm-3">
                                    <h5 class="card-title">Online booking</h5>
                                    <p class="card-text">
                                        Receive reservations 24/7. Athletes can book your services at any time and pay online.
                                    </p>
                                </div>
                            </div>
                            <div class="card col-xl-3 col-md-5 col-sm-8 col-11 text-center border-0 h-100 py-5 shadow-sm">
                                <div class="icon"><i class="fas fa-drafting-compass my-2"></i></div>
                                <div class="card-body my-0 my-sm-4 p-2 p-sm-3">
                                    <h5 class="card-title">Management software</h5>
                                    <p class="card-text">
                                        We have developed tools for sports centers to efficiently manage their reservations and resources.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        VOS AVANTAGES
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="d-flex flex-wrap justify-content-center align-items-center gap-5">
                            <div class="card col-xl-3 col-md-5 col-sm-8 col-11 text-center border-0 h-100 py-5 shadow-sm">
                                <div class="icon"><i class="fa-solid fa-bullhorn my-2"></i></div>
                                <div class="card-body my-0 my-sm-4 p-2 p-sm-3">
                                    <h5 class="card-title">Increase your visibility</h5>
                                    <p class="card-text">
                                        Your land and services will be distributed to a large number of users.
                                    </p>
                                </div>
                            </div>    
                            <div class="card col-xl-3 col-md-5 col-sm-8 col-11 text-center border-0 h-100 py-5 shadow-sm">
                                <div class="icon"><i class="fas fa-coins my-2"></i></div>
                                <div class="card-body my-0 my-sm-4 p-2 p-sm-3">
                                    <h5 class="card-title">Make your infrastructure profitable</h5>
                                    <p class="card-text">
                                        Optimize your occupancy rate with new customers, eliminating gaps in your schedule, reducing cancellations.
                                    </p>
                                </div>
                            </div>    
                            <div class="card col-xl-3 col-md-5 col-sm-8 col-11 text-center border-0 h-100 py-5 shadow-sm">
                                <div class="icon"><i class="fas fa-hand-holding-usd my-2"></i></div>
                                <div class="card-body my-0 my-sm-4 p-2 p-sm-3">
                                    <h5 class="card-title">Customer acquisition</h5>
                                    <p class="card-text">
                                        Our mission is to fulfill your infrastructure and reservations through our sales channels and online presence.
                                    </p>
                                </div>
                            </div> 
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
        <!-- Gallery -->
        <div id="gallery">
            <div class="col-lg-3 col-sm-6"><img src="<?php echo URLROOT; ?>/assets/slider1.jpg" alt="image1"></div>
            <div class="col-lg-3 col-sm-6"><img src="<?php echo URLROOT; ?>/assets/slider1.jpg" alt="image2"></div>
            <div class="col-lg-3 col-sm-6"><img src="<?php echo URLROOT; ?>/assets/slider1.jpg" alt="image3"></div>
            <div class="col-lg-3 col-sm-6"><img src="<?php echo URLROOT; ?>/assets/slider1.jpg" alt="image4"></div>
            <div class="col-lg-3 col-sm-6"><img src="<?php echo URLROOT; ?>/assets/slider1.jpg" alt="image5"></div>
            <div class="col-lg-3 col-sm-6"><img src="<?php echo URLROOT; ?>/assets/slider1.jpg" alt="image6"></div>
            <div class="col-lg-3 col-sm-6"><img src="<?php echo URLROOT; ?>/assets/slider1.jpg" alt="image7"></div>
            <div class="col-lg-3 col-sm-6"><img src="<?php echo URLROOT; ?>/assets/slider1.jpg" alt="image8"></div>
        </div>

        <!-- Contact -->
        <div id="contact">
            <div class="h1 text-center text-uppercase text-light mt-5">Contact Us</div>
            <form method="POST" action="<?php echo URLROOT ;?>/contacts/sendMessage">
                <div class="row m-5 pt-5 d-flex justify-content-center align-items-center gap-3">
                    <div class="d-flex flex-column gap-4 col-md-5">
                        <div class="form-group">
                            <input class="form-control" name="username" type="text" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Your Email" required/>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" name="phone" type="tel" placeholder="Your Phone"/>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" name="message" placeholder="Your Message..." required></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center"><button class="btn btn-primary btn-xl mt-5 text-uppercase" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-light py-5">
        <div class="d-lg-flex justify-content-around align-items-center gap-3">
            <div class="col-lg-5 d-flex flex-column px-4">
                <a class="nav-link h1 text-light" href="#page-top">R-Stadium</a>
                <p class="ps-3">
                    <b> R-Stadium</b> system vous propose, un ensemble de logiciels de gestion et de contrôle d'accès, un ensemble homogène couvrant l’intégralité de vos besoins pour gérer, contrôler et accroître votre activité.
                </p>
                <p class="ps-3">
                    <b> R-Stadium</b> System est présent dans du aires de jeux, mais aussi dans les secteurs du fitness, des piscines, des installations sportives municipales, des tennis, …
                </p>
            </div>
            <div class="">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link text-light" href="#reservation">Reservation</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#connecter">Se Connecter</a></li>
                </ul>
            </div>
            <div class="d-flex flex-column gap-3 text-center">
                <div>&copy; Copyright 2022 R-Stadium</div>
                <div class="d-flex text-light justify-content-center gap-2">
                    <a class="bi bi-facebook nav-link text-light h1"></a>
                    <a class="bi bi-twitter nav-link text-light h1"></a>
                    <a class="bi bi-instagram nav-link text-light h1"></a>
                    <a class="bi bi-linkedin nav-link text-light h1"></a>
                </div>
            </div>
        </div>
    </footer>
</body>

    <?php require APPROOT . '/views/includes_site/footer.php'; ?>