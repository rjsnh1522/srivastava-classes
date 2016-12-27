<script src="{{url('resources/assets/visitors/js/jquery.min.js')}}"></script>
<script src="{{url('resources/assets/visitors/js/bootstrap.min.js')}}"></script>
<script src="{{url('resources/assets/visitors/js/retina.js')}}"></script>
<script src="{{url('resources/assets/visitors/js/wow.js')}}"></script>
<script src="{{url('resources/assets/visitors/js/carousel.js')}}"></script>
<script src="{{url('resources/assets/visitors/js/progress.js')}}"></script>
<script src="{{url('resources/assets/visitors/js/parallax.js')}}"></script>
<script src="{{url('resources/assets/visitors/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{url('resources/assets/visitors/js/custom.js')}}"></script>

<!-- SLIDER REV -->
<script src="{{url('resources/assets/visitors/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{url('resources/assets/visitors/js/jquery.themepunch.revolution.min.js')}}"></script>
<script>
    /* ==============================================
     SLIDER -->
     =============================================== */
    jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:665,
                hideThumbs:200,
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview3",
                touchenabled:"on",
                onHoverStop:"on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                keyboardNavigation:"off",
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,
                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,
                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                shadow:0,
                fullWidth:"on",
                fullScreen:"off",
                spinner:"spinner4",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                forceFullWidth:"off",
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0
            });
</script>


<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script>
    $(document).ready(function() {
        if(localStorage.getItem('popState') != 'shown'){
            $("#popup").delay(2000).fadeIn();
            localStorage.setItem('popState','shown')
        }

        $('#popup-close').click(function(e) // You are clicking the close button
        {
            $('#popup').fadeOut(); // Now the pop up is hiden.
        });
        $('#popup').click(function(e)
        {
            $('#popup').fadeOut();
        });
    });
</script>