<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  @if(isset($header))

    <title>{{ $header->company_name }}</title>
  @endif
  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

{{-- {{ url('assets/Temp2/en/css/bootstrap.css') }} --}}
 <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="{{ url('assets/bootstrap-3.2.0/css/bootstrap.min.css') }}" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ url('assets/kickcube/ar/css/font-awesome.min.css') }}" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/kickcube/ar/css/slicknav.css') }}" media="screen">

  <!-- KICKCUBE CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/kickcube/ar/css/style.css') }}" media="screen">

  <!-- languages CSS Styles  -->
   <link rel="stylesheet" type="text/css"  href="{{ url('assets/kickcube/ar/css/languages.min.css') }}">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/kickcube/ar/css/responsive.css') }}" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/kickcube/ar/css/animate.css') }}" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/kickcube/ar/css/colors/red.css') }}" title="red" media="screen" />


  <!-- KICKCUBE JS  -->
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery-2.1.4.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.migrate.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/modernizrr.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/asset/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.fitvids.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/nivo-lightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.isotope.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.appear.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/count-to.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.textillate.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.lettering.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.easypiechart.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.nicescroll.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.parallax.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/mediaelement-and-player.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.slicknav.js') }}"></script>
  

  <style type="text/css" media="screen">
    .primary
    {
      background-color:{{ $mysite[0]->primary_color }}; 
    }

    .navbar-default .navbar-nav > li > a.active, .navbar-default .navbar-nav > li:hover > a 
    {
    border-color: {{ $mysite[0]->primary_color }};
    }

    .navbar-default .navbar-nav > li:hover > a, .navbar-default .navbar-nav > li > a.active
    {
    color: {{ $mysite[0]->primary_color }};
    }

    a.main-button, input[type="submit"] {
    background-color: {{ $mysite[0]->primary_color }};
    }

    .classic-title span {
    border-bottom-color: {{ $mysite[0]->primary_color }};
    }

    .primary-text
    {
      color:{{ $mysite[0]->text_color }};
    }

    .btn-system.border-btn {
        border-color: {{ $mysite[0]->primary_color }};
        color: {{ $mysite[0]->primary_color }};
    }
    .hover-text h2{
        color:{{ $mysite[0]->text_color }};
    }

    /*the service icon*/
    .icon-effect-2 {
        background: #fff;
        -webkit-transition: color 0.4s;
        -moz-transition: color 0.4s;
        transition: color 0.4s;
    }
    .icon-effect-2 {
        color: {{ $mysite[0]->text_color }};
        box-shadow: 0 0 0 3px #ee3733;
        -o-box-shadow: 0 0 0 3px #ee3733;
        -moz-box-shadow: 0 0 0 3px #ee3733;
        -webkit-box-shadow: 0 0 0 3px #ee3733;
    }
    .icon-effect-2:after {
        background-color: {{ $mysite[0]->text_color }};
    }
  </style>

  

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
              @if(!empty($contacts[0]->facebook))
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
              @endif
              @if(!empty($contacts[0]->twitter))
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
              @endif
              @if(!empty($contacts[0]->google_plus)) 
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
              @endif
              @if(!empty($contacts[0]->linkedin)) 
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
              @endif
              @if(!empty($contacts[0]->flickr))
                <li>
                  <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
              @endif

              @if(!empty($contacts[0]->instagram))
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
              @endif
              @if(!empty($contacts[0]->skype))
                <li>
                  <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              @endif
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->

      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            @if(isset($header))
            <a class="navbar-brand" href="index.html">
              <img alt="" style="width:50px;height:50px;" src="{{ url('/') }}{{ $header->logo }}">
              <span style="font-size:32px;" class="comp_name">{{ $header->ar_company_name }}</span>
            </a>

            @endif
          </div>
          <div class="navbar-collapse collapse">

            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                  <a  href="{{url('/'.$subdomain.'/ar')}}"><span class="lang-sm lang-lbl" lang="ar"></span> <span class="caret"></span></a>
                  <ul class="dropdown">
                    <li>
                      <a href="{{url('/'.$subdomain.'/en')}}">
                    <span class="lang-sm lang-lbl" lang="en"></span>
                    </a>
                    </li>
                 </ul>
              </li>
                <?php  
                  $flagelang=0;
                  // $count_static=1;
                  // $findpage_top=0;
                  // $findservices=0;
                  // $findabout=0;
                  // $findgallery=0;
                  // $findnews=0;
                  // $findpromotion=0;
                  // $findcontact=0;
                  $lat=0;
                  $lng=0;
                  $myservices='';
                  $mypage_top='';
                  $myabout='';
                  $mycontact='';
                  $mynews='';
                  $mypromotion='';
                  $mygallery='';
                  $menuearray_static=[];
                  $pagearray_static=[];
              ?>

              @for ($x = 0; $x < count($urlpages); $x++)

                  @if($urlpages[$x]=='page_top')
                      <!-- <li class="hidden">
                           <a href="#page-top"></a>
                       </li>-->
                      <li>
                          <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                      </li>
                      <?php 
                      // $findpage_top=1;
                      $mypage_top=$ar_menupages[$x];?>
                  @endif 
                  @if($urlpages[$x]=='services')   
                      <li>
                          <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                      </li>
                      <?php 
                      // $findservices=1;
                      $myservices=$ar_menupages[$x];?>
                  @endif
                  @if($urlpages[$x]=='about')
                      <li>
                          <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                      </li>
                      <?php 
                      // $findabout=1;
                       $myabout=$ar_menupages[$x];?>
                  @endif
                   @if($urlpages[$x]=='gallery')
                        <li>
                            <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                        </li>
                        <?php 
                        // $findgallery=1;
                        $mygallery=$ar_menupages[$x];?>
                    @endif
                    @if($urlpages[$x]=='news')
                        <li>
                            <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                        </li>
                        <?php 
                        // $findnews=1;
                        $mynews=$ar_menupages[$x];?>
                    @endif
                    @if($urlpages[$x]=='promotion')
                        <li>
                            <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                        </li>
                        <?php 
                        // $findpromotion=1;
                        $mypromotion=$ar_menupages[$x];?>
                    @endif
                    @if($urlpages[$x]=='contact')
                        <li>
                            <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                        </li>
                         <?php
                          // $findcontact=1;
                         $mycontact=$ar_menupages[$x];?>
                    @endif
                <!-- for static page -->
                    @if($urlpages[$x]!='contact' and $urlpages[$x]!='promotion' and $urlpages[$x]!='gallery' and $urlpages[$x]!='news' and $urlpages[$x]!='page_top' and $urlpages[$x]!='services' and $urlpages[$x]!='about')
                        <li>
                            <a class="page-scroll" href="#{{str_replace(' ', '', str_replace('&', '', $urlpages[$x]))}}">{{$ar_menupages[$x]}}</a>
                        </li>
                         <?php
                          // $count_static+=1;
                         array_push($pagearray_static, $urlpages[$x]);
                         array_push($menuearray_static, $ar_menupages[$x]);?>
                    @endif 
              @endfor
              @if($url_outside_pages)
                @for ($x = 0; $x < count($url_outside_pages); $x++)
                    <li>
                        <a class="page-scroll" href="{{url($subdomain.'/static_page/ar')}}">{{$ar_outside_menupages[$x]}}</a>
                    </li>
                
                @endfor
            @endif
          </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          
          @for ($x = 0; $x < count($urlpages); $x++)

              @if($urlpages[$x]=='page_top')
                  <!-- <li class="hidden">
                       <a href="#page-top"></a>
                   </li>-->
                  <li>
                      <a class="active" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                  </li>
                  <?php 
                  // $findpage_top=1;
                  $mypage_top=$ar_menupages[$x];?>
              @endif 
              @if($urlpages[$x]=='services')   
                  <li>
                      <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                  </li>
                  <?php 
                  // $findservices=1;
                  $myservices=$ar_menupages[$x];?>
              @endif
              @if($urlpages[$x]=='about')
                  <li>
                      <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                  </li>
                  <?php 
                  // $findabout=1;
                   $myabout=$ar_menupages[$x];?>
              @endif
               @if($urlpages[$x]=='gallery')
                    <li>
                        <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                    </li>
                    <?php 
                    // $findgallery=1;
                    $mygallery=$ar_menupages[$x];?>
                @endif
                @if($urlpages[$x]=='news')
                    <li>
                        <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                    </li>
                    <?php 
                    // $findnews=1;
                    $mynews=$ar_menupages[$x];?>
                @endif
                @if($urlpages[$x]=='promotion')
                    <li>
                        <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                    </li>
                    <?php 
                    // $findpromotion=1;
                    $mypromotion=$ar_menupages[$x];?>
                @endif
                @if($urlpages[$x]=='contact')
                    <li>
                        <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                    </li>
                     <?php
                      // $findcontact=1;
                     $mycontact=$ar_menupages[$x];?>
                @endif
                <!-- for static page -->
                  @if($urlpages[$x]!='contact' and $urlpages[$x]!='promotion' and $urlpages[$x]!='gallery' and $urlpages[$x]!='news' and $urlpages[$x]!='page_top' and $urlpages[$x]!='services' and $urlpages[$x]!='about')
                      <li>
                          <a class="page-scroll" href="#{{str_replace(' ', '', str_replace('&', '', $urlpages[$x]))}}">{{$ar_menupages[$x]}}</a>
                      </li>
                  @endif 
          @endfor
          @if($url_outside_pages)
                @for ($x = 0; $x < count($url_outside_pages); $x++)
                    <li>
                        <a class="page-scroll" href="{{url($subdomain.'/static_page/ar')}}">{{$ar_outside_menupages[$x]}}</a>
                    </li>
                
                @endfor
            @endif
              <li>
                <a  href="{{url('/'.$subdomain.'/ar')}}"><span class="lang-sm lang-lbl" lang="ar"></span> <span class="caret"></span></a>
                <ul class="dropdown">
                  <li>
                    <a href="{{url('/'.$subdomain.'/en')}}">
                  <span class="lang-sm lang-lbl" lang="en"></span>
                  </a>
                  </li>
               </ul>
              </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->


    <!-- Start page_top Page Slider -->
    @if(isset($crusals) && $crusals != null)
    <section id="page_top">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">
        <?php $crusals =  array_slice($crusals, 0, 3) ?>
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
        <?php $count=0; ?>
        @foreach($crusals as $crusal)
        @if($count == 0)
          <div class="item active">
            <img class="img-responsive" src="{{ url('/assets/images/')}}{{ $crusal->image }}" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                              <span><strong> {{ $crusal->ar_title }}</strong>   </span></h2>
                <h3 class="animated3">
                                <span>{{ $crusal->ar_description }}</span>
                              </h3>
        
              </div>
            </div>
          </div>
          @else      
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="{{ url('/assets/images/')}}{{ $crusal->image }}" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated4">
                                <span><strong>{{ $crusal->ar_title }} </strong>  </span>
                            </h2>
                <h3 class="animated5">
                              <span>{{ $crusal->ar_description }}</span>
                            </h3>
              
              </div>
            </div>
          </div>

          @endif
          <?php $count++; ?>
          @endforeach  
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->
        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>

    @endif
    <!-- End page_top Page Slider -->


  <!-- Start Full Width Section 2 -->
  @if(isset($aboutus) && $aboutus != null)
  <div id="about">
      <div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
        <div class="container">

          <div class="row">

           
            <!-- Vimeo Iframe -->
            <div class="col-md-6" data-animation="fadeInDown">
              
                                <div class="img1">
                                    <figure><img class="img-responsive" src="{{ url('/assets/images/')}}{{ $aboutus->image }}" alt="image"></figure> 
                                </div>
                               {{--  <div class="img2">
                                    <figure><img class="img-responsive" src="{{ url('/assets/images/')}}{{ $aboutus->image }}" alt="image"></figure>
                                </div> --}}
            </div>


             <!-- Start Left Side -->
            <div class="col-md-6" data-animation="fadeInUp">

              <!-- Start Big Heading -->
              <div class="big-title" style="text-align: right;">
                <h1><strong>من نحن </strong> </h1>
                <p class="title-desc" style="text-align: right;">بعض الكلمات عن الشركه</p>
              </div>
              <!-- End Big Heading -->

              <!-- Some Text -->
              <p style="text-align: right;">{{ $aboutus->ar_description }}
              </p>

              <!-- Divider -->
              <div class="hr1" style="margin-bottom:14px;"></div>

              <!-- Start Icons Lists -->
              <!-- End Icons Lists -->

              <!-- Divider -->
              <div class="hr1" style="margin-bottom:20px;"></div>

              <!-- Button -->
              <a class="btn-system btn-small" data-toggle="modal" href="#aboutmodal" style="float:right;">.....لمعرفه المزيد </a>
            </div>
            <!-- End Left Side -->


          </div>

        </div>
      </div>
      </div>

      <div class="modal fade" id="aboutmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">عن شركتنا</h4>
                    </div>
                    <div class="modal-body">
                      <p><img class="img-responsive" src="{{ url('/assets/images/')}}{{ $aboutus->image }}" alt="" ></p><br>
                      <p>{{ $aboutus->ar_description }}   </p><br>
                      <p><b><a href="#">قم بزيارتنا</a></b></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
      @endif
      <!-- End Full Width Section 2 -->











    <!-- Start Services Section -->
   @if(isset($services) && $services != null )
        <div class="row" id="services">
          <div class="col-md-10 col-md-offset-1">
            <!-- Start Services Carousel -->
            <div class="our-services">

              <div class="big-title text-center" data-animation="fadeInUp">
                <h1><strong>الخدمات</strong> </h1>
                <p class="title-desc">بعض الكلمات عن خدامتنا</p>
              </div> 

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>تعرف علي الخدمات التي نوفراها لك</span></h4>

              <div class="services-carousel custom-carousel touch-carousel" data-appeared-items="4">

        @foreach($services as $service)

        <div class="service-item item">         
          <!-- Start Service Icon 2 -->
          <div class="service-box service-center">
            <div class="service-boxed">
              <div class="service-icon" style="margin-top:-25px;">
                <i class="glyphicon {{ $service->icon }} icon-medium-effect icon-effect-2"></i>
              </div>
              <div class="service-content">
                <h4>{{ $service->ar_title }}</h4>
                <p>{{ $service->ar_description }}</p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 2 -->
          </div>
          @endforeach

              </div>
            </div>
            <!--End services Carousel-->
          </div>
         
        </div>
      @endif

    <!-- End Content -->
    <!-- End Services Section -->


    <!-- Start Purchase Section -->
    <div id="mypro">
    <div class="section purchase">
      <div class="container">

        <!-- Start Video Section Content -->
        <div class="section-video-content text-center">

          <!-- Start Animations Text -->
          <h1 class="fittext wite-text uppercase tlt">
                      <span class="texts">
                        <span>واااااو</span>
                      </span>
كيك كيوب جاهزه للاستخدام العملي والاحترافي <br/>
      <strong>وكذلك</strong> للمفات الشخصيه المبدعه


                    </h1>
          <!-- End Animations Text -->


          <!-- Start Buttons -->

        </div>
        <!-- End Section Content -->

      </div>
      <!-- .container -->
    </div>
    </div>
    <!-- End Purchase Section -->


    <!-- Start Portfolio Section -->
    @if(isset($cats_and_subcats))
    <div id="gallery">

    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

      <!-- Start Big Heading -->
      <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01" style="margin-bottom: 15px;">
        <h1>اخر <strong>اعمالنا</strong></h1>
      </div>
      <!-- End Big Heading -->
        <p class="title-desc text-center"></p>

      <!-- Start Recent Projects Carousel -->
   
        <div class="container"> <!-- Container -->
            
            <div class="space"></div>

            <div class="categories">
                
                <ul class="cat">
                  
                    <li style="float: right;">
                        <ol class="type">

                            @foreach($cats_and_subcats as $cat_and_subcats)
                            <li>
                                <div class="dropdown">
                                    <button class="btn-system btn-medium border-btn dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <a href="#" data-filter=".{{ $cat_and_subcats->name }}" class="active">{{ $cat_and_subcats->ar_name }}</a>
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    @foreach($cat_and_subcats->subcategories as $sub)
                                        <li><a href="#" data-filter=".{{ $sub->name }}">{{ $sub->ar_name }}</a></li>
                                    @endforeach
                                    </ul>
                                </div>
                            </li>
                            @endforeach


                            <li>
                                <div>
                                    <button class="btn-system btn-medium border-btn dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <a href="#" data-filter="*" class="active">كل التصينفات</a>

                                    </button>

                                </div>
                            </li>

                        </ol>

                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">

                @foreach($cats_and_subcats as $cat_and_subcats)
                    @foreach($cat_and_subcats->subcategories as $subcategory)
                        @foreach($subcategory->products as $product)

                            <div class="col-sm-6 col-md-3 col-lg-3 {{ $subcategory->ar_name }} {{ $cat_and_subcats->ar_name }}">
                                <div class="portfolio-item">
                                    <div class="hover-bg">
                                        <a data-toggle="modal" href="#product{{ $product->id }}">
                                            <div class="hover-text">
                                                <h2>{{ $product->ar_name }}</h2>
                                                <small>{{ $product->ar_price }}</small>
                                                <div class="clearfix"></div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <img src="{{ url('/assets/images') }}/{{$product->image}}" style="width:300px;height:300px;" class="img-responsive" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
        @foreach($cats_and_subcats as $cat_and_subcats)
            @foreach($cat_and_subcats->subcategories as $subcategory)
                @foreach($subcategory->products as $product)
                    <div class="modal fade" id="product{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top:9%; outline: none; position: fixed;">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <img src="{{ url('/assets/images') }}/{{$product->image}}" class="img-responsive" alt="...">
                                        </div>
                                        <hr>
                                        <div class="col-md-12">
                                            <h2 class="big-title text-center"> {{ $product->ar_name }}</h2>
                                            <p class="text-center">
                                                {{ $product->ar_description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
            @endforeach
        @endforeach
    @endforeach
      <!-- End Recent Projects Carousel -->
    </div>
    <!-- End Portfolio Section -->
    @endif


    <!-- Start News Section -->  
    @if(isset($news) && $news != null)
    <div id="news">
     <div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
      <div class="container">
         <div class="big-title text-center" data-animation="fadeInDown" >
                <h1><strong>الاخبار</strong> </h1>
                <p class="title-desc">بعض الكلمات عن احدث الاخبار</p>
              </div>   
      
        <div class="row">
          <div class="col-md-8 col-md-offset-2" data-animation="fadeInUp">

            <!-- Start Recent Posts Carousel -->
            <div class="latest-posts">
              <h4 class="classic-title"><span>اخر الاخبار </span></h4>
              <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">

                <!-- Posts 1 -->
                @foreach($news as $new)
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">{{ $new->ar_title }}</a></h3>
                  <div class="post-content">
                    <p>{{ $new->ar_description }}
                  <button type="button" class="btn btn-default btn-sm read-more" data-toggle="modal" href="#myModal"> ...اقرء المزيد </button></p>
                  </div>
                </div>
                @endforeach

          

                <!-- Posts 6 -->

              </div>
            </div>
            </div>

      @foreach($news as $new)
           <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">{{ $new->ar_title }}</h4>
                    </div>
                    <div class="modal-body">
                      <p><img class="img-responsive" src="{{ url('/assets/images/')}}{{ $new->image }}" alt="" ></p><br>
                      <p> {{ $new->ar_description }}</p><br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->

              @endforeach
    </div>
            </div>
             </div>
             </div>
        @endif
            <!-- End Recent Posts Carousel -->


    <!-- Start Promotions Section -->
    @if(isset($promotions) && $promotions != null)
    <div id="promotion" >
      <div class="container">
        <div class="row">

          <!-- Start Big Heading -->
          <div class="big-title text-center" data-animation="fadeInUp">
            <h1> <strong>اهم العروض</strong></h1>
            
          </div>
          <!-- End Big Heading -->

          <!--Start Promotions Carousel-->
          <div class="our-Promotions">
            <div class="Promotions-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">

              <!-- Promotions 1 -->
                @foreach($promotions as $promotion)
                    <div class="Promotion-item item">
                        <a href="#promotion{{ $promotion->id }}"  data-toggle="modal">
                            <div class="pricing-tables">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>{{ $promotion->ar_title }}</h3>
                                    </div>
                                    <div class="plan-price">
                                        {{-- <div class="price-value">$49<span>.00</span></div>
                                        <div class="interval">per month</div> --}}
                                        <p>{{ $promotion->ar_description }}</p>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li><strong class="primary-text">Start Date</strong> {{ $promotion->start_date }}</li>
                                            <li><strong class="primary-text">End Date</strong> {{ $promotion->end_date }}</li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
          </div>
          <!-- End Promotion Carousel -->
            @foreach($promotions as $promotion)
                <div class="modal fade" id="promotion{{ $promotion->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                     style="top:9%; outline: none; position: fixed;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">{{ $promotion->ar_title }}</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6" >
                                        <img class="img-responsive" src="{{ url('/assets/images/')}}{{ $promotion->image }}" alt="" >
                                    </div>
                                    <div class="col-md-6">
                                        <p> {{ $promotion->ar_description }}</p>
                                        <p ><strong>From:</strong>{{ $promotion->start_date }}</p>
                                        <p ><strong>To:</strong>{{ $promotion->end_date }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            @endforeach
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    @endif
    <!-- End Promotion Section -->


<!-- ==================================================================================== -->
<!-- start staticpage -->
@for($static=0;$static< count($pagearray_static);$static++) 
  <div id="<?php echo str_replace(' ', '', str_replace('&', '', $pagearray_static[$static]));?>">
      <div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
        <div class="container">

          <div class="row">

            <!-- Start Left Side -->
            <div class="col-md-12" data-animation="fadeInUp">

              <!-- Start Big Heading -->
              <div class="big-title">
                <h1><strong class="primary-text"><?php echo $staticpages[$static];?></strong> </h1>
                <!-- <p class="title-desc">Some Words About Our Company</p> -->
              </div>
              <!-- End Big Heading -->
                <?php echo "$containpages[$static]";?>

              <!-- Divider -->
              <div class="hr1" style="margin-bottom:14px;"></div>

              <!-- Start Icons Lists -->
              
              <!-- End Icons Lists -->

              <!-- Divider -->
              <div class="hr1" style="margin-bottom:20px;"></div>

              <!-- Button -->
              <a class="primary btn-system btn-small" data-toggle="modal" href="#<?php echo str_replace(' ', '', str_replace('&', '', $pagearray_static[$static]));?>modal">Read More <?php echo $menuearray_static[$static];?></a>
            </div>
            <!-- End Left Side -->

            <!-- Vimeo Iframe -->
            <!-- <div class="col-md-6" data-animation="fadeInDown">
              
                <div class="img1">
                    <figure><img class="img-responsive" src="" alt="image"></figure> 
                </div>
                <div class="img2">
                    <figure><img class="img-responsive" src="" alt="image"></figure>
                </div>
            </div> -->

          </div>

        </div>
      </div>
      </div>

      <div class="modal fade" id="<?php echo str_replace(' ', '', str_replace('&', '', $pagearray_static[$static]));?>modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title"><?php echo $menuearray_static[$static];?></h4>
                    </div>
                    <div class="modal-body">
                      <p><?php echo "$containpages[$static]";?></p><br>
                      <!-- <p><b><a href="#" class="primary">Visit Site</a></b></p> -->
                    </div>
                    <div class="modals-footer">
                      <button type="button" class="primary btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
      @endfor

<!-- end statiic page -->
<!-- ===================================================================================== -->


    <!-- Start Footer Section -->
     @if(isset($contacts[0]) && $contacts[0] != null) 
    <footer>
      <div class="container" id="contact">
        <div class="row footer-widgets">


          <!-- Start Subscribe & Social Links Widget -->
         
          <div class="col-md-3 col-xs-12">
            <div class="footer-widget mail-subscribe-widget">
              <h4>ابق علي اتصال<span class="head-line"></span></h4>
              <p>!عدد عن قدما يتعلّق ومحاولة, استدعى وبلجيكا، حدى من, وقد إذ اللا الجنود. أسر مسؤولية لبولندا، ٣٠, هو</p>
              <form class="subscribe">
                <input type="text" placeholder="mail@example.com">
                <input type="submit" class="btn-system" value="Send">
              </form>
            </div>
            <div class="footer-widget social-widget">
              <h4>تابعنا<span class="head-line"></span></h4>
              <ul class="social-icons">
              @if(!empty($contacts[0]->facebook))
                <li>
                  <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
              @endif

              @if(!empty($contacts[0]->twitter))
              <li>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
              @endif

              @if(!empty($contacts[0]->google_plus)) 
              <li>
                  <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
              @endif

              @if(!empty($contacts[0]->skype))
              <li>
                  <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              @endif

              @if(!empty($contacts[0]->linkedin)) 
              <li>
                  <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
              @endif

              @if(!empty($contacts[0]->flickr))
              <li>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
              @endif

                              
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->

           <div class="col-md-3 col-xs-12">
           <div class="footer-widget">
           <h4>اين نحن<span class="head-line"></span></h4>
            <div id="map" data-position-latitude="{{ $contacts[0]->lat }}" data-position-longitude="{{ $contacts[0]->lng }}"></div>
           </div>
          </div>
          <!-- Start Twitter Widget -->
         <div class="col-md-3 col-xs-12 ">
          <div class="footer-widget">
         <h4>اتصل بنا <span class="head-line"></span></h4>
         </div>
        <form action="#" method="post" class="tm-contact-form">
          <div class="tm-contact-form-input">
            <div class="form-group">
              <input type="text" id="contact_name" class="form-control" placeholder="الاسم" />
            </div>
            <div class="form-group">
              <input type="email" id="contact_email" class="form-control" placeholder="الايميل" />
            </div>
            <div class="form-group">
              <input type="text" id="contact_subject" class="form-control" placeholder="الموضوع" />
            </div>
            <div class="form-group">
              <textarea id="contact_message" class="form-control" rows="6" placeholder="الرساله"></textarea>
            </div>
            <div class="form-group">
             <!--  <button class="tm-submit-btn" type="submit" name="submit">Submit now</button>  -->
             <input type="submit" class="btn-system" value="Submit now" id="mysubmit">
            </div>               
          </div>
        </form>
      </div>
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-3 col-xs-12">
            <div class="footer-widget contact-widget">
              <h4><img src="{{ url('/') }}{{ $header->logo }}" class="img-responsive" alt="Footer Logo" /></h4>
              <ul>
                <li><span>العنوان:</span>{{$contacts[0]->ar_address}}</li>
                <li><span>رقم الهاتف:</span> {{$contacts[0]->ar_mobile}}</li>
                <li><span>البريد الالكتروني:</span> {{$contacts[0]->email}}</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p> 2016 kickcube -&copy; كل الحقوق محفوظه  </p>
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
              <ul class="footer-nav">
                <li><a href="#">Sitemap</a>
                </li>
                <li><a href="#">Privacy Policy</a>
                </li>
                <li><a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    @endif
    <!-- End Footer Section -->

  </div>
  <!-- End Full Body Container -->

 
  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>


  <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/script.js') }}"></script>

<!-- Scrolling Nav JavaScript -->
    <script src="{{ url('assets/kickcube/ar/js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('assets/kickcube/ar/js/scrolling-nav.js') }}"></script>



<script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.isotope.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/kickcube/ar/js/main.js') }}"></script>

<script>
      (function($) {
        $.fn.CustomMap = function(options) {

          var posLatitude = $('#map').data('position-latitude'),
            posLongitude = $('#map').data('position-longitude');

          var settings = $.extend({
            home: {
              latitude: posLatitude,
              longitude: posLongitude
            },
            text: '<div class="map-popup"><h4>Web Development | ZoOm-Arts</h4><p>A web development blog for all your HTML5 and WordPress needs.</p></div>',
            icon_url: $('#map').data('marker-img'),
            zoom: 15
          }, options);

          var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

          return this.each(function() {
            var element = $(this);

            var options = {
              zoom: settings.zoom,
              center: coords,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              mapTypeControl: false,
              scaleControl: false,
              streetViewControl: false,
              panControl: true,
              disableDefaultUI: true,
              zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT
              },
              overviewMapControl: true,
            };

            var map = new google.maps.Map(element[0], options);

            var icon = {
              url: settings.icon_url,
              origin: new google.maps.Point(0, 0)
            };

            var marker = new google.maps.Marker({
              position: coords,
              map: map,
              icon: icon,
              draggable: false
            });

            var info = new google.maps.InfoWindow({
              content: settings.text
            });

            google.maps.event.addListener(marker, 'click', function() {
              info.open(map, marker);
            });

            var styles = [{
              "featureType": "landscape",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 65
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "poi",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 51
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.highway",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.arterial",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 30
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "road.local",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 40
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "transit",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "administrative.province",
              "stylers": [{
                "visibility": "on"
              }]
            }, {
              "featureType": "water",
              "elementType": "labels",
              "stylers": [{
                "visibility": "on"
              }, {
                "lightness": -25
              }, {
                "saturation": -100
              }]
            }, {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [{
                "hue": "#ffff00"
              }, {
                "lightness": -25
              }, {
                "saturation": -97
              }]
            }];

            map.setOptions({
              styles: styles
            });
          });

        };
      }(jQuery));

      jQuery(document).ready(function() {
        jQuery('#map').CustomMap();
      });
    </script>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>

</body>

</html>