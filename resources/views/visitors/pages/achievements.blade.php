@extends('visitors.master')

@section('meta')
@endsection

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    {{--@include('visitors.includes.content')--}}


    <section id="about_parallax_01" class="section-white page-title-wrapper" data-stellar-background-ratio="1" data-stellar-offset-parent="true">
        <div class="container">
            <div class="relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <p>Our Story</p>
                        </div><!-- end title -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end relative -->
        </div><!-- end container -->
    </section><!-- end section-white -->




    <section>
        <div class="container">
            <div class="page-header">
                <h1 id="timeline"></h1>
            </div>
            <?php $i=0; ?>

            @foreach($data['achievements'] as $ach)

                <?php $i++; ?>
            <ul class="timeline">
                <li class="@if($i%2==0) timeline-inverted  @else @endif">
                    <div class="timeline-badge @if($i%2==0) @else warning @endif"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title colorBlue">{{$ach->title}}</h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{date('j F , Y',$ach->ach_date)}}</small></p>
                        </div>
                        <div class="timeline-body">
                            <p>{{$ach->content}}</p>
                        </div>
                    </div>
                </li>
                {{--<li class="@if($i%2==0) timeline-inverted">--}}
                    {{--<div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>--}}
                    {{--<div class="timeline-panel">--}}
                        {{--<div class="timeline-heading">--}}
                            {{--<h4 class="timeline-title">Mussum ipsum cacilds</h4>--}}
                        {{--</div>--}}
                        {{--<div class="timeline-body">--}}
                            {{--<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>--}}
                            {{--<p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}

            </ul>

            @endforeach

        </div>
    </section>
    <div class="center-align">
        {{$data['achievements']->links()}}
    </div>


@endsection




@section('script')
@endsection