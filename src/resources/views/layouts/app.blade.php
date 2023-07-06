<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>{{ config('theme.site_title') }}</title>
    <meta name="description" content="{{ config('theme.site_description') }}">
    <meta name="author" content="{{ config('theme.site_title') }}">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Font
  ================================================== -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
    
    <link rel="shortcut icon" type="image/x-icon" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/favicon.ico" />
    <!-- CSS
  ================================================== -->
 <!--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
 <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/css/bootstrap_3.min.css"/>
    <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/css/colorbox.css"/>
    <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/css/owl.carousel.css"/>
    <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/layerslider/css/layerslider.css" type="text/css">
    <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/rs-plugin/css/settings.css"/>
    <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/css/rev-settings.css"/>
    <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/style.css"/>
    


<!-- Prism -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/themes/prism-okaidia.min.css" integrity="sha512-5HvW0a7ihK3ro2KhwEksDHXgIezsTeZybZDIn8d8Y015Ny+t7QWSIjnlCTjFzlK7Klb604HLGjsNqU/i5mJLjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
<!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<!-- LightboxCSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />

    <!-- ================================================== -->

<style>    
    .custom-logo-h3 {
    color: white;
}

/* Tamaño fijo para las imagenes del carousel */
.slick-slider img {
    width: 100%;
    height: 300px; 
    object-fit: cover; /* La imagen se recorta en lugar de estirarse */
}

/* Page content */
.wrapper .home-page .page-content{
 padding-bottom:0px;
}

/* Images footer */
.square-image {
    width: 50px;
    height: 50px;
    object-fit: cover;
}
</style>

</head>
<body>
    

    <div class="wrapper">
        <header class="site-header">


        @if(config('theme.header_sub_bar_active'))
            <div class="sub-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6"><!-- Contacts start -->
                            <div class="contacts">
                            @if(config('theme.site_phone'))
                            <p><i class="fa fa-phone-square"></i>{{ config('theme.site_phone') }}</p>
                            @endif

@if(config('theme.site_email'))
<p><i class="fa fa-envelope-square"></i><a href="mailto:{{ config('theme.site_email') }}">{{ config('theme.site_email') }}</a></p>
@endif
                            </div><!-- Contacts start -->
                        </div>
                        <div class="col-lg-6 col-sm-6"><!-- Social media start -->
                            <div class="social-media">


                            @if(config('theme.facebook'))<a href="{{ config('theme.facebook') }}"><i class="fa fa-facebook"></i></a>@endif
                                
                                @if(config('theme.twitter'))<a href="{{ config('theme.twitter') }}"><i class="fa fa-twitter"></i></a>@endif
                                    
                                @if(config('theme.linkedin'))<a href="{{ config('theme.linkedin') }}"><i class="fa fa-linkedin"></i></a>@endif
                                    
                                @if(config('theme.google_plus'))<a href="{{ config('theme.google_plus') }}"><i class="fa fa-google-plus"></i></a>@endif
                                    
                                @if(config('theme.github'))<a href="{{ config('theme.github') }}"><i class="fa fa-github"></i></a>@endif
                                    
                                @if(config('theme.pinterest'))<a href="{{ config('theme.pinterest') }}"><i class="fa fa-pinterest"></i></a>@endif
                                    
                                @if(config('theme.instagram'))<a href="{{ config('theme.instagram') }}"><i class="fa fa-instagram"></i></a>@endif
                                    
                                @if(config('theme.youtube'))<a href="{{ config('theme.youtube') }}"><i class="fa fa-youtube"></i></a>@endif

                                @if(config('theme.vimeo'))<a href="{{ config('theme.vimeo') }}"><i class="fa fa-vimeo"></i></a>@endif
                                
                                @if(config('theme.rss'))<a href="{{ config('theme.rss') }}"><i class="fa fa-rss"></i></a>@endif
                               
                            
                            </div><!-- Social media end -->
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="main-bar navbar-container navbar">
                <div class="container">

             

    <h2 class="logo">
    <a href="{{ route('home') }}">
    @if (config('theme.logo'))
    @php
        $imagePath = public_path(config('theme.logo'));
        $imageInfo = @getimagesize($imagePath);
    @endphp

    @if ($imageInfo !== false)
        <img src="{{ config('theme.logo') }}" alt="{{ config('theme.site_title') }}">
    @else
        {{ config('theme.site_title') }}
    @endif
@else
    {{ config('theme.site_title') }}
@endif
    </a>
</h2>


                    <button class="btn-toggle"><i class="fa fa-reorder"></i></button>

                    <nav class="nav">
                        <ul class="main-menu">
                      
                            @foreach($public_menu as $item)
                             @include('plexus::partials.menu-item', ['item' => $item])
                            @endforeach


							
                        </ul>
                    </nav>
                </div>
            </div><!-- Main bar end -->
        </header>


                          



        @if(config('theme.main_content_active'))
        <div class="main-content home-page">
   
                @yield('content')
                    @endif 


        @if(config('theme.footer_2_active'))
             <section class="useful">
                         <div class="container">
                             <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <h4>CUSTOMER SERVICES</h4>
                            <ul class="none-style white">
                                <li><a href="#"><i class="fa fa-check-circle"></i> Contact Us</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Return Policy</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> International Customers</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Rebates</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h4>MY ACCOUNT</h4>
                            <ul class="none-style">
                                <li><a href="#"><i class="fa fa-check-circle"></i> Login</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Edit My Profile</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Current Orders</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Past Orders</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Return Request</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h4>COMPANY INFO</h4>
                            <ul class="none-style">
                                <li><a href="#"><i class="fa fa-check-circle"></i> About Us</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Office Hours</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Locations</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Policies</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Shiny Mysterious Alarm</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h4>RESOURCES</h4>
                            <ul class="none-style">
                                <li><a href="#"><i class="fa fa-check-circle"></i> Site Map</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Email Subscription</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Vendor Relations</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Rhinestone Forsaken</a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i> Random Alpha</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section> 
            @endif

        </div><!-- main-content home-page -->

        @if(config('theme.footer_active'))
        <footer>
            <div class="content-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget widget">


                            <h3 class="custom-logo-h3">
  @if (config('theme.logo'))
    @php
        $imagePath = public_path(config('theme.logo'));
        $imageInfo = @getimagesize($imagePath);
    @endphp

    @if ($imageInfo !== false)
        <img src="{{ config('theme.logo') }}" alt="{{ config('theme.site_title') }}">
    @else
        {{ config('theme.site_title') }}
    @endif
@else
    {{ config('theme.site_title') }}
@endif
</h3>
<p>{{ Str::limit(config('theme.site_description'), 300) }}</p>


                                <div class="social-media">
                    
                                @if(config('theme.facebook'))<a href="{{ config('theme.facebook') }}"><i class="fa fa-facebook"></i></a>@endif
                                @if(config('theme.twitter'))<a href="{{ config('theme.twitter') }}"><i class="fa fa-twitter"></i></a>@endif
                                @if(config('theme.linkedin'))<a href="{{ config('theme.linkedin') }}"><i class="fa fa-linkedin"></i></a>@endif
                                @if(config('theme.google_plus'))<a href="{{ config('theme.google_plus') }}"><i class="fa fa-google-plus"></i></a>@endif
                                @if(config('theme.github'))<a href="{{ config('theme.github') }}"><i class="fa fa-github"></i></a>@endif
                                @if(config('theme.pinterest'))<a href="{{ config('theme.pinterest') }}"><i class="fa fa-pinterest"></i></a>@endif     
                                @if(config('theme.instagram'))<a href="{{ config('theme.instagram') }}"><i class="fa fa-instagram"></i></a>@endif
                                @if(config('theme.youtube'))<a href="{{ config('theme.youtube') }}"><i class="fa fa-youtube"></i></a>@endif
                                @if(config('theme.vimeo'))<a href="{{ config('theme.vimeo') }}"><i class="fa fa-vimeo"></i></a>@endif
                                @if(config('theme.rss'))<a href="{{ config('theme.rss') }}"><i class="fa fa-rss"></i></a>@endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget widget">

                           

                            <h4>LATEST PAGES</h4>
                                                
                            <ul class="twitter-feed">
    @php $count = 0; @endphp
    @foreach ($pages as $page)
        @if ($count < 3)
            <li>
                <a href="{{ route('page.show', $page->slug) }}">
                    <i class="fa fa-file-text-o"></i>
                    <div class="right-twi">
                        <p>{{ $page->title }}</p>
                        <!-- <p>{!! Str::limit($page->content, 50) !!}</p> -->
                        <!--
                        @if ($page->created_at)
                            <strong>{{ $page->created_at->diffForHumans() }}</strong>
                        @endif -->
                    </div>
                </a>
            </li>
            @php $count++; @endphp
        @endif
    @endforeach

    @if (count($pages) > 3)
        <li>
            <a href="{{ route('page.list') }}">
                <i class="fa fa-plus"></i>
                <div class="right-twi">
                    <p>More</p>
                </div>
            </a>
        </li>
    @endif
</ul>

                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget widget">

                            <h4>RECENT POSTS</h4>
                                <ul class="recent-post"> 

@foreach ($firstThreePosts as $post_footer)
    <li>
        <a class="thumb" href="{{ route('post.show', $post_footer->slug) }}">
            <img class="square-image" src="{{ $post_footer->image ?? '/storage/default/thumbnail-default.gif' }}" alt="{{ $post_footer->title }}">
        </a>
        <div class="right-post">
            <a href="{{ route('post.show', $post_footer->slug) }}">{{ $post_footer->title }}</a>
            <p><i class="fa fa-clock-o"></i> Posted on {{ $post_footer->created_at->format('d M. Y') }}</p>
        </div>
    </li>
@endforeach




                                   
                                 </ul>



                            </div>
                        </div>

                                    <div class="col-md-3 col-sm-6">
                                                    <div class="footer-widget widget">
                                                     
                                                    
                                                    
                                <h4>CONTENT TAGS</h4>

                                <div class="tagcloud">
    @foreach($tags as $tag)
        @if($tag->posts->count() > 0)
            <a href="{{ route('tag.show', ['slug' => $tag->slug]) }}">{{ $tag->title }}</a>
        @endif
    @endforeach
</div>

                                <!--  <a class="link-more" href="{{ route('tag.list') }}">MORE TAGS...</a> -->
                                

                                                    </div>
                                            
                                            
                                    </div>


                            </div>
                       </div>
                 </div>                                  

            
        </footer>
        @endif


        @if(config('theme.footer.copyright_active'))
        <div style="margin-top: 10px;"></div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
<p>© <span id="currentYear"></span> <a href="{{ config('theme.site_url') }}">{{ config('theme.site_title') }}</a>. All rights reserved.</p>
                        </div>
                        <div class="col-md-3">
                            <p class="back-top"><a href="#" id="to-top">BACK TO TOP <i class="fa fa-angle-up"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

    </div> <!-- End Wrapper -->

<!-- Jquery JS -->
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/jquery.min.js"></script>
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/jquery.responsiveTabs.js"></script>
<!-- Classie and jquery.colorbox JS -->
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/classie.js"></script>
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/jquery.colorbox.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/owl.carousel.min.js"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- LayerSlider script files -->
<script src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/layerslider/js/greensock.js" type="text/javascript"></script>
<script src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
     
      // Calling LayerSlider on the target element
      $("#layerslider").layerSlider({
          responsive: true,
          layersContainer: 1170,
          skinsPath:'layerslider/skins/',
        });
    });
</script>

<!-- Custom JS -->
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/custom-home2.js"></script>
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/custom-index.js"></script>

<!-- Prism JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>

<!-- Slick JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Lightbox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<!-- Menu Dinamico -->
<script>
$(document).ready(function(){
    $('.dropdown-submenu a.dropdown-toggle').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});
</script>

<!-- Gallery with Colorbox js -->
<script type="text/javascript">
  $(document).ready(function() {
    $(".colorbox").colorbox({
      rel: function() {
        return $(this).data("gallery");
      },
      maxWidth: "90%",
      maxHeight: "90%",
      onOpen: function() {
        $(".navbar").css("z-index", "9999");
      },
      onClosed: function() {
        $(".navbar").css("z-index", "");
      }
    });
  });
</script>




<!-- Sliders with slick -->
<script>
    $(document).ready(function(){
        $('.slick-slider').slick({
            dots: true,
            infinite: true,
            variableWidth: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>

<script>
  var currentYear = new Date().getFullYear();
  document.getElementById('currentYear').textContent = currentYear;
</script>

</body>
</html>