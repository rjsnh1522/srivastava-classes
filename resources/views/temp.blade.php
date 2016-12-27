<style>
    .alert-info{
        text-align:center;
        color:#076100;
    }
    #likeMeDes{
        color:black;
    }
</style>

@if($post->type=='quiz')
    @include('_particles._lists.quizentrylist')

@else

    @foreach($entrys as $key => $entry)

        <section class="entry" id="section_{{ $entry->order }}" entry="{{ $entry->id }}">

            @if($entry->type=='poll')

                @include('_particles._lists.pollslist')
            @else

                @if($entry->title)
                    <h2 class="sub-title" >

                        @if($post->ordertype != '')
                            {{ $entry->order+1 }}.
                        @endif

                        {{ $entry->title }}
                    </h2>
                @endif

                @if($entry->type=='image')
                    <div class="media" style="border:1px solid #dadada;">
                        <div class="sharemedia">
                            @include('._particles.others.entrysharebuttons')
                        </div>
                        <div class="col-md-6" style="width:49%;display:inline-block;text-align:center;margin-bottom:10px;margin-top:10px;">
                            <p>THIS ARTICLE HAS</p>
                            <strong>{{$post->views}} Views</strong>
                        </div>
                        <div class="col-md-6" style="width:50%;display:inline-block;text-align:center ;margin-bottom:10px;margin-top:10px;">
                            <p>THIS ARTICLE HAS</p>
                            <strong id="points">{{$post->points}}</strong> Points
                        </div>
                        <a id="" class="gif-icon-a">
                            <img class="img-responsive" style="display: block;@if($entry->type=='image')width:100%@endif" alt="{{ $entry->title }}" src="{{ makepreview($entry->image, null, 'entries') }}"></a>
                        <div class="col-md-6" style="width:49%;display:inline-block;text-align:center;margin-top:10px;margin-bottom:10px;">

                            <form action="{{url('like')}}" method="post" id='myLikeForm'>
                                <input type="hidden" name="likeme" value="{{$post->id}}">
                                {{ csrf_field() }}

                                <strong><a href="#" id="likeMeDes" onclick="document.getElementById('myLikeForm').submit()">Like Me</a> </strong>
                            </form>


                        </div>
                        <div class="col-md-6" style="width:50%;display:inline-block;text-align:center;margin-top:10px;margin-bottom:10px;">
                            <strong id="report">Report</strong>
                        </div>
                        @if (Session::has('data'))
                            <div class="alert alert-info">{{ session('data') }}</div>
                        @endif

                        <div id="dialog" class="hide" title="Basic dialog">
                            {!! Form::open(array('action' => array('PostsController@report', 'redirectTo' => Request::query('redirectTo') ),'method' => 'POST')) !!}
                            <textarea name="report"></textarea><br>
                            {{ csrf_field() }}
                            <button class="button button-orange button-full" id="report-form-btn" type="submit">Report</button>
                            {!! Form::close() !!}
                        </div>


                        <small>{!! $entry->source !!}</small>
                    </div>
                @endif

                @if($entry->type=='video' or $entry->type=='tweet' or $entry->type=='facebookpost' or $entry->type=='embed' or $entry->type=='soundcloud')

                        <div class="col-md-6" style="width:49%;display:inline-block;text-align:center;margin-bottom:10px;margin-top:10px;">
                            <p>THIS ARTICLE HAS</p>
                            <strong>{{$post->views}} Views</strong>
                        </div>
                        <div class="col-md-6" style="width:50%;display:inline-block;text-align:center ;margin-bottom:10px;margin-top:10px;">
                            <p>THIS ARTICLE HAS</p>
                            <strong id="points">{{$post->points}}</strong> Points
                        </div>
                    @if($entry->type=='facebookpost')
                        <div class="fb-post" data-href="{!!   $entry->video !!}" data-width="100%"></div>

                    @elseif (strpos($entry->video, 'facebook'))
                        <div id="{!! $entry->id !!}" class="fb-video" data-href="{!! $entry->video !!}" style="max-height: 360px;"><div class="fb-xfbml-parse-ignore"></div></div>

                    @else
                        {!! $entry->video !!}
                    @endif
                        <div class="col-md-6" style="width:49%;display:inline-block;text-align:center;margin-top:10px;margin-bottom:10px;">

                            <form action="{{url('like')}}" method="post" id='myLikeForm'>
                                <input type="hidden" name="likeme" value="{{$post->id}}">
                                {{ csrf_field() }}

                                <strong><a href="#" id="likeMeDes" onclick="document.getElementById('myLikeForm').submit()">Like Me</a> </strong>
                            </form>


                        </div>
                        <div class="col-md-6" style="width:50%;display:inline-block;text-align:center;margin-top:10px;margin-bottom:10px;">
                            <strong id="report">Report</strong>
                        </div>
                        @if (Session::has('data'))
                            <div class="alert alert-info">{{ session('data') }}</div>
                        @endif


                    @endif
                @if( $entry->type=='instagram')

                    <div class='embed-containera'>
                        <iframe id="instagram-embed-{{ $entry->order }}" src="{!! $entry->video !!}embed/captioned/?v=5" allowtransparency="true" frameborder="0" data-instgrm-payload-id="instagram-media-payload-{{ $entry->order }}" scrolling="no" style="border: 0; margin: 1px; max-width: 658px; width: calc(100% - 2px); border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 1px 0px, rgba(0, 0, 0, 0.14902) 0px 1px 10px 0px; display: block; padding: 0px; background: rgb(255, 255, 255);"></iframe>
                        <script src="//platform.instagram.com/en_US/embeds.js"></script>
                    </div>

                @endif


                <p>
                    {!! $entry->body !!}
                </p>
                @if( $entry->type=='text')
                    <small>{!! $entry->source !!}</small>
                @endif
                <div class="clear"></div>

            @endif
        </section>

        @if($key==1 and count($entrys) > 3)
            @foreach(\App\Widgets::where('type', 'Post2nd3rdentry')->where('display', 'on')->get() as $widget)
                {!! $widget->text !!}
            @endforeach
        @endif


    @endforeach

@endif

@if(isset($post->pagination) and $post->pagination!=null)
    <ul class="postpage">

        @if($entrys->currentPage()!=1)<a href="{{ $entrys->previousPageUrl() }}" class="button button-big button-blue pull-l ">{{ trans('pagination.previous') }}</a>@endif
        @if($entrys->currentPage()!=$entrys->lastPage())<a href="{{ $entrys->nextPageUrl() }}"  class="button button-big button-blue pull-r">{{ trans('pagination.next') }}</a>@endif

    </ul>

@endif