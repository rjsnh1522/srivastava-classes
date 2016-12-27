@extends('visitors.master')

@section('meta')
@endsection

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    {{--@include('visitors.includes.content')--}}


    <section id="about_parallax_01" class="section-white page-title-wrapper " data-stellar-background-ratio="1" data-stellar-offset-parent="true">
        <div class="container">
            <div class="relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <p>All You Want To Know About Us</p>
                        </div><!-- end title -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end relative -->
        </div><!-- end container -->
    </section><!-- end section-white -->

    <section class="section-white lessPaddingForPara">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="widget-title">
                        <h4>About Us</h4>
                        <hr>
                    </div>
                    <p>Srivastava Classes is an educational institute for Preparation of Engg. Entrances (JEE-Mains, Advanced, State Engg.) and for Medical (AIPMT, JIPMER, BCECE, JCECB,AIIMS). With Simple concept of Quality we are now one of the best educational institute in Dhanbad. Srivastava Classes offer Education for 12th Passouts, Class 12, Class 11, Class 10, Class 9 and Class 8. It is divided into two parts</p>
                    <ul class="ulTick">
                        <li><span>Senior Wing  :-</span> For Class 11th , Class 12th and 12th Passouts (JEE and PMT aspirants) .</li>
                        <li><span>Junior Wing  :-</span> For Class 8th,9th and 10th.</li>
                    </ul>

                    <p>There is also provision of Smart Classes (Digital Classes) , AITS ( All India Test Series) Online and offline both. Regular Weekly test helps students to analyse themselves about their preparation for each chapter. As well as subjective tests held for preparation of BOARD EXAMS and SCHOOL EXAMS.</p>
                    <p>With our Past achievements in JEE and PMT , in this we produce 62 JEE- Main result , 15 JEE-advanced result, 10  PMT results. With addition to these Our CBSE Topper secure 96.6% marks in 12th Board Exam.  85% Students of Class 10 passed their 10th Board with 10 CGPA.
                    </p>

                    <p>We work on the concept that “Coaching is a popular approach to employee development, based on a relationship between two people, the coach and the individual.  The individual typically wants to improve his or her understanding of a situation, learn new skills, prepare for new situations, or improve performance areas.  The coach may provide a variety of services to help the individual improve his or her performance.  For example, the coach may help identify an underlying problem, provide tools that help the individual understand the problem, suggest activities that will lead to performance improvement;, share insights about the environment in which the individual works, and provide honest feedback about the quality of performance.  Coaching is especially useful during times of significant change or challenge, when individuals must acquire new skills or adapt to new environments.</p>
                    <p> Srivastava Classes has a moto that 'if you have potential then we have resources and techniques to convert potential of student in excellent performance'. Whole team 'Dedicated to Excellence'.</p>

                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section-white -->

    <section id="about_parallax" class="section-white search-wrapper fullscreen" data-stellar-background-ratio="0.7" data-stellar-offset-parent="true">
        <div class="container relative">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h4>Word From The Wise</h4>
                        <hr>
                        {{--<p>Listen To Our Happy Customers !</p>--}}
                    </div><!-- end title -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row section-container lessMarginAbout">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="testi-style-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <p class="lead font15"><i class="fa fa-quote-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing condimentum tristique vel, eleifend sed turpis.</p>

                        <h4 class="clearfix dirImages"><img src="{{url('resources/assets/visitors/images/testi_04.png')}}" alt="" class="img-circle">Rakesh Srivastava <span>Founder & Director <small>H.O.D of Phy & Chem</small></span></h4>
                    </div><!-- end testi-style-2 -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="testi-style-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <p class="lead font15"><i class="fa fa-quote-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing condimentum tristique vel, eleifend sed turpis.</p>

                        <h4 class="clearfix dirImages"><img src="{{url('resources/assets/visitors/images/testi_02.png')}}" alt="" class="img-circle">Jitesh Srivastava <span>Senior Incharge <small>H.O.D of Mathematics</small></span></h4>
                    </div><!-- end testi-style-2 -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="testi-style-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <p class="lead font15"><i class="fa fa-quote-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing condimentum tristique vel, eleifend sed turpis.</p>

                        <h4 class="clearfix dirImages"><img src="{{url('resources/assets/visitors/images/testi_03.png')}}" alt="" class="img-circle"> Naity <span>Designer, <small>7oroof Agency</small></span></h4>
                    </div><!-- end testi-style-2 -->
                </div><!-- end col -->

            </div><!-- end row -->
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
                            <img src="{{url('resources/assets/visitors/images/team_08.jpg')}}" alt="" class="img-responsive">
                            <div class="team-desc noHover">
                                <h5>Mahmoud Adel Baghagho</h5>
                                <p>Co - Founder</p>
                            </div><!-- end team-desc -->

                        </div><!-- end team-image -->
                    </div><!-- end member -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="team-member wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="team-image entry">
                            <img src="{{url('resources/assets/visitors/images/team_03.jpg')}}" alt="" class="img-responsive">
                            <div class="team-desc noHover">
                                <h5>Naity Mahmoud</h5>
                                <p>Network Systems</p>
                            </div><!-- end team-desc -->

                        </div><!-- end team-image -->
                    </div><!-- end member -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="team-member wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="team-image entry">
                            <img src="{{url('resources/assets/visitors/images/team_01.jpg')}}" alt="" class="img-responsive">
                            <div class="team-desc noHover">
                                <h5>Ahmed Abd Alhaleem</h5>
                                <p>Graphic Design</p>
                            </div><!-- end team-desc -->
                        </div><!-- end team-image -->
                    </div><!-- end member -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="team-member  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="team-image entry">
                            <img src="{{url('resources/assets/visitors/images/team_04.jpg')}}" alt="" class="img-responsive">
                            <div class="team-desc noHover">
                                <h5>Mostafa Amin</h5>
                                <p>Branding</p>
                            </div><!-- end team-desc -->

                        </div><!-- end team-image -->
                    </div><!-- end member -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section-white -->

    <section class="section-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h4>Fun Facts</h4>
                        <hr>
                        <p>Things You Must Know About Us</p>
                    </div><!-- end title -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row section-container">
                <div class="col-md-3 col-sm-6">
                    <div class="fun-fact-box text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="fa fa-users fa-3x"></i>
                        <h4><span class="stat-count">40</span> +</h4>
                        <h5>Awesome Professors</h5>
                    </div><!-- end box -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6">
                    <div class="fun-fact-box text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="fa fa-book fa-3x"></i>
                        <h4><span class="stat-count">900</span> +</h4>
                        <h5>Courses</h5>
                    </div><!-- end box -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6">
                    <div class="fun-fact-box text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="fa fa-graduation-cap fa-3x"></i>
                        <h4><span class="stat-count">2220</span> +</h4>
                        <h5>Students</h5>
                    </div><!-- end box -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6">
                    <div class="fun-fact-box text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <i class="fa fa-coffee fa-3x"></i>
                        <h4><span class="stat-count">857</span> +</h4>
                        <h5>Cups of Coffee</h5>
                    </div><!-- end box -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </section>

@endsection




@section('script')
@endsection