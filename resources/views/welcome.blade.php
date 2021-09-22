<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
    <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ setting('site.title') }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset(Voyager::image(setting('site.logo'))) }}" rel="icon">
  <link href="{{ asset(Voyager::image(setting('site.logo'))) }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <link href="{{ asset('fonts/nunito/Nunito-Bold')}}" rel="stylesheet">
  <link href="{{ asset('fonts/nunito/Nunito-Regular')}}" rel="stylesheet">
  <link href="{{ asset('fonts/nunito/Nunito-Light')}}" rel="stylesheet">

  <style>
  img {
  border-radius: 99%;
}
    @font-face {
      font-family: 'Nunito-Bold';
      src: url('{{asset("fonts/nunito/Nunito-Bold.ttf")}}');
    }
    @font-face {
        font-family: 'Nunito';
        src: url('{{asset("fonts/nunito/Nunito-Regular.ttf")}}');
    }
    @font-face {
        font-family: 'Nunito-Light';
        src: url('{{asset("fonts/nunito/Nunito-Light.ttf")}}');
    }

    .show-read-more .more-text{
      display: none;
    }
  </style>

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        {{-- <h1><a href="#intro" class="scrollto">OMUHA</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#intro"><img src="{{ asset(Voyager::image(setting('site.logo')))}}" alt="" title="" id="header-logo-img"/></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Products</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#location">Location</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
        <?php $index = 1;?>
          @foreach (\App\Slider::all() as $slider )
          <div class="carousel-item {{$index == 1?'active':''}} ">
            <div class="carousel-background"><img src="{{asset(Voyager::image($slider->image))}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>{{$slider->heading}}</h2>
                <p>{{$slider->description}}</p>
                <a href="{{$slider->link}}" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>
          <?php $index++;?>
          @endforeach
         

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">


    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <!-- <i class="ion-ios-bookmarks-outline"></i> -->
            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/wxnxiano.json"
    trigger="loop"
    colors="primary:#f1801b,secondary:#f1801b"
    style="width:70px;height:70px">
</lord-icon>
            <h4 class="title"><a href="">Innovation and Creativity</a></h4>
            <p class="description show-read-more">
              We are group enthusiasts who support innovative ideas and initiatives. We enjoy solving
              problems and creating opportunities. We are not afraid of making mistakes and, in fact,
              we learn from them. We work incessantly in order to make a difference.
            </p>
          </div>

          <div class="col-lg-4 box box-bg">
            <!-- <i class="ion-ios-stopwatch-outline"></i> -->
            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/kbtmbyzy.json"
    trigger="loop"
    colors="primary:#f1801b,secondary:#f1801b"
    style="width:70px;height:70px">
</lord-icon>
            <h4 class="title"><a href="">Reliability</a></h4>
            <p class="description show-read-more">
              Our words, actions, decisions and behavior combine as a consistent whole. We keep all
              our promises and commitments regardless of the circumstances. All our customers who
              use our services experience the assurance that comes in working with OMUHA.
            </p>
          </div>

          <div class="col-lg-4 box">
            <!-- <i class="ion-ios-heart-outline"></i> -->
            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/huwchbks.json"
    trigger="loop"
    colors="primary:#f1801b,secondary:#f1801b"
    style="width:80px;height:80px">
</lord-icon>
            <h4 class="title"><a href="">Affordability</a></h4>
            <p class="description show-read-more">
              We believe our solutions should benefit many who require them. Thus why our pricing is
              always a bit lower compared to the value we bring in the market. We normally finds ways
              to solve our customers’ problem within their budget.
            </p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      {{-- <div class="elipse">
        <svg xmlns="http://www.w3.org/2000/svg" id="b0a37f3a-1907-4368-876c-1460423e9ec9" data-name="Layer 1" width="1099.22345" height="734.89191" viewBox="0 0 1099.22345 734.89191"><title>google_analytics</title><path d="M1133.42648,369.28218C1091.79965,205.596,947.96585,87.43752,779.13608,82.69828c-89.25523-2.50549-183.17665,27.0965-251.55836,130.68464C405.338,398.55792,535.08963,526.51953,625.549,587.32434A566.02694,566.02694,0,0,1,742.54458,692.47955C803.647,764.98734,921.194,855.08846,1061.18723,713.91387,1162.65449,611.59034,1161.15406,478.31333,1133.42648,369.28218Z" transform="translate(-50.38827 -82.55404)" fill="#f2f2f2"/></svg>
      </div> --}}
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p class=" show-read-more">
            {{setting('site.about_us')}}
          </p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our History</a></h2>
              <p class=" show-read-more">
               {{setting('site.history')}}
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p class=" show-read-more">
                {{setting('site.mission')}}
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p class=" show-read-more">
                {{setting('site.vission')}}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>
          </p>
        </header>

        <div class="row">
        <?php $index = 0; ?>
          @foreach (\App\Service::all() as $service)
              <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                <div class="icon"><i class="{{$service->icon }}"></i></div>
                <h4 class="title"><a href="{{$service->link }}" target="_blank" >{{$service->title }}</a></h4>
                <p class="description show-read-more">{{$service->description}}</p>
              </div>
              <?php $index = 0; ?>
          @endforeach
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    {{-- <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Request For Service</h3>
        <p> 
        </p>
        <a class="cta-btn" href="#contact">Request For Service</a>
      </div>
    </section><!-- #call-to-action --> --}}

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Products</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-system">Systems</li>
              <li data-filter=".filter-web">Website</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
        @foreach (\App\Product::all() as $product)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{strtolower($product->category)}} wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset(Voyager::image($product->image))}}" class="img-fluid" alt="">
                <a href="{{asset(Voyager::image($product->image))}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{url($product->url)}}">{{$product->product_name}}</a></h4>
                <p>{{$product->category}}</p>
              </div>
            </div>
          </div>
        @endforeach

        </div>

      </div>
    </section><!-- #portfolio -->

     <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p></p>
        </div>

        <div class="row">
        <?php $index = 0; ?>
          @foreach (\App\Team::all() as $team)
              <div class="col-lg-4 col-md-6 wow fadeInUp" {{$index == 0?'':'data-wow-delay=0.'. $index. 's'}} >
                <div class="member">
                  <img src="{{asset(Voyager::image($team->image))}}" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>{{$team->full_name}}</h4>
                      <span>{{$team->title}}</span>
                      <div class="social">
                        {!! $team->social_media !!}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             <?php $index++ ?>
          @endforeach

        </div>

      </div>
    </section><!-- #team -->  

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>We welcome you to discuss for more information
              about any of our products or services.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>{!! setting('site.company_address')!!}</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:{!! setting('site.company_number')!!}">{!! setting('site.company_number')!!}</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:{!! setting('site.company_email')!!}">{!! setting('site.company_email')!!}</a></p>
            </div>
          </div>

        </div>

        <div class="form" id="contact-form">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{session('status')}}
            </div>
          @endif
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="{{ url('/contact_us')}}" method="POST" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                @error('subject')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                @error('message')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

    {{-- <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Partiners</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          @foreach (\App\Partiner::all() as $partiner)
             <img src="{{ asset(Voyager::image($partiner->image)) }}" alt="{{ $partiner->title }}"> 
          @endforeach
        </div>

      </div>
    </section><!-- #clients --> --}}

  









<!--==========================
      Locatio Section
    ============================-->
    <section id="location">
      <div class="container">
      <header class="section-header wow fadeInUp">
          <h3>Our Location</h3>
          <p>
          </p>
        </header>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0468403239206!2d39.25310051414315!3d-6.764143568023932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4dbc4b420693%3A0x610475cb157117a2!2sOMUHA%20COMPANY%20LIMITED!5e0!3m2!1sen!2stz!4v1631726822653!5m2!1sen!2stz" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
        </div>

      </div>
    </section><!-- #location-->  


    </main>



  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
           <h3>OMUHA</h3>
            <p>
              {!! setting('site.company_description') !!}
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              @foreach ( \App\UsefulLink::all() as $link)
                 <li><i class="ion-ios-arrow-right"></i> <a href="{{url($link->url)}}" target="_blank">{{$link->display_name}}</a></li> 
              @endforeach
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              {!! setting('site.footer_contact') !!}
            </p>

            <div class="social-links">
              {!! setting('site.social_media') !!}
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>
              Be the first to get new from out company, Subscribe to our site 
            </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong> OMUHA</strong>. All Rights Reserved
      </div>
      <!-- <div class="credits"> -->
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        <!-- Designed by <a href="https://omuha.com/">Omuha</a>
      </div> -->
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <div id="preloader"></div> 

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(document).ready(function(){
        var maxLength = 90;
        $(".show-read-more").each(function(){
            var myStr = $(this).text();
            if($.trim(myStr).length > maxLength){
                var newStr = myStr.substring(0, maxLength);
                var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                $(this).empty().html(newStr);
                $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
                $(this).append('<span class="more-text">' + removedStr + '</span>');
            }
        });
        $(".read-more").click(function(){
            $(this).siblings(".more-text").contents().unwrap();
            $(this).remove();
        });
    });
</script>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

