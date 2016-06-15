<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">

    <!-- for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="format-detection" content="telephone=no"/>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-ico"/>

    <title>ALTOS Agency &#8211; Creative HTML Theme</title>

       <link rel="stylesheet" href="{{ url('/assets/bootstrap-3.2.0/css/bootstrap.min.css')}}"/>
<!-- Bootstrap-Iconpicker -->
    <link rel="stylesheet" href="{{ url('/assets/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')}}"/>

    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/revslider/public/assets/css/settings.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/animsition.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/fontello.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/font-awesome.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/owl.carousel.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/owl.transitions.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/pe-icon-7-stroke.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/prettyPhoto.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/style.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/media.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/js_composer.min.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/isotope.min.css")}}' type='text/css' media='all'/>

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CRaleway%3A400%2C700&amp;ver=1.0.0' type='text/css' media='all'/>
    <link href="http://fonts.googleapis.com/css?family=Raleway%3A300%2C900%2C100%2C600%2C400%2C500%2C800" rel="stylesheet" property="stylesheet" type="text/css" media="all"/>
    <link href="http://fonts.googleapis.com/css?family=Raleway%3A800%2C300%2C500" rel="stylesheet" property="stylesheet" type="text/css" media="all"/>


</head>

<body class="home page page-id-4 page-parent page-template page-template-template-one-pager page-template-template-one-pager-php wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
    <div class="overlay overlay-slidedown">
        <div class="overlay-close pe-7s-close"></div>
        <div class="popup-search-wrapper">
            <form method="get" id="searchform" class="search-form" action="index.html">
                <div>
                    <input type="text" id="s" name="s" value="Type text and hit enter" onfocus="if(this.value=='Type text and hit enter')this.value='';" onblur="if(this.value=='')this.value='Type text and hit enter';" autocomplete="off">
                </div>
            </form>
        </div>
    </div>
    <div class="animsition global-wrapper">

        <div id="header" class="header-wrapper">
            <div class="header-inside">
                <div class="logo">
                    <a href="index.html" title="ALTOS Agency"><img class="logoImage" src="{{ url('assets/DynamicWebGenerator/images/logo.png')}}" alt="ALTOS Agency"/><img class="logoImageRetina" src="{{ url('assets/DynamicWebGenerator/images/logo-retina.png')}}" alt="ALTOS Agency"/></a>
                    <div class="clear"></div>
                </div>
                <div class="menu-wrapper">
                    <div class="menu-icons">
                        <div class="menu-icons-inside">
                            <div class="menu-icon menu-icon-standard"><span class="menu-icon-create"></span></div>
                            <div class="menu-icon menu-icon-mobile"><span class="menu-icon-create"></span></div>
                        </div>
                        <div id="trigger-overlay" class="header-search pe-7s-search"></div>
                    </div>
                    <div class="main-menu">
                        <div class="menu-main-nav-menu-container">
                            <ul id="menu-main-nav-menu" class="sf-menu">
                                <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="{{ url('/') }}">Home</a>
                                    <ul class="submenu_1">
                                        <li class="menu-item"><a href="{{ url('/') }}">Home #2</a></li>
                                    </ul>
                                </li>
                                
                                @if (Auth::guest())
                                    <li class="menu-item one-page-subsite"><a href="{{ url('/login') }}">Login</a></li>

                                    <li class="menu-item one-page-subsite"><a href="{{ url('/register') }}">Register</a></li>

                                @else
                                    <li class="menu-item one-page-subsite"><a href="{{ url('/logout') }}">Logout</a></li>

                                    @if (isset($site))
                                        <li class="menu-item one-page-subsite"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                    @else
                                        <li class="menu-item one-page-subsite"><a href="{{  url('/site/create') }}">Create WebSite</a></li>
                                    @endif
                                @endif

                               

                            @if (Request::path() == '/')

                                <li class="menu-item"><a href="index.html#about">About us</a></li>
                                <li class="menu-item"><a href="index.html#services">Services</a></li>
                                <li class="menu-item"><a href="index.html#portfolio-items">Portfolio</a></li>


                                <li class="menu-item"><a href="index.html#our-contact">Contact</a></li>
                            @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="mobile-menu-wrapper">
            <div class="menu-main-nav-menu-container">
                <ul id="menu-main-nav-menu-1" class="mobile-menu">
                    <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="index.html#home">Home</a>
                        <ul class="submenu_1">
                            <li class="menu-item"><a href="http://psd2html5.in/demo/wpm/altos/home-2/#home-2">Home #2</a></li>
                        </ul>
                    </li>
                    <li class="menu-item one-page-subsite"><a href="index.html#about">About us</a></li>
                    <li class="menu-item one-page-subsite"><a href="index.html#services">Services</a></li>
                    <li class="menu-item one-page-subsite"><a href="index.html#portfolio-items">Portfolio</a></li>
                    <li class="menu-item one-page-subsite"><a href="index.html#blog">Blog</a></li>
                    <li class="menu-item one-page-subsite"><a href="index.html#our-contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="header-wrapper header2">
            <div class="header-inside">
                <div class="logo">
                    <a href="index.html" title="ALTOS Agency"><img class="logoImage" src="{{ url('assets/DynamicWebGenerator/images/logo.png')}}" alt="ALTOS Agency"/><img class="logoImageRetina" src="{{ url('assets/DynamicWebGenerator/images/logo-retina.png')}}" alt="ALTOS Agency"/></a>
                    <div class="clear"></div>
                </div>
                <div class="menu-wrapper">
                    <div class="menu-icons">
                        <div class="menu-icons-inside">
                            <div class="menu-icon menu-icon-standard"><span class="menu-icon-create"></span></div>
                        </div>
                        <div id="trigger-overlay-sticky" class="header-search pe-7s-search"></div>
                    </div>
                    <div class="main-menu">
                        <div class="menu-main-nav-menu-container">
                            <ul id="menu-main-nav-menu-2" class="sf-menu">
                                <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="index.html#home">Home</a>
                                    <ul class="submenu_1">
                                        <li class="menu-item"><a href="home-2.html#home-2">Home #2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="index.html#about">About us</a></li>
                                <li class="menu-item"><a href="index.html#services">Services</a></li>
                                <li class="menu-item"><a href="index.html#portfolio-items">Portfolio</a></li>
                                <li class="menu-item"><a href="index.html#blog">Blog</a></li>
                                <li class="menu-item"><a href="index.html#our-contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="container-wrapper">
            <div id="container">
                <!-- start container -->
                <div class="page-wrapper">
                    <section id="home" class="onepager_section_class first-onepage-section first-page-item">
                        <div class="inside-section">
                            <div class="inner-container">
                                <!-- start inner container -->
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_revslider_element wpb_content_element">
                                                    
                                                    <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:transparent;padding:0px;">
                                                        <!-- START REVOLUTION SLIDER 5.2.5 fullscreen mode -->
                                                        <div id="rev_slider_3_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.2.5">
                                                            <ul>
                                                                <!-- SLIDE  -->
                                                                <li data-index="rs-9" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="upload/slider-city-100x50.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="{{ url('assets/DynamicWebGenerator/upload/slider-nature.jpg')}}" alt="" title="slider-city" width="1280" height="853" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 1 -->
                                                                    <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-9-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;font-family:'Montserrat', sans-serif;text-align:center;text-transform:left;padding:30px 110px;font-weight:700;font-size:60px;color:#fff;background:#d03c4a;">CREATIVE
                                                                        <br/> AGENCY </div>

                                                                    <!-- LAYER NR. 2 -->
                                                                    <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" id="slide-9-layer-4" data-x="center" data-hoffset="" data-y="center" data-voffset="-101" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap; font-weight: 300;font-family:'Raleway', sans-serif;text-transform:left;padding:10px 20px;color:#fff;font-size:32px;font-weight:300;background:#000;letter-spacing:0;">we are </div>

                                                                    <!-- LAYER NR. 3 -->
                                                                    <div class="tp-caption NotGeneric-Button rev-btn " id="slide-9-layer-7" data-x="center" data-hoffset="" data-y="center" data-voffset="136" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]' data-responsive_offset="on" data-responsive="off" style="z-index: 7; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">CHECK WHO WE ARE </div>

                                                                    <!-- LAYER NR. 4 -->
                                                                    <div class="tp-caption rev-scroll-btn " id="slide-9-layer-9" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['35']" data-height="['55']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 8; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;text-transform:left;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                                        <span>                          </span>
                                                                    </div>
                                                                </li>
                                                                <!-- SLIDE  -->
                                                                <li data-index="rs-28" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="upload/slider-nature-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="{{ url('assets/DynamicWebGenerator/upload/slider-city.jpg')}}" alt="" title="slider-nature" width="1600" height="900" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 1 -->
                                                                    <div class="tp-caption NotGeneric-Title linefix  tp-resizeme" id="slide-28-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;font-family:'Montserrat', sans-serif;text-align:center;text-transform:left;padding:40px 30px 40px 30px;font-weight:700;font-size:150px;color:#fff;text-shadow:0px 0px 20px rgba(0, 0, 0, 0.6);line-height:0.7;">WE LOVE
                                                                        <br/> WHAT WE DO </div>

                                                                    <!-- LAYER NR. 2 -->
                                                                    <div class="tp-caption NotGeneric-Button rev-btn " id="slide-28-layer-7" data-x="center" data-hoffset="" data-y="center" data-voffset="173" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#our-contact"}]' data-responsive_offset="on" data-responsive="off" style="z-index: 6; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">GET IN TOUCH </div>

                                                                    <!-- LAYER NR. 3 -->
                                                                    <div class="tp-caption rev-scroll-btn " id="slide-28-layer-9" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['35']" data-height="['55']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;text-transform:left;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                                        <span>                          </span>
                                                                    </div>
                                                                </li>
                                                                <!-- SLIDE  -->
                                                                <li data-index="rs-10" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-thumb="upload/bg-slider4-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="{{ url('assets/DynamicWebGenerator/upload/bg-slider4.jpg')}}" alt="" title="bg-slider4" width="2560" height="1440" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 1 -->
                                                                    <div class="tp-caption rev-scroll-btn " id="slide-10-layer-9" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['35']" data-height="['55']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 5; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;text-transform:left;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                                        <span>                          </span>
                                                                    </div>

                                                                    <!-- LAYER NR. 2 -->
                                                                    <div class="tp-caption  shadow tp-resizeme" id="slide-10-layer-15" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power2.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="2000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" data-end="8300" style="z-index: 6; white-space: nowrap; font-size: 42px; line-height: 48px; font-weight: 300; color: rgba(255, 255, 255, 1.00);text-transform:left;padding:10px 40px;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;cursor:pointer;">best. awesome. innovative. </div>

                                                                    <!-- LAYER NR. 3 -->
                                                                    <div class="tp-caption   tp-resizeme" id="slide-10-layer-14" data-x="160" data-y="250" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-end="8300" style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'Montserrat', sans-serif;text-transform:left;padding:20px 30px;color:#fff;font-size:28px;background:#d03c4a;font-weight:700;">
                                                                        <div class="rs-looped rs-wave" data-speed="2" data-angle="0" data-radius="10" data-origin="50% 50%">WEBDESIGN </div>
                                                                    </div>

                                                                    <!-- LAYER NR. 4 -->
                                                                    <div class="tp-caption   tp-resizeme" id="slide-10-layer-16" data-x="677" data-y="213" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-end="8300" style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'Montserrat', sans-serif;text-transform:left;padding:15px 25px;color:#fff;font-size:20px;background:#d03c4a;font-weight:700;">
                                                                        <div class="rs-looped rs-wave" data-speed="2" data-angle="0" data-radius="10" data-origin="50% 50%">PRINT </div>
                                                                    </div>

                                                                    <!-- LAYER NR. 5 -->
                                                                    <div class="tp-caption   tp-resizeme" id="slide-10-layer-17" data-x="923" data-y="549" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-end="8300" style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'Montserrat', sans-serif;text-transform:left;padding:25px 35px;color:#fff;font-size:36px;background:#d03c4a;font-weight:700;">
                                                                        <div class="rs-looped rs-wave" data-speed="2" data-angle="0" data-radius="10" data-origin="50% 50%">HTML5 </div>
                                                                    </div>

                                                                    <!-- LAYER NR. 6 -->
                                                                    <div class="tp-caption   tp-resizeme" id="slide-10-layer-18" data-x="591" data-y="640" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-end="8300" style="z-index: 10; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'Montserrat', sans-serif;text-transform:left;padding:30px 40px;color:#fff;font-size:48px;background:#d03c4a;font-weight:700;">
                                                                        <div class="rs-looped rs-wave" data-speed="2" data-angle="0" data-radius="10" data-origin="50% 50%">CSS3 </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
    
                                                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                                        </div>

                                                    </div>
                                                    <!-- END REVOLUTION SLIDER -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end inner container -->
                        </div>
                    </section>


                    <section id="about" class="other-page-item onepager_section_class" style="  background-color: #ffffff;  ">
                        <div id="post-19" class="post-19 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container small-container">
                                    <!-- start inner container -->
                                    <div class="page-title-wrapper vertical-page-title">
                                        <div class="page-title wpb_animate_when_almost_visible wpb_appear">
                                            <h1>About us</h1>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="inner-with-vertical-title">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
                                                            <div class="wpb_wrapper">
                                                                <div style="margin-bottom: 30px; font-size: 30px; font-family: 'Montserrat', sans-serif; font-weight: bold;"><span style="color: #000000;">Altos is Creative WordPress Theme Agency based in Melbourne.</span></div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis erat sed elit sceleris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis erat sed elit scelerisque iaculis.</p>
                                                                <p>Nullam nec porttitor justo, at iaculis risus. Aliquam erat volutpat. que iaculis. Nullam nec porttitor justo, at iaculis ris us. Aliquam eratvolutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis erat sed elit sceleris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis erat sed elit scelerisque iaculis. Nullam nec porttitor justo, at iaculis risus. Aliquam erat volutpat. que iaculis. Nullam nec porttitor justo, at iaculis ris us. Aliquam eratvolutpat.</p>

                                                            </div>
                                                        </div>
                                                        <div class="wpb_content_element vc_altos_button wpb_animate_when_almost_visible wpb_appear"><a class="altos-button" target="_self" href="index.html#services" title="&lt;strong&gt;our&lt;/strong&gt; services"><strong>our</strong> services</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_empty_space" style="height: 200px"><span class="vc_empty_space_inner"></span></div>

                                                        <div class="wpb_content_element vc_altos_counter animate-hover-border counter-specific-wrapper-5670 wpb_animate_when_almost_visible wpb_appear">
                                                            <div class="counter-description"><b class="counter_execute" id="counter_5670" data-from="0" data-to="16" data-speed="1500"></b>
                                                                <div class="after-counter-text">Experts that will create an amazing job</div>
                                                            </div><span class="borderBefore"></span><span class="borderAfter"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="services" class="other-page-item onepager_section_class" style="  background-color: #f7f7f7;  ">
                        <div id="post-22" class="post-22 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container small-container">
                                    <!-- start inner container -->
                                    <div class="normal-inner">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_left-to-right">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="97" height="448" src="{{ url('assets/DynamicWebGenerator/upload/services-icons.png')}}" class="vc_single_image-img attachment-full" alt="services-icons"/></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-9">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_titles title_align_left wpb_animate_when_almost_visible wpb_right-to-left">
                                                            <h1 class="title-sh title-special has-subtitle">Services</h1>
                                                            <div class="clear"></div>
                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">Strategy, design and technology. Or what we like to call it, a party.</div>
                                                        </div>
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left">
                                                            <div class="wpb_wrapper">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="{{ url('assets/DynamicWebGenerator/upload/main-bg-image.jpg')}}" class="vc_row wpb_row vc_row-fluid shrink-bottom vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top altos-align-center">
                                                            <div class="wpb_wrapper">
                                                                <p><span style="font-size: 36pt; font-family: Raleway, serif;"><strong><span style="color: #d03c4a;">Making right decisions,</span></strong>
                                                                    </span>
                                                                    <br/>
                                                                    <span style="font-size: 36pt; font-family: Raleway, serif;"><span style="color: #ffffff;"> in the right moments.</span></span>
                                                                </p>

                                                            </div>
                                                        </div>
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="wpb_content_element vc_altos_counter2 counter-specific-wrapper-832 wpb_animate_when_almost_visible wpb_appear">
                                                                            <div class="counter-description"><b class="counter_execute" id="counter_832" data-from="0" data-to="602" data-speed="1500"></b>
                                                                                <div class="clear"></div>
                                                                                <div class="counter-title">projects completed</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="wpb_content_element vc_altos_counter2 counter-specific-wrapper-9977 wpb_animate_when_almost_visible wpb_appear">
                                                                            <div class="counter-description"><b class="counter_execute" id="counter_9977" data-from="0" data-to="213" data-speed="1500"></b>
                                                                                <div class="clear"></div>
                                                                                <div class="counter-title">happy clients</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="wpb_content_element vc_altos_counter2 counter-specific-wrapper-6785 wpb_animate_when_almost_visible wpb_appear">
                                                                            <div class="counter-description"><b class="counter_execute" id="counter_6785" data-from="0" data-to="4731" data-speed="1500"></b>
                                                                                <div class="clear"></div>
                                                                                <div class="counter-title">working hours</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="wpb_content_element vc_altos_counter2 counter-specific-wrapper-7258 wpb_animate_when_almost_visible wpb_appear">
                                                                            <div class="counter-description"><b class="counter_execute" id="counter_7258" data-from="0" data-to="465" data-speed="1500"></b>
                                                                                <div class="clear"></div>
                                                                                <div class="counter-title">coffee</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="portfolio-items" class="other-page-item onepager_section_class" style="  background-color: #f7f7f7;  ">
                        <div id="post-27" class="post-27 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container">
                                    <!-- start inner container -->
                                    <div class="normal-inner">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_titles title_align_center">
                                                            <h1 class="title-sh title-special has-subtitle">Portfolio</h1>
                                                            <div class="clear"></div>
                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">We are proud of our work</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid portfolio-row vc_row-no-padding">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_portfolio_slider wpb_content_element">
                                                            <div id="slideshow2992" class="slideshow">
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Burgy Fast Food HTML Theme</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="{{ url('assets/DynamicWebGenerator/upload/burgy-main-850x450.jpg')}}" alt="Burgy Fast Food HTML Theme"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="{{ url('assets/DynamicWebGenerator/upload/burgy-main.jpg')}}" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Burgy </span><span>Fast </span><span>Food </span><span>HTML </span><span>Theme </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h1 class="title-sh title-special has-subtitle">HTML Theme</h1>
                                                                                                            <div class="clear"></div>
                                                                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">Burgy Fast Food</div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">In hac habitasse platea dictumst. Donec suscipit, nisi at laoreet laoreet, risus lorem rhoncus enim, ut tincidunt ipsum sem at massa. Nulla vel metus dolor. Donec et dolor aliquet, sodales risus quis, efficitur justo. Donec nec pretium ante. Nulla ut finibus eros, non vestibulum nisi. Donec elementum ultricies risus. Aliquam erat volutpat. Nullam sollicitudin justo diam, eget sagittis dui lacinia sit amet. Vivamus semper enim sed nisl ornare rutrum. Aenean tellus elit, vehicula in ultrices at, cursus malesuada lacus.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Website</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="index.html#" title="Burgy wordpress theme" target="_blank">View online</a></div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">12 February, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Platform</div>
                                                                                                                    <div class="portfolio_detail_single_value">WordPress</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="600" src="upload/burgy2.jpg" class="vc_single_image-img attachment-full" alt="burgy2"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                        <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="786" src="upload/burgy3.jpg" class="vc_single_image-img attachment-full" alt="burgy3"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Xavier Agency HTML Theme on Themeforest</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="{{ url('assets/DynamicWebGenerator/upload/xavier-main-850x450.jpg')}}" alt="Xavier Agency HTML Theme on Themeforest"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="{{ url('assets/DynamicWebGenerator/upload/xavier-main.jpg')}}" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Xavier </span><span>Agency </span><span>HTML </span><span>Theme </span><span>on </span><span>Themeforest </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h1 class="title-sh title-special has-subtitle">HTML Theme</h1>
                                                                                                            <div class="clear"></div>
                                                                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">Agency Xavier</div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">In hac habitasse platea dictumst. Donec suscipit, nisi at laoreet laoreet, risus lorem rhoncus enim, ut tincidunt ipsum sem at massa. Nulla vel metus dolor. Donec et dolor aliquet, sodales risus quis, efficitur justo. Donec nec pretium ante. Nulla ut finibus eros, non vestibulum nisi. Donec elementum ultricies risus. Aliquam erat volutpat. Nullam sollicitudin justo diam, eget sagittis dui lacinia sit amet. Vivamus semper enim sed nisl ornare rutrum. Aenean tellus elit, vehicula in ultrices at, cursus malesuada lacus.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Website</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="index.html#" title="Xavier wordpress theme" target="_blank">View online</a></div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">23 February, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Platform</div>
                                                                                                                    <div class="portfolio_detail_single_value">HTML</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="786" src="upload/xavier-ipad.jpg" class="vc_single_image-img attachment-full" alt="xavier-ipad"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                        <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="540" src="upload/xavier-iphone.jpg" class="vc_single_image-img attachment-full" alt="xavier-iphone"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Branding Identity, Business Cards &#038; Glasses</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="{{ url('assets/DynamicWebGenerator/upload/cards2-850x450.jpg')}}" alt="Branding Identity, Business Cards &#038; Glasses"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="{{ url('assets/DynamicWebGenerator/upload/cards2.jpg')}}" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Branding </span><span>Identity, </span><span>Business </span><span>Cards </span><span>&#038; </span><span>Glasses </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h3 class="title-sh title-normal">We made Branding Identity</h3>
                                                                                                            <div class="clear"></div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu sodales mi, vel iaculis dolor. Ut tincidunt lectus pellentesque tellus accumsan elementum. Integer eget congue massa. Nulla venenatis, arcu quis hendrerit lobortis, eros augue varius nisl, nec laoreet augue mauris eu magna.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_gallery wpb_content_element vc_clearfix">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <div class="wpb_gallery_slides wpb_image_grid" data-interval="3">
                                                                                                                    <ul class="wpb_image_grid_ul">
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards6.jpg" data-rel="prettyPhoto[rel-27-435332091]"><img class="" src="upload/cards6-389x500.jpg" width="389" height="500" alt="cards6" title="cards6"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards7.jpg" data-rel="prettyPhoto[rel-27-435332091]"><img class="" src="upload/cards7-389x500.jpg" width="389" height="500" alt="cards7" title="cards7"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards8.jpg" data-rel="prettyPhoto[rel-27-435332091]"><img class="" src="upload/cards8-389x500.jpg" width="389" height="500" alt="cards8" title="cards8"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards9.jpg" data-rel="prettyPhoto[rel-27-435332091]"><img class="" src="upload/cards9-389x500.jpg" width="389" height="500" alt="cards9" title="cards9"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards10.jpg" data-rel="prettyPhoto[rel-27-435332091]"><img class="" src="upload/cards10-389x500.jpg" width="389" height="500" alt="cards10" title="cards10"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards11.jpg" data-rel="prettyPhoto[rel-27-435332091]"><img class="" src="upload/cards11-389x500.jpg" width="389" height="500" alt="cards11" title="cards11"/></a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Bags and T-shirt design</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="{{ url('assets/DynamicWebGenerator/upload/brand1-850x450.jpg')}}" alt="Bags and T-shirt design"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type1">
                                                                                    <div class="single-portfolio-title">
                                                                                        <div class="single-portfolio-title-page">Portfolio</div>
                                                                                        <div class="single-portfolio-title-item slide__title--main">Bags and T-shirt design</div>
                                                                                        <div class="single-portfolio-title-subtitle">We made bag and T-shirt design</div>
                                                                                    </div>
                                                                                    <div class="single-portfolio-image"><img class="single-portfolio-thumbnail" src="{{ url('assets/DynamicWebGenerator/upload/brand1.jpg')}}" alt="Bags and T-shirt design"/></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid small-container">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <h2 style="text-align: center;">DESCRIPTION</h2>
                                                                                                                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>

                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-27-282458763]" href="upload/brand1c.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img class="vc_single_image-img " src="upload/brand1c.jpg" width="900" height="500" alt="Brand" title="Brand"/></a>
                                                                                                            </figure>
                                                                                                        </div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-27-808044700]" href="upload/brand1b.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img class="vc_single_image-img " src="upload/brand1b.jpg" width="900" height="500" alt="Brand" title="Brand"/></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Role</div>
                                                                                                                    <div class="portfolio_detail_single_value">Graphic Design
                                                                                                                        <br/>PSD Mockup</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">February 12, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Live URL</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="index.html#" target="_blank">Xavier Live</a></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Creating Envelope Brand Presentation</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="{{ url('assets/DynamicWebGenerator/upload/envelope10-850x450.jpg')}}" alt="Creating Envelope Brand Presentation"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="{{ url('assets/DynamicWebGenerator/upload/envelope10.jpg')}}" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Creating </span><span>Envelope </span><span>Brand </span><span>Presentation </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="vc_titles title_align_left">
                                                                                                                            <h3 class="title-sh title-normal">The mission</h3>
                                                                                                                            <div class="clear"></div>
                                                                                                                        </div>
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit tellus vitae sollicitudin placerat. Aliquam eget lectus est. Suspendisse sodales pellentesque ante, maximus vehicula lacus fringilla laoreet. Phasellus vitae turpis mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse ultricies sollicitudin egestas. Quisque d sapien nisi, in rutrum odio pretium quis.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-27-507442229]" href="upload/envelope7-1024x438.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img width="1170" height="501" src="upload/envelope7.jpg" class="vc_single_image-img attachment-full" alt="envelope7"/></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="vc_titles title_align_left">
                                                                                                                            <h3 class="title-sh title-normal">Visual design &amp; development</h3>
                                                                                                                            <div class="clear"></div>
                                                                                                                        </div>
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit tellus vitae sollicitudin placerat. Aliquam eget lectus est. Suspendisse sodales pellentesque ante, maximus vehicula lacus fringilla laoreet. Phasellus vitae turpis mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse ultricies sollicitudin egestas. Quisque d sapien nisi, in rutrum odio pretium quis.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-27-370962760]" href="upload/envelope8-1024x438.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img width="1170" height="501" src="upload/envelope8.jpg" class="vc_single_image-img attachment-full" alt="envelope8"/></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button class="action action--close" aria-label="Close"><i class="portfolio-single-close pe-7s-close"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="testimonials" class="other-page-item onepager_section_class">
                        <div id="post-293" class="post-293 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container">
                                    <!-- start inner container -->
                                    <div class="normal-inner">
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_titles title_align_center wpb_animate_when_almost_visible wpb_top-to-bottom">
                                                            <h1 class="title-sh title-special has-subtitle">Testimonials</h1>
                                                            <div class="clear"></div>
                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">We love our clients</div>
                                                        </div>
                                                        <div class="vc_testimonials wpb_content_element wpb_animate_when_almost_visible wpb_appear">
                                                            <div class="owl-carousel owl-theme testimonials-wrapper">
                                                                <div class="item">
                                                                    <div class="testimonials-content-area">
                                                                        <div class="testimonial-content">"Altos Agency will make your life easier. They are fantastic."</div>
                                                                        <div class="testimonial-author">Manager WP</div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="testimonials-content-area">
                                                                        <div class="testimonial-content">"If you want perfect services, then please hire this team."</div>
                                                                        <div class="testimonial-author">SEO at Facebook</div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="testimonials-content-area">
                                                                        <div class="testimonial-content">"They are amazing. And so friendly. Looking forward to see next project."</div>
                                                                        <div class="testimonial-author">Alice, Blog Writter</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid grey-clients">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_content_element vc_altos_clients wpb_animate_when_almost_visible wpb_appear">
                                                            <div class="clients_wrapper">
                                                                <div class="clients_row">
                                                                    <div class="clients_single">
                                                                        <a class="client_single_url" href="index.html#" title="Burgy"><img class="client_single_image" src="{{ url('assets/DynamicWebGenerator/upload/burgy2.png')}}" alt="Burgy"></a>
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <a class="client_single_url" href="index.html#" title="Shabd"><img class="client_single_image" src="{{ url('assets/DynamicWebGenerator/upload/shabd.png')}}" alt="Shabd"></a>
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <a class="client_single_url" href="index.html#" title="Steweys"><img class="client_single_image" src="{{ url('assets/DynamicWebGenerator/upload/steweys.png')}}" alt="Steweys"></a>
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <a class="client_single_url" href="index.html#" title="Inkstory"><img class="client_single_image" src="{{ url('assets/DynamicWebGenerator/upload/inkstory.png')}}" alt="Inkstory"></a>
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <a class="client_single_url" href="index.html#" title="Anabella"><img class="client_single_image" src="{{ url('assets/DynamicWebGenerator/upload/anabella.png')}}" alt="Anabella"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="clients_row">
                                                                    <div class="clients_single">
                                                                        <a class="client_single_url" href="index.html#" title="Crofts"><img class="client_single_image" src="{{ url('assets/DynamicWebGenerator/upload/crofts.png')}}" alt="Crofts"></a>
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <a class="client_single_url" href="index.html#" title="Anabella"><img class="client_single_image" src="{{ url('assets/DynamicWebGenerator/upload/anabella.png')}}" alt="Anabella"></a>
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <a class="client_single_url" href="index.html#" title="Inkstory"><img class="client_single_image" src="{{ url('assets/DynamicWebGenerator/upload/inkstory.png')}}" alt="Inkstory"></a>
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <a class="client_single_url" href="index.html#" title="Crofts"><img class="client_single_image" src="{{ url('assets/DynamicWebGenerator/upload/crofts.png')}}" alt="Crofts"></a>
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <a class="client_single_url" href="index.html#" title="Steweys"><img class="client_single_image" src="{{ url('assets/DynamicWebGenerator/upload/steweys.png')}}" alt="Steweys"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="our-contact" class="other-page-item onepager_section_class">
                        <div id="post-59" class="post-59 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container small-container">
                                    <!-- start inner container -->
                                    <div class="page-title-wrapper vertical-page-title">
                                        <div class="page-title">
                                            <h1>Our contact</h1>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="inner-with-vertical-title">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
                                                                            <div class="wpb_wrapper">
                                                                                <p><strong><span style="font-size: 24pt; color: #000000; font-family: Montserrat, sans-serif;">If you are looking for a perfect team for your projects, we’d love to talk to you!</span></strong></p>

                                                                            </div>
                                                                        </div>

                                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
                                                                            <div class="wpb_wrapper">
                                                                                <p><span style="font-family: Raleway, serif; font-size: 24pt; color: #888888;">1.800.123 456789</span></p>

                                                                            </div>
                                                                        </div>

                                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
                                                                            <div class="wpb_wrapper">
                                                                                <p><a style="color: #000000; font-size: 12pt; font-family: Montserrat, sans-serif; font-weight: bold;" href="index.html#">info@altos.com</a>          <a style="color: #000000; font-size: 12pt; font-family: Montserrat, sans-serif; font-weight: bold;" href="index.html#">jobs@altos.com</a></p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_content_element vc_altos_google_maps wpb_animate_when_almost_visible wpb_appear">


                                                            <div id="map_canvas" class="mapStyleClass"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_titles title_align_left wpb_animate_when_almost_visible wpb_appear">
                                                            <h4 class="title-sh title-normal">address</h4>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear vc_custom_1456140408355">
                                                            <div class="wpb_wrapper">
                                                                <p><strong><span style="color: #000000;">Altos Agency</span></strong>
                                                                    <br/> 45 Street Los Angeles,
                                                                    <br/> Road to Heaven,
                                                                    <br/> California
                                                                </p>
                                                                <p><span style="color: #000000;"><a href="index.html#">facebook</a> / <a href="index.html#">twitter</a></span></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_titles title_align_left wpb_animate_when_almost_visible wpb_appear">
                                                            <h4 class="title-sh title-normal">Contact Form</h4>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div role="form" class="wpcf7" id="wpcf7-f503-o1" lang="en-US" dir="ltr">
                                                            <div class="screen-reader-response"></div>
                                                            <form id="contact-form" action="index.html#">
                                                                <div class="pego-contact-form">
                                                                    <p><span class="wpcf7-form-control-wrap your-name">
                                                                        <input name="name" id="name" type="text" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name"/></span></p>
                                                                    <p><span class="wpcf7-form-control-wrap your-email">
                                                                        <input name="mail" id="mail" type="text" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email"/></span></p>
                                                                    <p><span class="wpcf7-form-control-wrap your-subject">
                                                                        <input name="subject" id="subject" type="text" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject"/></span> </p>
                                                                    <p><span class="wpcf7-form-control-wrap your-message">
                                                                        <textarea name="comment" id="comment" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span> </p>
                                                                    <p>
                                                                        <input type="submit" id="submit_contact" value="Send message" class="wpcf7-form-control wpcf7-submit"/>
                                                                        <div id="msg" class="message"></div>
                                                                    <p></p>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <!-- end container -->
            <div class="clear"></div>
        </div>
        <!-- end container-wrapper -->
        <div id="footer" class="footer">
            <div class="footer-inner">
                <div class="footer-left">
                    <img id="logoFooterImage" class="footer-logo" src="{{ url('assets/DynamicWebGenerator/images/logo-footer.png')}}" alt="ALTOS Agency"/>
                    <img class="footer-logo" id="logoFooterImageRetina" src="images/logo-footer-retina.png" alt="ALTOS Agency"/>
                </div>
                <div class="footer-right">
                    45 street Los Angeles, California / Phone: <span>1.800.123 456789</span> </div>
                <div class="scroll_to_top pe-7s-up-arrow"></div>
            </div>
            <div class="clear"></div>
            <div class="footer-under-center">
                <div class="footer-inner">
                    Copyright 2016 - Altos. Powered by <a href="index.html#" title="HTML5 Themes">HTML5</a>. Made by <a href="http://themeforest.net/user/max-themes/portfolio" title="Pego Premium HTML5 Themes">max-themes</a>. </div>
            </div>

        </div>

    </div>

    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery/jquery.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery/jquery-migrate.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript">

        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/contact-form.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.ticker.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/modernizr.custom.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.localscroll.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/toScroll.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.animsition.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/superfish.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/waypoints/waypoints.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.mobilemenu.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/custom.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/snap.svg-min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/classie.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/js_composer_front.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.countTo.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/bower/skrollr/dist/skrollr.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/dynamics.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/main.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/bower/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/bower/isotope/dist/isotope.pkgd.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/prettyphoto/js/jquery.prettyPhoto.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/owl.carousel.js')}}"></script>

    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = ".tp-caption.NotGeneric-Title,.NotGeneric-Title{color:rgba(255,255,255,1.00);font-size:70px;line-height:70px;font-weight:800;font-style:normal;font-family:Raleway;padding:10px 0px 10px 0;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px}.tp-caption.NotGeneric-SubTitle,.NotGeneric-SubTitle{color:rgba(255,255,255,1.00);font-size:13px;line-height:20px;font-weight:500;font-style:normal;font-family:Raleway;padding:0 0 0 0px;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;letter-spacing:4px;text-align:left}.tp-caption.NotGeneric-Button,.NotGeneric-Button{color:rgba(255,255,255,1.00);font-size:14px;line-height:14px;font-weight:500;font-style:normal;font-family:Raleway;padding:10px 30px 10px 30px;text-decoration:none;background-color:rgba(0,0,0,0);border-color:rgba(255,255,255,0.50);border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;letter-spacing:3px;text-align:left}.tp-caption.NotGeneric-Button:hover,.NotGeneric-Button:hover{color:rgba(255,255,255,1.00);text-decoration:none;background-color:transparent;border-color:rgba(255,255,255,1.00);border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;cursor:pointer}";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script type="text/javascript">
        /******************************************
                        -   PREPARE PLACEHOLDER FOR SLIDER  -
                    ******************************************/

        var setREVStartSize = function() {
            try {
                var e = new Object,
                    i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                e.c = jQuery('#rev_slider_3_1');
                e.gridwidth = [1240];
                e.gridheight = [868];

                e.sliderLayout = "fullscreen";
                e.fullScreenAutoWidth = 'off';
                e.fullScreenAlignForce = 'off';
                e.fullScreenOffsetContainer = '';
                e.fullScreenOffset = '';
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })

            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };

        setREVStartSize();

        var tpj = jQuery;

        var revapi3;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_3_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_3_1");
            } else {
                revapi3 = tpj("#rev_slider_3_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//pegodesign.com/wp-themes/altos/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1240,
                    gridheight: 868,
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                        type: "mouse",
                        disable_onmobile: "on"
                    },
                    shadow: 0,
                    spinner: "spinner2",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>
    <script>
        var htmlDivCss = ' #rev_slider_3_1_wrapper .tp-loader.spinner2{ background-color: #FFFFFF !important; } ';
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>

    <script>
    // start all the timers
    jQuery(document).ready(function($) {
        // custom callback when counting completes
        jQuery("#counter_5670").data("countToOptions", {
            onComplete: function(value) {
                jQuery(".counter-specific-wrapper-5670 span.after-counter-text").css({
                    "display": "inline-block"
                });
            }
        });

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data("countToOptions") || {});
            $this.countTo(options);
        }

        if (typeof jQuery.fn.waypoint !== "undefined") {
            jQuery("#counter_5670").waypoint(function($) {
                jQuery(".counter-specific-wrapper-5670 span.after-counter-text").css({
                    "display": "none"
                });
                jQuery("#counter_5670").each(count);
            }, {
                offset: "95%"
            });
        }
    });
</script>
                <script>
                    // start all the timers
                    jQuery(document).ready(function($) {

                        // custom callback when counting completes
                        jQuery("#counter_832").data("countToOptions", {
                            onComplete: function(value) {
                                jQuery(".counter-specific-wrapper-832 span.after-counter-text").css({
                                    "display": "inline-block"
                                });
                            }
                        });

                        function count(options) {
                            var $this = $(this);
                            options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                            $this.countTo(options);
                        }

                        if (typeof jQuery.fn.waypoint !== "undefined") {
                            jQuery("#counter_832").waypoint(function($) {
                                jQuery(".counter-specific-wrapper-832 span.after-counter-text").css({
                                    "display": "none"
                                });
                                jQuery("#counter_832").each(count);
                            }, {
                                offset: "95%"
                            });
                        }
                    });
                </script>
                <script>
                    // start all the timers
                    jQuery(document).ready(function($) {

                        // custom callback when counting completes
                        jQuery("#counter_9977").data("countToOptions", {
                            onComplete: function(value) {
                                jQuery(".counter-specific-wrapper-9977 span.after-counter-text").css({
                                    "display": "inline-block"
                                });
                            }
                        });

                        function count(options) {
                            var $this = $(this);
                            options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                            $this.countTo(options);
                        }

                        if (typeof jQuery.fn.waypoint !== "undefined") {
                            jQuery("#counter_9977").waypoint(function($) {
                                jQuery(".counter-specific-wrapper-9977 span.after-counter-text").css({
                                    "display": "none"
                                });
                                jQuery("#counter_9977").each(count);
                            }, {
                                offset: "95%"
                            });
                        }
                    });
                </script>
                <script>
                    // start all the timers
                    jQuery(document).ready(function($) {

                        // custom callback when counting completes
                        jQuery("#counter_6785").data("countToOptions", {
                            onComplete: function(value) {
                                jQuery(".counter-specific-wrapper-6785 span.after-counter-text").css({
                                    "display": "inline-block"
                                });
                            }
                        });

                        function count(options) {
                            var $this = $(this);
                            options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                            $this.countTo(options);
                        }

                        if (typeof jQuery.fn.waypoint !== "undefined") {
                            jQuery("#counter_6785").waypoint(function($) {
                                jQuery(".counter-specific-wrapper-6785 span.after-counter-text").css({
                                    "display": "none"
                                });
                                jQuery("#counter_6785").each(count);
                            }, {
                                offset: "95%"
                            });
                        }
                    });
                </script>
                <script>
                    // start all the timers
                    jQuery(document).ready(function($) {

                        // custom callback when counting completes
                        jQuery("#counter_7258").data("countToOptions", {
                            onComplete: function(value) {
                                jQuery(".counter-specific-wrapper-7258 span.after-counter-text").css({
                                    "display": "inline-block"
                                });
                            }
                        });

                        function count(options) {
                            var $this = $(this);
                            options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                            $this.countTo(options);
                        }

                        if (typeof jQuery.fn.waypoint !== "undefined") {
                            jQuery("#counter_7258").waypoint(function($) {
                                jQuery(".counter-specific-wrapper-7258 span.after-counter-text").css({
                                    "display": "none"
                                });
                                jQuery("#counter_7258").each(count);
                            }, {
                                offset: "95%"
                            });
                        }
                    });
                </script>
    <script>
        jQuery(document).ready(function($) {
            (function() {
                document.documentElement.className = "js";
                var slideshow = new CircleSlideshow(document.getElementById("slideshow2992"));
            })();
        });
    </script>
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 11,
                center: new google.maps.LatLng(40.733942, -74.060645),
                scrollwheel: false,
                styles: [{
                    'featureType': 'landscape',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 65
                    }, {
                        'visibility': 'on'
                    }]
                }, {
                    'featureType': 'poi',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 51
                    }, {
                        'visibility': 'simplified'
                    }]
                }, {
                    'featureType': 'road.highway',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'visibility': 'simplified'
                    }]
                }, {
                    'featureType': 'road.arterial',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 30
                    }, {
                        'visibility': 'on'
                    }]
                }, {
                    'featureType': 'road.local',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 40
                    }, {
                        'visibility': 'on'
                    }]
                }, {
                    'featureType': 'transit',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'visibility': 'simplified'
                    }]
                }, {
                    'featureType': 'administrative.province',
                    'stylers': [{
                        'visibility': 'off'
                    }]
                }, {
                    'featureType': 'water',
                    'elementType': 'labels',
                    'stylers': [{
                        'visibility': 'on'
                    }, {
                        'lightness': -25
                    }, {
                        'saturation': -100
                    }]
                }, {
                    'featureType': 'water',
                    'elementType': 'geometry',
                    'stylers': [{
                        'hue': '#ffff00'
                    }, {
                        'lightness': -25
                    }, {
                        'saturation': -97
                    }]
                }]
            }
            var map = new google.maps.Map(document.getElementById('map_canvas'),
                mapOptions);

            setMarkers(map, places);
        }

        /**
         * Data for the markers consisting of a name, a LatLng and a zIndex for
         * the order in which these markers should display on top of each
         * other.
         */
        var places = [
            ["Place1", 40.733942, -74.060645, 1]
        ];

        function setMarkers(map, locations) {
            // Add markers to the map

            // Marker sizes are expressed as a Size of X,Y
            // where the origin of the image (0,0) is located
            // in the top left of the image.

            // Origins, anchor positions and coordinates of the marker
            // increase in the X direction to the right and in
            // the Y direction down.
            var image = {
                url: 'upload/map-pin.png',
                // This marker is 20 pixels wide by 32 pixels tall.
                //size: new google.maps.Size(20, 32),
                // The origin for this image is 0,0.
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at 0,32.
                anchor: new google.maps.Point(0, 32)
            };
            // Shapes define the clickable region of the icon.
            // The type defines an HTML &lt;area&gt; element 'poly' which
            // traces out a polygon as a series of X,Y points. The final
            // coordinate closes the poly by connecting to the first
            // coordinate.
            var shape = {
                coords: [1, 1, 1, 20, 18, 20, 18, 1],
                type: 'poly'
            };
            for (var i = 0; i < locations.length; i++) {
                var beach = locations[i];
                var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                    shape: shape,
                    title: beach[0],
                    zIndex: beach[3]
                });
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>