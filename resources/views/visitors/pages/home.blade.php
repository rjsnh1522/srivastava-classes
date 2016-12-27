@extends('visitors.master')

@section('meta')
@endsection

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    {{--@include('visitors.includes.content')--}}




    <section class="slider-section">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="500" data-thumb="{{url('resources/assets/visitors/images/slider_01.jpg')}}"  data-saveperformance="off"  data-title="Slide">
                        <img src="{{url('resources/assets/visitors/images/s01.jpg')}}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption text-center skewfromleft randomrotateout tp-resizeme"
                             data-x="center"
                             data-y="165"
                             data-speed="1000"
                             data-start="800"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                            {{--<img src="{{url('resources/assets/visitors/images/slider_logo_01.png')}}" alt="">--}}
                        </div>
                        <div class="tp-caption slider_01 text-center skewfromright randomrotateout tp-resizeme"
                             data-x="center"
                             data-y="240"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        </div>
                        <div class="tp-caption slider_02 text-center skewfromright randomrotateout tp-resizeme"
                             data-x="center"
                             data-y="330"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">We Will Help You To Learn
                        </div>
                        {{--<div class="tp-caption slider_03 text-center randomrotateout tp-resizeme"--}}
                             {{--data-x="center"--}}
                             {{--data-y="395"--}}
                             {{--data-speed="1000"--}}
                             {{--data-start="1400"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-splitin="none"--}}
                             {{--data-splitout="none"--}}
                             {{--data-elementdelay="0.1"--}}
                             {{--data-endelementdelay="0.1"--}}
                             {{--data-endspeed="1000"--}}
                             {{--style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique<br> vel, eleifend sed turpis.--}}
                        {{--</div>--}}
                    </li>
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="500" data-thumb="{{url('resources/assets/visitors/images/slider_02.jpg')}}"  data-saveperformance="off"  data-title="Slide">
                        <img src="{{url('resources/assets/visitors/images/slider_02.jpg')}}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption slider_01 text-left skewfromright randomrotateout tp-resizeme"
                             data-x="left"
                             data-y="240"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        </div>
                        <div class="tp-caption slider_02 text-center skewfromright randomrotateout tp-resizeme"
                             data-x="left"
                             data-y="330"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">LEARN TO ACHIEVE EXCELLENCE
                        </div>
                        <div class="tp-caption slider_03 text-left randomrotateout tp-resizeme"
                             data-x="left"
                             data-y="395"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adip<br>iscing condimentum tristique vel, eleifend sed turpis.
                        </div>
                        <div class="tp-caption lft customout rs-parallaxlevel-0"
                             data-x="660"
                             data-y="231"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="Power3.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 4;">
                            <img src="{{url('resources/assets/visitors/images/dummy.png')}}" alt="" data-lazyload="{{url('resources/assets/visitors/images/slider_device_02.png')}}">
                        </div>
                        <div class="tp-caption lft customout rs-parallaxlevel-0"
                             data-x="590"
                             data-y="370"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="1600"
                             data-easing="Power3.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 4;">
                            <img src="{{url('resources/assets/visitors/images/dummy.png')}}" alt="" data-lazyload="{{url('resources/assets/visitors/images/slider_device_01.png')}}">
                        </div>
                    </li>
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="500" data-thumb="{{url('resources/assets/visitors/images/slider_03.jpg')}}"  data-saveperformance="off"  data-title="Slide">
                        <img src="{{url('resources/assets/visitors/images/slider_03.jpg')}}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption slider_01 text-center skewfromright randomrotateout tp-resizeme"
                             data-x="center"
                             data-y="240"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        </div>
                        <div class="tp-caption slider_02 text-center skewfromright randomrotateout tp-resizeme"
                             data-x="center"
                             data-y="330"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Learning Management System
                        </div>
                        <div class="tp-caption slider_03 text-center randomrotateout tp-resizeme"
                             data-x="center"
                             data-y="395"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique<br> vel, eleifend sed turpis.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-white makepadding">
        <div class="container">
            <div class="relative">
                <div class="background service-absolute">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-style-1">
                                <div class="icon-normal wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <i class="icon icon-Book"></i>
                                </div><!-- end icon-wrap -->
                                <div class="title-wrap">
                                    <h5 class="service-title">Learn Anything Online</h5>
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam, adipiscing vel condimentum tristique.</p>
                                </div><!-- end title-wrap -->
                            </div><!-- end title -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-style-1">
                                <div class="icon-normal wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <i class="icon icon-Users"></i>
                                </div><!-- end icon-wrap -->
                                <div class="title-wrap">
                                    <h5 class="service-title">Talk To Our Instructors</h5>
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam, adipiscing vel condimentum tristique.</p>
                                </div><!-- end title-wrap -->
                            </div><!-- end title -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-style-1">
                                <div class="icon-normal wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <i class="icon icon-MessageLeft"></i>
                                </div><!-- end icon-wrap -->
                                <div class="title-wrap">
                                    <h5 class="service-title">Speak With Others</h5>
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam, adipiscing vel condimentum tristique.</p>
                                </div><!-- end title-wrap -->
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end background service-absolute -->
            </div><!-- end relative -->
        </div><!-- end container -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h4>Our Features</h4>
                        <hr>
                        <p>Why You Should Purchase This Template</p>
                    </div><!-- end title -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row section-container">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-style-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="icon-wrap">
                            <i class="fa fa-laptop"></i>
                        </div><!-- end icon-wrap -->
                        <div class="title-wrap">
                            <h5 class="service-title">Learn Online</h5>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam, adipiscing vel condimentum tristique. <a href="#">Read More</a></p>
                        </div><!-- end title-wrap -->
                    </div><!-- end title -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-style-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="icon-wrap">
                            <i class="fa fa-users"></i>
                        </div><!-- end icon-wrap -->
                        <div class="title-wrap">
                            <h5 class="service-title">Expert Professors</h5>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam, adipiscing vel condimentum tristique. <a href="#">Read More</a></p>
                        </div><!-- end title-wrap -->
                    </div><!-- end title -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-style-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="icon-wrap">
                            <i class="fa fa-film"></i>
                        </div><!-- end icon-wrap -->
                        <div class="title-wrap">
                            <h5 class="service-title">Video & Audio Courses</h5>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam, adipiscing vel condimentum tristique. <a href="#">Read More</a></p>
                        </div><!-- end title-wrap -->
                    </div><!-- end title -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-style-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="icon-wrap">
                            <i class="fa fa-wechat"></i>
                        </div><!-- end icon-wrap -->
                        <div class="title-wrap">
                            <h5 class="service-title">Communicate With People</h5>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam, adipiscing vel condimentum tristique. <a href="#">Read More</a></p>
                        </div><!-- end title-wrap -->
                    </div><!-- end title -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-style-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="icon-wrap">
                            <i class="fa fa-flag"></i>
                        </div><!-- end icon-wrap -->
                        <div class="title-wrap">
                            <h5 class="service-title">Trusted Certifications</h5>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam, adipiscing vel condimentum tristique. <a href="#">Read More</a></p>
                        </div><!-- end title-wrap -->
                    </div><!-- end title -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-style-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="icon-wrap">
                            <i class="fa fa-book"></i>
                        </div><!-- end icon-wrap -->
                        <div class="title-wrap">
                            <h5 class="service-title">Professional Courses</h5>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam, adipiscing vel condimentum tristique. <a href="#">Read More</a></p>
                        </div><!-- end title-wrap -->
                    </div><!-- end title -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section-white -->

    <section class="section-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h4>Latest Courses</h4>
                        <hr>
                        <p>Check Out Our Latest Professional Courses</p>
                    </div><!-- end title -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div id="owl-courses" class="section-container">
                <div class="course-item">
                    <div class="owl-image">
                        <a href="#" title="">
                            <img src="{{url('resources/assets/visitors/images/course_01.png')}}" alt="" class="img-responsive"></a>
                        <span class="course-badge"><i class="fa fa-spoon"></i></span>
                    </div><!-- end image -->
                    <div class="course-desc">
                        <h5><a href="#" title="">Cooking Lessons</a></h5>
                        <span class="meta">Food & Cooking</span>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut, vivamus at elit qiuis urna adipiscing iaculis vitae velit in neque.</p>
                        <div class="course-big-meta clearfix">
                            <div class="pull-left">
                                <a href="#" class="owl-button">Details</a>
                            </div><!-- end left -->
                            <div class="pull-right">
                                <p>$200</p>
                            </div><!-- end right -->
                        </div><!-- end course-big-meta -->
                    </div><!-- end desc -->
                </div><!-- end item -->

                <div class="course-item">
                    <div class="owl-image">
                        <a href="#" title="">
                            <img src="{{url('resources/assets/visitors/images/course_02.png')}}" alt="" class="img-responsive"></a>
                        <span class="course-badge"><i class="fa fa-camera"></i></span>
                    </div><!-- end image -->
                    <div class="course-desc">
                        <h5><a href="course-single-1.html" title="">Photography Lessons</a></h5>
                        <span class="meta">Food & Cooking</span>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut, vivamus at elit qiuis urna adipiscing iaculis vitae velit in neque.</p>
                        <div class="course-big-meta clearfix">
                            <div class="pull-left">
                                <a href="#" class="owl-button">Details</a>
                            </div><!-- end left -->
                            <div class="pull-right">
                                <p>$350</p>
                            </div><!-- end right -->
                        </div><!-- end course-big-meta -->
                    </div><!-- end desc -->
                </div><!-- end item -->

                <div class="course-item">
                    <div class="owl-image">
                        <a href="#" title="">
                            <img src="{{url('resources/assets/visitors/images/course_03.png')}}" alt="" class="img-responsive"></a>
                        <span class="course-badge"><i class="fa fa-flask"></i></span>
                    </div><!-- end image -->
                    <div class="course-desc">
                        <h5><a href="course-single-1.html" title="">Web Design Lessons</a></h5>
                        <span class="meta">Food & Cooking</span>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut, vivamus at elit qiuis urna adipiscing iaculis vitae velit in neque.</p>
                        <div class="course-big-meta clearfix">
                            <div class="pull-left">
                                <a href="#" class="owl-button">Details</a>
                            </div><!-- end left -->
                            <div class="pull-right">
                                <p>$500</p>
                            </div><!-- end right -->
                        </div><!-- end course-big-meta -->
                    </div><!-- end desc -->
                </div><!-- end item -->

                <div class="course-item">
                    <div class="owl-image">
                        <a href="#" title="">
                            <img src="{{url('resources/assets/visitors/images/course_01.png')}}" alt="" class="img-responsive"></a>
                        <span class="course-badge"><i class="fa fa-spoon"></i></span>
                    </div><!-- end image -->
                    <div class="course-desc">
                        <h5><a href="#" title="">Cooking Lessons</a></h5>
                        <span class="meta">Food & Cooking</span>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut, vivamus at elit qiuis urna adipiscing iaculis vitae velit in neque.</p>
                        <div class="course-big-meta clearfix">
                            <div class="pull-left">
                                <a href="#" class="owl-button">Details</a>
                            </div><!-- end left -->
                            <div class="pull-right">
                                <p>$200</p>
                            </div><!-- end right -->
                        </div><!-- end course-big-meta -->
                    </div><!-- end desc -->
                </div><!-- end item -->

                <div class="course-item">
                    <div class="owl-image">
                        <a href="#" title="">
                            <img src="{{url('resources/assets/visitors/images/course_02.png')}}" alt="" class="img-responsive"></a>
                        <span class="course-badge"><i class="fa fa-camera"></i></span>
                    </div><!-- end image -->
                    <div class="course-desc">
                        <h5><a href="course-single-1.html" title="">Cooking Lessons</a></h5>
                        <span class="meta">Food & Cooking</span>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut, vivamus at elit qiuis urna adipiscing iaculis vitae velit in neque.</p>
                        <div class="course-big-meta clearfix">
                            <div class="pull-left">
                                <a href="#" class="owl-button">Details</a>
                            </div><!-- end left -->
                            <div class="pull-right">
                                <p>$350</p>
                            </div><!-- end right -->
                        </div><!-- end course-big-meta -->
                    </div><!-- end desc -->
                </div><!-- end item -->

                <div class="course-item">
                    <div class="owl-image">
                        <a href="#" title="">
                            <img src="{{url('resources/assets/visitors/images/course_03.png')}}" alt="" class="img-responsive"></a>
                        <span class="course-badge"><i class="fa fa-flask"></i></span>
                    </div><!-- end image -->
                    <div class="course-desc">
                        <h5><a href="#" title="">Cooking Lessons</a></h5>
                        <span class="meta">Food & Cooking</span>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut, vivamus at elit qiuis urna adipiscing iaculis vitae velit in neque.</p>
                        <div class="course-big-meta clearfix">
                            <div class="pull-left">
                                <a href="#" class="owl-button">Details</a>
                            </div><!-- end left -->
                            <div class="pull-right">
                                <p>$500</p>
                            </div><!-- end right -->
                        </div><!-- end course-big-meta -->
                    </div><!-- end desc -->
                </div><!-- end item -->
            </div><!-- end owl-carousel -->
        </div><!-- end container -->
    </section><!-- end section-white -->

    <section class="section-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h4>Our Instructors</h4>
                        <hr>
                        <p>Meet Our Awesome & Creative Team</p>
                    </div><!-- end title -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row section-container">
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="team-member wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="team-image entry">
                            <img src="{{url('resources/assets/visitors/images/team_01.jpg')}}" alt="" class="img-responsive">
                            <div class="team-desc">
                                <h5>Mahmoud Adel Baghagho</h5>
                                <p>Co - Founder</p>
                            </div><!-- end team-desc -->
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <ul>
                                        <li class="facebook" ><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end team-image -->
                    </div><!-- end member -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="team-member wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="team-image entry">
                            <img src="{{url('resources/assets/visitors/images/team_02.jpg')}}" alt="" class="img-responsive">
                            <div class="team-desc">
                                <h5>Naity Mahmoud</h5>
                                <p>Network Systems</p>
                            </div><!-- end team-desc -->
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <ul>
                                        <li class="facebook" ><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end team-image -->
                    </div><!-- end member -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="team-member wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="team-image entry">
                            <img src="{{url('resources/assets/visitors/images/team_03.jpg')}}" alt="" class="img-responsive">
                            <div class="team-desc">
                                <h5>Ahmed Abd Alhaleem</h5>
                                <p>Graphic Design</p>
                            </div><!-- end team-desc -->
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <ul>
                                        <li class="facebook" ><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end team-image -->
                    </div><!-- end member -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="team-member  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="team-image entry">
                            <img src="{{url('resources/assets/visitors/images/team_04.jpg')}}" alt="" class="img-responsive">
                            <div class="team-desc">
                                <h5>Mostafa Amin</h5>
                                <p>Branding</p>
                            </div><!-- end team-desc -->
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <ul>
                                        <li class="facebook" ><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end team-image -->
                    </div><!-- end member -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section-white -->

    <section id="parallax1" class="fullscreen section-white" data-stellar-background-ratio="0.7" data-stellar-offset-parent="true">
        <div class="overlay"></div>
        <div class="container">
            <div id="owl-testimonial" class="text-center relative">
                <div class="testi-item">
                    <img src="{{url('resources/assets/visitors/images/testi_01.png')}}" alt="" class="img-circle">
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel,<br> eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
                    <h4>Begha <span>Senior UI Designer, <small>7oroof Agency</small></span></h4>
                </div><!-- end item -->

                <div class="testi-item">
                    <img src="{{url('resources/assets/visitors/images/testi_01.png')}}" alt="" class="img-circle">
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel,<br> eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
                    <h4>Begha <span>Senior UI Designer, <small>7oroof Agency</small></span></h4>
                </div><!-- end item -->
            </div><!-- end relative -->
        </div><!-- end container -->
    </section><!-- end section-white -->

    <section class="section-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="widget about-widget wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="widget-title">
                            <h4>About Us</h4>
                            <hr>
                        </div><!-- end widget-title -->
                        <img src="{{url('resources/assets/visitors/images/about_01.png')}}" alt="" class="img-responsive">
                        <p>Suspendisse non augue tincidunt, ullamcorper odio vel, tempor risus. In cursus lacus at mattis consectetur. Mauris ligula nisi, aliquam id enim accumsan pretium, Suspendisse non augue tincidunt, ullamcorper odio vel, tempor risus. In cursus lacus at mattis consectetur.  <a class="readmore" href="#">Read More</a></p>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="widget about-widget wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="widget-title">
                            <h4>Why Us</h4>
                            <hr>
                        </div><!-- end widget-title -->
                        <div class="accordion-toggle-2">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour">
                                                <h3><i class="indicator fa fa-plus"></i>Pixel Perfect?</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Cras urna felis accumsan at ultrde cesid posuere masa um socis nautoque penat.  Maecenas ultrices. Lorem ipsum dolor sit amet consectetur adipisicing elit sedu do eiusmod tempore incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
                                                <h3> <i class="indicator fa fa-minus"></i> Ultra Responsive</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Cras urna felis accumsan at ultrde cesid posuere masa um socis nautoque penat.  Maecenas ultrices. Lorem ipsum dolor sit amet consectetur adipisicing elit sedu do eiusmod tempore incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseSix">
                                                <h3><i class="indicator fa fa-plus"></i> Modern Design</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Cras urna felis accumsan at ultrde cesid posuere masa um socis nautoque penat.  Maecenas ultrices. Lorem ipsum dolor sit amet consectetur adipisicing elit sedu do eiusmod tempore incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="widget about-widget wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="widget-title">
                            <h4>Skills</h4>
                            <hr>
                        </div><!-- end widget-title -->
                        <div class="skills">
                            <p>Design</p>
                            <div class="progress active">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="96"><span>96%</span></div>
                            </div>
                            <p>Branding</p>
                            <div class="progress active">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="90"><span>90%</span></div>
                            </div>
                            <p>WordPress</p>
                            <div class="progress active">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="86"><span>86%</span></div>
                            </div>
                            <p>Development</p>
                            <div class="progress active">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="98"><span>98%</span></div>
                            </div>
                            <p>Photography</p>
                            <div class="progress active">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="86"><span>86%</span></div>
                            </div>
                        </div><!-- end skills -->
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row section-container">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="widget about-widget wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="widget-title">
                            <h4>Our Clients</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div id="clients" class="clearfix text-center">
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_01.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_02.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_03.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_04.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_05.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_06.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_01.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_02.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_03.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_04.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_05.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                            <div class="client-image">
                                <a href="#"><img src="{{url('resources/assets/visitors/images/client_06.png')}}" alt="" class="img-responsive"></a>
                            </div><!-- end client-image -->
                        </div><!-- end clients -->
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div><!-- end container -->
    </section><!-- end section-white -->







@endsection




@section('script')
@endsection