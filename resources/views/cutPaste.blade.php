<section class="section-white">
    <div class="container">
        <div class="theSmallWrapper">
            @foreach($data['allNews']->chunk(3) as $newsAll)
                <div class="row">
                    @foreach($newsAll as $newsSingle)
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                        </div>

                    @endforeach


                </div>
            @endforeach
        </div>

    </div><!-- end container -->
</section>


<a class="fancybox"  href="{{url($news->news_image_url.$news->news_image_name)}}"
   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
    <img src="{{url($news->news_image_url.$news->news_image_name)}}" alt="" class="img-responsive"/>
</a>










<div class="row section-container">
    <div class="col-md-8 col-md-offset-2">
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
</div>