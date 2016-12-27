@extends('visitors.master')

@section('meta')
@endsection

@section('title')
@endsection

@section('css')
@endsection

@section('content')

    <section id="contact_parallax" class="section-white page-title-wrapper" data-stellar-background-ratio="1" data-stellar-offset-parent="true">
        <div class="container">
            <div class="relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <p>We Wanna Hear From You </p>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </div><!-- end title -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end relative -->
        </div><!-- end container -->
    </section><!-- end section-white -->

    <section class="section-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h4>Quick Contact</h4>
                        <hr>
                    </div><!-- end title -->
                </div><!-- end col -->
            </div><!-- end row -->

            @if(Session::has('success'))
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>SUCCESS : </strong>{{Session::get('success')}}
                    </div>
                </div>

            </div>
            @endif
            @if(Session::has('fail'))
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>FAIL : </strong>{{Session::get('fail')}}
                        </div>
                    </div>

                </div>
            @endif

            <div class="row section-container">
                <div class="col-md-8">
                    <form class="row contact_form" action="{{route('post.visitors.contact.data')}}" method="post">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="First Name" name="fname">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Last Name" name="lname">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Mobile" name="mobile">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="col-md-12 col-sm-6">
                            <textarea class="form-control" placeholder="Message" name="messageBody"></textarea>
                        </div>
                        <div class="col-md-12 col-sm-6">
                            <input type="hidden" name="_token" value="{{Session('_token')}}">
                            <button class="btn btn-primary pull-right"  type="submit">Send Message</button>
                        </div>
                    </form>

                </div>
                <div class="col-md-4">
                    <div class="contact-widget">
                        <h4>Contact Information :</h4>
                        <i class="fa fa-envelope"></i>
                        <p>Near DTDC Courier, Vistipara, H.E. School Road, Pandey Mohalla, Hirapur, Dhanbad, Jharkhand 826001</p>
                        <small>- info@srivastavaclasses.org</small>
                        <small>- 094727 65950</small>
                    </div><!-- end contact-widget -->

                    {{--<div class="contact-widget">--}}
                        {{--<h4>Business Hours :</h4>--}}
                        {{--<i class="fa fa-clock-o"></i>--}}
                        {{--<p>Monday – Friday : 9am to 20 pm<br>--}}
                            {{--Saturday : 9am to 17 pm<br>--}}
                            {{--Sunday : day off</p>--}}
                    {{--</div>--}}
                    <!-- end contact-widget -->

                </div><!-- end col -->
            </div>
        </div><!-- end container -->
    </section><!-- end section-white -->

    <section class="googlemap">
        {{--<iframe class="mapmarker" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351118085707!2d144.955652!3d-37.817330999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2s!4v1433492479787"></iframe>--}}

        <iframe class="mapmarker" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d116821.16375054627!2d86.3650705286554!3d23.795070095875058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39f6bcbf4015a8a5%3A0x2dc65a65d8b31ff!2ssrivastava+classes+dhn!3m2!1d23.7950859!2d86.4351109!5e0!3m2!1sen!2sin!4v1478085573130"></iframe>
    </section>



@endsection




@section('script')
@endsection