@extends('admin.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Contact Messages
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

                <div class="col s12 m12 l12">
                    <div class="somePaddingTopBttom">
                        <div id="table-datatables">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th data-field="no">#</th>
                                            <th data-field="name">Name</th>
                                            <th data-field="email">Email</th>
                                            <th data-field="mobile">Mobile</th>
                                            <th data-field="message">Message</th>
                                            <th data-field="date">Date</th>
                                            <th data-field="action">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0;?>
                                        @foreach( $data['allMessage'] as $message)


                                            <tr>
                                                <?php $i++;
//                                                var_dump($message->created_at);
//                                                    die();
                                                ?>
                                                <td>{{$i}}</td>
                                                <td>{{$message->name}}</td>
                                                <td>{{$message->email}}</td>
                                                <td>{{$message->mobile}}</td>
                                                <td>{{$message->message}}</td>
                                                <td> {{$message->created_at}}</td>
                                                <td><a href="{{route('get.delete.contact.message',$message->contact_id)}}"
                                                       class="somePadding"><i class="fa fa-trash"></i></a>
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
                <div class="center-align">

                </div>

            </div>
        </div>
    </div>
    <div class="divider"></div>

    {{--@include('admin.middleContent')--}}
@endsection




@section('script')

    <script src="{{url('resources/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('resources/assets/js/data-tables-script.js')}}"></script>


    <script type="text/javascript">
        /*Show entries on click hide*/
        $(document).ready(function () {
            $(".dropdown-content.select-dropdown li").on("click", function () {
                var that = this;
                setTimeout(function () {
                    if ($(that).parent().hasClass('active')) {
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                    }
                }, 100);
            });
        });

    </script>


@endsection
