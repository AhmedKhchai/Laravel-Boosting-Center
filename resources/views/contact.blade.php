@extends('layout')

@section('content')


<body>

    <div class="fh5co-loader"></div>

    <div id="page">


        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/Temoiniage-bg.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <h1 class="heading-section">Nous contacter</h1>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="fh5co-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-push-1 animate-box">

                        <div class="fh5co-contact-info">
                            <h3>Information de Contact </h3>
                            <ul>
                                <li class="address">19 Rue Jamaa Karaouyine<br> en face d'Hôpital Essaada El Jadida 24020</li>
                                <li class="phone"><a href="tel://0523371794">0600-357042 / 05233-71794</a></li>
                                <li class="email"><a href="mailto:Boosting.languages@gmail.com">Boosting.languages@gmail.com</a></li>
                                <!-- <li class="url"><a href="http://freehtml5.co">freeHTML5.co</a></li> -->
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-6 animate-box">
                        <h3>Prenez Contact Avec Nous</h3>
                        <form method="POST" action="/contact">
                            @csrf
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <!-- <label for="fname">First Name</label> -->
                                    <!-- <input type="text" id="fname" class="form-control" placeholder="Your firstname"> -->
                                </div>
                                <div class="col-md-6">
                                    <!-- <label for="lname">Last Name</label> -->
                                    <!-- <input type="text" id="lname" class="form-control" placeholder="Votre nom de famille"> -->
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">

                                    <input type="text" id="email" name="email" class="form-control" placeholder="Votre adresse électronique">
                                    @error('email')
                                    <div style="color: red;">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                                </div>
                            </div> -->

                            <div class="row form-group">
                                <!-- <div class="col-md-12">
                                    
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Vous êtes intéressé par quelle langue"></textarea>
                                </div> -->
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Envoyer un message
                                </button>
                            </div>

                            @if (session ('message')
                            )
                            <div style="color: forestgreen;">
                                {{ session('message')}}
                            </div>
                            @endif

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div id="map" class="fh5co-map"></div>

        <div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
            <div class="overlay"></div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    <div class="date-counter text-center">
                        <h2>Obtenez plusieurs cours à prix réduit
                        </h2>
                        <div class="simply-countdown simply-countdown-one"></div>
                        <p><strong>Offre limitée, dépêchez-vous !
                            </strong></p>
                        <p><a href="#" class="btn btn-primary btn-lg btn-reg">Inscrivez-vous dès maintenant !
                            </a></p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>


    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOUY1hs42DXbdNA_l3dPCbd20mF14TLg8&callback=initMap"></script>
    <script src="js/google_map.js"></script>

</body>





@endsection