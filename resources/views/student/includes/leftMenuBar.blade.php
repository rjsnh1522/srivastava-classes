<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    @if(Session::has('profilePic') && Session::get('profilePic')!='')
                        <img src="{{url('resources/assets/images/student/',Session::get('profilePic'))}}" alt=""
                             class="circle responsive-img valign profile-image">
                    @else
                        <img src="{{url('resources/assets/images/dummyuser.png')}}" alt=""
                             class="circle responsive-img valign profile-image">
                    @endif
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="{{route('student.complete.profile')}}"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout.me')}}"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
                       data-activates="profile-dropdown">{{Session::get('name')}}<i
                                class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">@if(Session::get('user_type')==4) Student @endif</p>
                </div>
            </div>
        </li>
        <li class="bold active">
            <a href="{{route('get.student.dashBoard')}}" class="waves-effect waves-cyan"><i
                        class="mdi-action-dashboard"></i> Dashboard</a>
        </li>


        <li class="bold"><a href="{{route('student.complete.profile')}}" class="waves-effect waves-cyan"><i
                        class="mdi-action-dashboard"></i>Profile</a>
        </li>
        <li class="bold"><a href="{{route('student.change.password')}}" class="waves-effect waves-cyan"><i
                        class="mdi-editor-insert-invitation"></i>Change password</a>
        </li>

        <li class="bold"><a href="#" class="waves-effect waves-cyan"><i
                        class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>
        </li>
        <li class="bold"><a href="{{route('get.time.table')}}" class="waves-effect waves-cyan"><i
                        class="mdi-editor-insert-invitation"></i> Time Table</a>
        </li>



        <li class="bold"><a href="{{route('get.chat.forum')}}" class="waves-effect waves-cyan"><i
                        class="mdi-editor-insert-invitation"></i>Chat</a>

        </li>

        <li class="bold"><a href="{{route('logout.me')}}" class="waves-effect waves-cyan"><i
                        class="mdi-editor-insert-invitation"></i>Logout</a>
        </li>

    </ul>
    <a href="#" data-activates="slide-out"
       class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i
                class="mdi-navigation-menu"></i></a>
</aside>