<script type="text/javascript">
    $(function() {
        $('.tip').tooltip();
    });
</script>

<!--Show Detail-->
<div class="showBoxHead">
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/tr_TR/all.js#xfbml=1&appId=620324374696048";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="showinfo">

        <h1>{{$details->name}}</h1>
        <small>{{$details->description}}</small>
        <small>{{$details->username()->firstname}} tarafından eklendi.</small>
    </div>
    <div class="showLikes">
        <div class="fb-like" data-href="{{ URL::current() }}" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
</div>

<div class="showBox">
    <div class="buttons_p_n">
        <div id="floating-box">
            <div id="right-social" style="margin-top: 0px;"></div>
        </div>
        <a id="prev_p" class="prev_p" title="PrevName" href="{{@$details->prev()->slug}}"></a>
        <a id="next_p" class="next_p" title="Next Name" href="{{@$details->next()->slug}}"></a>
    </div>
    @if($details->type==1)
        <img src="{{$details->src}}" alt="" width="650" style="margin-left: 15px;"/>
    @elseif($details->type==2)
        <img src="{{$details->src}}" alt="" width="650" style="margin-left: 15px;"/>
    @elseif($details->type==3)
        @if($details->video_site_id==2)
            <!--Youtube Video-->
            <iframe src="http://www.youtube.com/embed/{{ $details->youtubeUrl() }}?rel=0&autohide=1&showinfo=0&autoplay=1" frameborder="0" width="650" height="350" style="margin-left: 15px;"></iframe>
        @elseif($details->video_site_id==3)
            <!--Vine Video-->
    <div class="video" style="width: 650px; height: 450px; overflow: hidden; position: relative;">
        <iframe frameborder="0" scrolling="no" seamless="seamless" webkitallowfullscreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowfullscreen="allowfullscreen" id="okplayer" width="650" height="450" style="position: absolute; top: 0px; left: 0px; width: 650px; height: 450px; margin-left: 15px;" src="https://vine.co/v/bD93lqlUOFL/card?mute=0"></iframe>
    </div>
            <script async="" src="//platform.vine.co/static/scripts/embed.js" charset="utf-8"></script>
        @endif
            <!--END VİDEO-->

    @endif
<!--Show Detail END-->

    <script type='text/javascript'>
        $(document).ready(function(){
            /*
             $('#loveit').click(function()
             {
             $.ajax({
             type: "POST",
             url: "http://nexthon.com/vmp/vote.php",
             data: { permalink: "awesome-car"}
             })
             $(this).css({"background" :  "url('../images/thumb_pink.png') no-repeat scroll 0% 0% #333"});
             $(this).unbind();
             });*/
            $("body").keydown(function(e) {
                if(e.keyCode == 37) { // left
                    window.location  = $('#prev_p').attr('href');
                }
                else if(e.keyCode == 39) { // right
                    window.location  = $('#next_p').attr('href');
                }
            });
        });
    </script>
</div>
<!--END SHOW BOX-->