@extends('layouts.app')


@section('content')
    {!! \ConsoleTVs\Charts\Facades\Charts::assets() !!}
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    {!! $data['ch2']->render() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    {!! $data['ch1']->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
