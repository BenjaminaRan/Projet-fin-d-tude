<!DOCTYPE html>


<html lang="en">

<head>

     <title>Hôpital</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="Stylecss/bootstrap.min.css">
     <link rel="stylesheet" href="Stylecss/font-awesome.min.css">
     <link rel="stylesheet" href="Stylecss/animate.css">
     <link rel="stylesheet" href="Stylecss/owl.carousel.css">
     <link rel="stylesheet" href="Stylecss/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="Stylecss/tooplate-style.css">
     <style>
     
     
        .dropdown-menu-dark {
            background-color: #343a40; 
            color: orange; 
        }
        
    </style>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>

     <!-- HEADER -->
     <header>
                    <div class="col-md-4 col-sm-4">
                         <p>Bienvenue dans ce site hôpital</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 0381439635</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> (Lundi-Vendredi)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a
                                   href="#">benjaminarandriantsoa@gmail.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ôpital  Mangamila</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="#google-map" class="smoothScroll "style="color:chocolate">Lieux</a></li>
                    <li class="appointment-btn"><a href="#appointment">Rendez-vous</a></li>
                         <!-- <li><a href="#team" class="smoothScroll">Doctors</a></li> -->
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle smoothScroll" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Se Connecter <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            @if (Route::has('login'))
                            @auth
                                        @if (auth()->user()->user_type == 'client')
                                             <li><a href="{{ route('chatify') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Messages</a></li>
                                        @elseif (auth()->user()->user_type == 'admin')
                                             <li><a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a></li>
                                        @endif
                                   @else
                                        <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
                                        @if (Route::has('register'))
                                             <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                        @endif
                                   @endauth
                            @endif
                        </ul>
                    </li>
                    
                    </div>
                        </ul>
                    </li>
                       
                    </ul>
               </div>

          </div>
     </section>
     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Let's make your life happier</h3>
                                        <h1>Healthy Living</h1>
                                        <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our
                                             Doctors</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Aenean luctus lobortis tellus</h3>
                                        <h1>New Lifestyle</h1>
                                        <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More
                                             About Us</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Pellentesque nec libero nisi</h3>
                                        <h1>Your Health Benefits</h1>
                                        <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read
                                             Stories</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <!-- SECTION TITLE -->
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Listes des employées</h2>
                </div>
            </div>

            @if ($docteur->count() > 0)
                @foreach ($docteur as $docteur)
                <div class="col-md-4 col-sm-6">
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.html">
                            <img src="{{ asset('img/' . $docteur->Image) }}"class="img-responsive">
                        </a>
                        <div class="news-info">
                            <h3><a href="news-detail.html">{{ $docteur->Nom }} {{ $docteur->Prenom }}</a></h3>
                            <p>{{ $docteur->Poste }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <p>Aucun docteur trouvé.</p>
            @endif

            @if ($infirmieres->count() > 0)
                @foreach ($infirmieres as $infirmiere)
                <div class="col-md-4 col-sm-6">
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <a href="news-detail.html">
                            <img src="{{ asset('img/' . $infirmiere->Image) }}"class="img-responsive">
                        </a>
                        <div class="news-info">
                        <span>19 Avril 2021</span>
                            <h3>{{ $infirmiere->Nom }} {{ $infirmiere->Prenom }}</h3>
                            <p>{{ $infirmiere->Poste }}</p>
                            <div class="author">
                            <a href="#">
                            <img src="{{ asset('img/' . $infirmiere->Image) }}"class="img-responsive">
                           
                            <div class="author-info">

                            <h5>{{ $infirmiere->Nom }}</h5>
                          <p>  {{ $infirmiere->Prenom }}</p> 
                        </div>

                        </div>
                        </a>

                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <p>Aucune infirmière trouvée.</p>
            @endif

        </div>
    </div>
</section>


<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">
            @auth
                <div class="col-md-12">
                    <h4>Il y a un utilisateur connecté</h4>
                </div>
            @else
                <div class="col-md-6 col-sm-6">
                @if (isset($docteur))
                <img src="{{ asset('img/' . $docteur->Image) }}" class="img-responsive" alt="Image de l'employé docteur"   style="border-radius: 15px;">
                @else
                              <p>Aucun employé "docteur" trouvé.</p>
                         @endif

                </div>

                <div class="col-md-6 col-sm-6">
                    <form method="POST" action="{{ route('register') }}" class="appointment-form">
                        @csrf
                        <h4>Inscrire maintenant</h4>
                        <div class="col-md-12 col-sm-12">
                            <label for="user_type">User Type</label>
                            <input type="text" class="form-control" id="user_type" name="user_type" value="client" readonly>
                        </div>
        
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-12 col-sm-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="form-control btn btn-primary" id="register-submit" name="register-submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</section>


     <br><br><br>
     <br><br><br>
     <!-- GOOGLE MAP -->
     <section id="google-map">
          <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24364635.74135334!2d43.55968222484929!3d-18.766947299937582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07ddfdfac6d67%3A0x8a19d68f0b5d5af5!2sMadagascar!5e0!3m2!1sen!2sth!4v1688313012423"
               width="50%" height="350" frameborder="0" style="border-radius:15px" allowfullscreen></iframe>

     </section>

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu
                                   elit consequat ultricies.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#">
                                             <h5>Amazing Technology</h5>
                                        </a>
                                        <span>March 08, 2018</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#">
                                             <h5>New Healing Process</h5>
                                        </a>
                                        <span>February 20, 2018</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/tooplate" class="fa fa-facebook-square"
                                             attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2017 Your Company

                                        | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                             class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="funjs/jquery.js"></script>
     <script src="funjs/bootstrap.min.js"></script>
     <script src="funjs/jquery.sticky.js"></script>
     <script src="funjs/jquery.stellar.min.js"></script>
     <script src="funjs/wow.min.js"></script>
     <script src="funjs/smoothscroll.js"></script>
     <script src="funjs/owl.carousel.min.js"></script>
     <script src="funjs/arriere.js"></script>

</body>

</html>