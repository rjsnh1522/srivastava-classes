@extends('admin.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Admin
@endsection


@section('css')





@endsection



@section('content')
    <div id="jqueryvalidation" class="section">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="col s12 m12 l12">
                    <div class="pageNameDiv">
                        <h3>{{$data['pageTitle']}}</h3>
                    </div>
                </div>

                @if(Session::has('success'))
                    <div class="col s12 m12 l12">
                        <div id="card-alert" class="card green lighten-5">
                            <div class="card-content green-text">
                                <p>SUCCESS : {{Session::get('success')}}</p>
                            </div>
                            <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                @endif
                @if(Session::has('fail'))
                    <div class="col s12 m12 l12">
                        <div id="card-alert" class="card red lighten-5">
                            <div class="card-content red-text">
                                <p>DANGER : {{Session::get('fail')}}</p>
                            </div>
                            <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                @endif
                <?php $user_type=Session::get('user_type');
                ?>

                @if($user_type=='2' || $user_type=='1')
                <div class="col s12 m12 l12">
                    <a href="{{route('add.new.admin')}}" class="waves-effect waves-light btn right">Add New Admin</a>

                </div>
                @endif
                <div id="card-widgets">
                    @foreach($data['allAdmins']->chunk(3) as $chuckedAdmin)
                    <div class="row">
                        @foreach($chuckedAdmin as $admin)
                        <div class="col s12 m6 l4">
                            <div id="profile-card" class="card">
                                <div class="card-image waves-effect waves-block waves-light">

                                    <img class="activator" src="{{url('resources/assets/images/user-bg.jpg')}}" alt="user background">
                                </div>
                                <div class="card-content">
                                    <img src="@if($admin->image==''){{url('resources/assets/images/dummyuser.png')}} @else {{url('resources/assets/images/admin',$admin->image)}} @endif" alt=""
                                         class="circle responsive-img activator card-profile-image">

                                    @if($user_type=='2' ||$user_type=='1')
                                    <a href="{{route('delete.admin',$admin->admin_id)}}" class="btn-floating  btn-move-up waves-effect waves-light darken-2 right">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                    @endif
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                        <i class="mdi-action-account-circle"></i>
                                    </a>


                                    <p class="card-title lessMinHeight activator grey-text text-darken-4"> {{$admin->role}}</p>
                                    <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> {{$admin->name}}</p>
                                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> {{$admin->mobile}}</p>
                                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i> {{$admin->email}}
                                    </p>
                                    @if($user_type=='2' ||$user_type=='1')
                                    <p>
                                    <div class="switch">
                                        <form action="{{route('enable.disable.admin',$admin->admin_id)}}" method="post">
                                        <label>
                                            <input type="hidden" name="_token" value="{{Session('_token')}}">
                                            <input type="checkbox" name="status" @if($admin->status==1) checked='checked' @endif onChange="this.form.submit()">
                                            <span class="lever"></span>

                                        </label>
                                        </form>
                                    </div>
                                    </p>
                                        @endif

                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"> {{$admin->role}}<i
                                                class="mdi-navigation-close right"></i></span>
                                    <p>Details about admins</p>
                                    <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> {{$admin->name}}</p>
                                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> {{$admin->mobile}}</p>
                                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i> {{$admin->email}}</p>
                                    <p><i class="mdi-social-cake cyan-text text-darken-2"></i> {{$admin->dob}}</p>
                                    <p><i class="mdi-communication-forum cyan-text text-darken-2"></i> {{$admin->address}}</p>

                                </div>
                            </div>
                        </div>
                            @endforeach

                    </div>
                        @endforeach

                </div>


            </div>
        </div>
    </div>
    <div class="divider"></div>
@endsection




@section('script')
@endsection
