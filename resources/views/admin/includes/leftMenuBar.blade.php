<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    @if(!empty(array_filter((array)Session::get('profilePic'))))
                    <img src="{{url('resources/assets/images/admin/',Session::get('profilePic'))}}" alt=""
                         class="circle responsive-img valign profile-image">
                        @else
                        <img src="{{url('resources/assets/images/dummyuser.png')}}" alt=""
                             class="circle responsive-img valign profile-image">
                    @endif
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="{{route('complete.your.profile')}}"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="{{route('get.change.password')}}"><i class="mdi-action-settings"></i>Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout.me')}}"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
                       data-activates="profile-dropdown">{{Session::get('name')}}<i
                                class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">@if(Session::get('user_type')==1)
                      Developer
                            @elseif(Session::get('user_type')==2)
                                             Supper Admin
                        @elseif(Session::get('user_type')==3)
                        Admin
                                             @endif

                    </p>
                </div>
            </div>
        </li>
        <li class="bold active"><a href="{{route('get.admin.dashBoard')}}" class="waves-effect waves-cyan"><i
                        class="mdi-action-dashboard"></i> Dashboard</a>
        </li>


        <li class="bold"><a href="{{route('get.popUp')}}" class="waves-effect waves-cyan"><i
                        class="mdi-action-shop"></i>Pop Up</a>
        </li>

        <li class="bold"><a href="{{route('get.achievements')}}" class="waves-effect waves-cyan"><i
                        class="fa fa-trophy"></i> Achievements</a>
        </li>

        <li class="bold">
            {{--<a href="{{route('')}}" class="waves-effect waves-cyan"><i--}}
                        {{--class="fa fa-trophy"></i>Notice Board</a>--}}
            <a href="{{route('get.all.notices')}}" class="waves-effect waves-cyan"><i
                        class="mdi-content-report"></i>Notice Board</a>
        </li>

        <li class="bold"><a href="{{route('get.student.list')}}" class="waves-effect waves-cyan">
                <i class="mdi-social-group"></i>
                Students</a>

        </li>
        <li class="bold">
            <a href="{{route('get.news.list')}}" class="waves-effect waves-cyan">
                <i class="mdi-av-queue"></i>
                News </a>

        </li>

        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                {{--<li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i--}}
                                {{--class="mdi-communication-email"></i>Mailbox</a>--}}
                    {{--<div class="collapsible-body">--}}
                        {{--<ul>--}}
                            {{--<li><a href="#">New Mail<span class="new badge">4</span></a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Send Mail</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Saved Mail</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                {{--</li>--}}
                {{--<li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i--}}
                                {{--class="mdi-image-palette"></i>SMS</a>--}}
                    {{--<div class="collapsible-body">--}}
                        {{--<ul>--}}
                            {{--<li><a href="#">Send SMS<span class="new badge">4</span></a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Saved SMS</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                {{--</li>--}}
                <li class="bold">
                    <a  class="collapsible-header  waves-effect waves-cyan">
                        <i class="mdi-notification-event-note"></i>Notifications</a>

                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('get.contact.message')}}">Contact Message</a>
                            </li>
                            <li><a href="{{route('get.join.requests')}}">Join Request</a>
                            </li>
                        </ul>
                    </div>

                </li>

                <li class="bold">
                    <a href="{{route('get.all.results')}}" class="waves-effect waves-cyan"><i
                                class="mdi-notification-folder-special"></i>Results</a>
                </li>
                <li class="bold">
                    <a href="{{route('get.admin.list')}}" class="waves-effect waves-cyan"><i
                                class="mdi-action-verified-user"></i> Admins</a>

                </li>

                <li class="bold">
                    <a class="waves-effect waves-cyan">
                        <i class="mdi-editor-format-color-text"></i>
                        Testimonials</a>

                </li>
                <li class="bold">
                    <a href="{{route('get.timeTable.list')}}" class="waves-effect waves-cyan"><i
                                class="fa fa-calendar"></i>Time Table</a>

                </li>



                <li class="bold">
                    <a href="{{route('logout.me')}}" class="waves-effect waves-cyan"><i
                                class="fa fa-power-off powerOff"></i> Logout</a>

                </li>

            </ul>
        </li>



    </ul>
    <a href="#" data-activates="slide-out"
       class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i
                class="mdi-navigation-menu"></i></a>
</aside>