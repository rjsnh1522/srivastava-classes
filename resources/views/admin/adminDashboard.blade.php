@extends('admin.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes - Admin Dashboard
@endsection


@section('css')
@endsection



@section('content')
    <section id="content">

        <!--start container-->
        <div class="container">

            <!--card stats start-->
            <div id="card-stats">
                <div class="row">
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  green white-text">
                                <p class="card-stats-title"><i class="mdi-social-group-add"></i>Total Student</p>
                                <h4 class="card-stats-number">{{$data['totalStudent']}}</h4>

                            </div>

                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content pink lighten-1 white-text">
                                <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
                                <h4 class="card-stats-number">1806</h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span
                                            class="deep-purple-text text-lighten-5">from last month</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content blue-grey white-text">
                                <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                                <h4 class="card-stats-number">$806.52</h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span
                                            class="blue-grey-text text-lighten-5">from yesterday</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content purple white-text">
                                <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Admins</p>
                                <h4 class="card-stats-number">{{$data['totalAdmin']}}</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--card stats end-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!--card widgets start-->
            <div id="card-widgets">
                <div class="row">

                    <div class="col s12 m12 l4">
                        <ul id="task-card" class="collection with-header">
                            <li class="collection-header cyan">
                                <h4 class="task-card-title">Up Coming Test</h4>

                            </li>
                            <li class="collection-item dismissable">

                                <label for="task1">Test Name<a href="#" class="secondary-content">
                                        <span class="ultra-small">Date</span></a>
                                </label>
                                <span class="task-cat pink">Subject</span> <span class="task-cat teal">Class</span>

                            </li>
                            <li class="collection-item dismissable">
                                <label for="task1">Test Name<a href="#" class="secondary-content">
                                        <span class="ultra-small">Date</span></a>
                                </label>
                                <span class="task-cat pink">Subject</span> <span class="task-cat teal">Class</span>

                            </li>
                            <li class="collection-item dismissable">
                                <label for="task1">Test Name<a href="#" class="secondary-content">
                                        <span class="ultra-small">Date</span></a>
                                </label>
                                <span class="task-cat pink">Subject</span> <span class="task-cat teal">Class</span>

                            </li>
                            <li class="collection-item dismissable">
                                <label for="task1">Test Name<a href="#" class="secondary-content">
                                        <span class="ultra-small">Date</span></a>
                                </label>
                                <span class="task-cat pink">Subject</span> <span class="task-cat teal">Class</span>

                            </li>
                            <li class="collection-item dismissable">

                                <a href="#"><span class="task-cat teal">View More</span></a>


                            </li>
                        </ul>
                    </div>

                    <div class="col s12 m6 l4">
                        <div id="flight-card" class="card">
                            <div class="card-header amber darken-2">
                                <div class="card-title">
                                    <h4 class="flight-card-title">Flight</h4>
                                    <p class="flight-card-date">June 18, Thu 04:50</p>
                                </div>
                            </div>
                            <div class="card-content-bg white-text">
                                <div class="card-content">
                                    <div class="row flight-state-wrapper">
                                        <div class="col s5 m5 l5 center-align">
                                            <div class="flight-state">
                                                <h4 class="margin">LDN</h4>
                                                <p class="ultra-small">London</p>
                                            </div>
                                        </div>
                                        <div class="col s2 m2 l2 center-align">
                                            <i class="mdi-device-airplanemode-on flight-icon"></i>
                                        </div>
                                        <div class="col s5 m5 l5 center-align">
                                            <div class="flight-state">
                                                <h4 class="margin">SFO</h4>
                                                <p class="ultra-small">San Francisco</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s6 m6 l6 center-align">
                                            <div class="flight-info">
                                                <p class="small"><span class="grey-text text-lighten-4">Depart:</span>
                                                    04.50</p>
                                                <p class="small"><span class="grey-text text-lighten-4">Flight:</span>
                                                    IB 5786</p>
                                                <p class="small"><span class="grey-text text-lighten-4">Terminal:</span>
                                                    B</p>
                                            </div>
                                        </div>
                                        <div class="col s6 m6 l6 center-align flight-state-two">
                                            <div class="flight-info">
                                                <p class="small"><span class="grey-text text-lighten-4">Arrive:</span>
                                                    08.50</p>
                                                <p class="small"><span class="grey-text text-lighten-4">Flight:</span>
                                                    IB 5786</p>
                                                <p class="small"><span class="grey-text text-lighten-4">Terminal:</span>
                                                    C</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6 l4">
                        <div id="profile-card" class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="{{url('resources/assets/images/user-bg.jpg')}}"
                                     alt="user background">
                            </div>
                            <div class="card-content">
                                <img src="{{url('resources/assets/images/avatar.jpg')}}" alt=""
                                     class="circle responsive-img activator card-profile-image">
                                <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                    <i class="mdi-action-account-circle"></i>
                                </a>

                                <span class="card-title activator grey-text text-darken-4">Roger Waters</span>
                                <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</p>
                                <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989
                                </p>
                                <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>

                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Roger Waters <i
                                            class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this card.</p>
                                <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</p>
                                <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989
                                </p>
                                <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
                                <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
                                <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <!-- blog card -->
                    <div class="col s12 m12 l4">
                        <div class="blog-card">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img src="{{url('resources/assets/images/30.jpg')}}" alt="blog-img">
                                </div>
                                <ul class="card-action-buttons">
                                    <li><a class="btn-floating waves-effect waves-light green accent-4"><i
                                                    class="mdi-social-share"></i></a>
                                    </li>
                                    <li><a class="btn-floating waves-effect waves-light light-blue"><i
                                                    class="mdi-action-info activator"></i></a>
                                    </li>
                                </ul>
                                <div class="card-content">
                                    <p class="row">
                                        <span class="left"><a href="#">Web Design</a></span>
                                        <span class="right">18th June, 2015</span>
                                    </p>
                                    <h4 class="card-title grey-text text-darken-4"><a href="#"
                                                                                      class="grey-text text-darken-4">Materialize
                                            Featured Blog Post Card</a>
                                    </h4>
                                    <div class="row">
                                        <div class="col s2">
                                            <img src="{{url('resources/assets/images/avatar.jpg')}}" alt=""
                                                 class="circle responsive-img valign profile-image">
                                        </div>
                                        <div class="col s9"> By <a href="#">John Doe</a></div>
                                    </div>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i
                                                class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                                    <p>Here is some more information about this blog that is only revealed once clicked
                                        on.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- product-card -->
                    <div class="col s12 m12 l4">
                        <div class="product-card">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a href="#"
                                       class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                                    <img src="{{url('resources/assets/images/33.jpg')}}" alt="product-img">
                                </div>
                                <ul class="card-action-buttons">
                                    <li><a class="btn-floating waves-effect waves-light green accent-4"><i
                                                    class="mdi-av-repeat"></i></a>
                                    </li>
                                    <li><a class="btn-floating waves-effect waves-light red accent-2"><i
                                                    class="mdi-action-favorite"></i></a>
                                    </li>
                                    <li><a class="btn-floating waves-effect waves-light light-blue"><i
                                                    class="mdi-action-info activator"></i></a>
                                    </li>
                                </ul>
                                <div class="card-content">

                                    <div class="row">
                                        <div class="col s8">
                                            <p class="card-title grey-text text-darken-4"><a href="#"
                                                                                             class="grey-text text-darken-4">Featured
                                                    Product of The Month</a>
                                            </p>
                                        </div>
                                        <div class="col s4 no-padding">
                                            <a href="#"></a><img src="{{url('resources/assets/images/amazon.jpg')}}"
                                                                 alt="amazon" class="responsive-img">

                                        </div>
                                    </div>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i
                                                class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                                    <p>Here is some more information about this product that is only revealed once
                                        clicked on.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- map-card -->
                    <div class="col s12 m12 l4">
                        <div class="map-card">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <div id="map-canvas" data-lat="40.747688" data-lng="-74.004142"></div>
                                </div>
                                <div class="card-content">
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                        <i class="mdi-maps-pin-drop"></i>
                                    </a>
                                    <h4 class="card-title grey-text text-darken-4"><a href="#"
                                                                                      class="grey-text text-darken-4">Company
                                            Name LLC</a>
                                    </h4>
                                    <p class="blog-post-content">Some more information about this company.</p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Company Name LLC <i
                                                class="mdi-navigation-close right"></i></span>
                                    <p>Here is some more information about this company. As a creative studio we believe
                                        no client is too big nor too small to work with us to obtain good advantage.By
                                        combining the creativity of artists with the precision of engineers we develop
                                        custom solutions that achieve results.Some more information about this
                                        company.</p>
                                    <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Manager Name</p>
                                    <p><i class="mdi-communication-business cyan-text text-darken-2"></i> 125, ABC
                                        Street, New Yourk, USA</p>
                                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222
                                        8989</p>
                                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i> support@geekslabs
                                        .com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--card widgets end-->

                <!-- //////////////////////////////////////////////////////////////////////////// -->


            </div>
            <!--end container-->
        </div>
    </section>






@endsection




@section('script')
@endsection

