@extends('admin.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Students List
@endsection


@section('css')


    <link rel="stylesheet" href="{{url('resources/assets/css/jquery.dataTables.min.css')}}">



@endsection



@section('content')

    <div id="jqueryvalidation" class="section">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="col s12 m12 l12">
                    <div class="pageNameDiv">
                        <h3>{{$data['pageTitle']}}
                        </h3>
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
                                <p>ERROR : {{Session::get('fail')}}</p>
                            </div>
                            <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <div class="row">
                            <form class="achievementsForm right-alert col s12" id="achievementsForm" method="post" action="{{route('get.student.table')}}"enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s4">
                                        <select name="selectedClass">
                                            <option value="" disabled selected>@if(old('selectedClass')){{old('selectedClass')}} @else Select Class @endif</option>
                                            <option value="Eleven">Eleven</option>
                                            <option value="Twelve">Twelve</option>
                                            <option value="Target">Target</option>
                                        </select>
                                        <label>Select Class</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <select name="selectedSubject">
                                            <option value="" disabled selected>@if(old('selectedSubject')){{old('selectedSubject')}} @else Select Subject @endif</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Maths">Maths</option>
                                            <option value="Biology">Biology</option>
                                        </select>
                                        <label>Select Subject</label>
                                    </div>
                                    <div class="input-field col s3">
                                        <input type="hidden" name="_token" value="{{Session('_token')}}">

                                        <button class="btn  waves-effect waves-light right" type="submit" name="action">Submit
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col s12 m12 l12">

                    <div id="table-datatables">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Class</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php $i=0;?>
                                    @foreach( $data['allStudents'] as $studentList)
                                        <?php $i++;?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$studentList->name}}</td>
                                            <td>{{$studentList->email}}</td>
                                            <td>{{$studentList->mobile}}</td>
                                            <td>{{$studentList->email}}</td>
                                            <td>

                                                <img src="{{url('resources/assets/images/student',$studentList->image)}}" alt="">

                                            </td>
                                            <td>
                                                <p>
                                                <div class="switch">
                                                    <form action="#" method="post">
                                                        <label>
                                                            <input type="hidden" name="_token" value="{{Session('_token')}}">
                                                            <input type="checkbox" name="status" @if(1==1) checked='checked' @endif onChange="this.form.submit()">
                                                            <span class="lever"></span>

                                                        </label>
                                                    </form>
                                                </div>
                                                <span>
                                                    <a href="#"><i class="fa fa-paper-plane-o"></i></a>
                                                </span>
                                                </p>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>


        </div>
    </div>


@endsection




@section('script')

    <script src="{{url('resources/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('resources/assets/js/data-tables-script.js')}}"></script>


    <script type="text/javascript">
        /*Show entries on click hide*/
        $(document).ready(function(){
            $(".dropdown-content.select-dropdown li").on( "click", function() {
                var that = this;
                setTimeout(function(){
                    if($(that).parent().hasClass('active')){
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                    }
                },100);
            });
        });

    </script>


    <script>
        $(document).ready(function(){
            $(':checkbox').on('change',function(){
                var th = $(this), name = th.prop('name');
                if(th.is(':checked')){
                    $(':checkbox[name="'  + name + '"]').not($(this)).prop('checked',false);
                }
            });
        });
    </script>
@endsection
