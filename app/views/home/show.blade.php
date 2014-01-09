<script type="text/javascript">
    $(function() {
        $('.tip').tooltip();
    });
</script>
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
        <small>{{$username->firstname}} tarafından eklendi.</small>
        <h1>{{$show_item->name}}</h1>
        <small>{{$show_item->description}}</small>
    </div>

    <div class="showLikes">
        <div class="fb-like" data-href="{{ URL::current() }}" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
        <!--
    <div class="showinfo">
        <a href="#" class="tip" data-toggle="tooltip" title="" data-original-title="Gösterim Sayısı">
            40<span class="glyphicon glyphicon-eye-open"></span>
        </a>
        <a href="#" class="tip" data-toggle="tooltip" title="" data-original-title="Beğen">
            14<span class="glyphicon glyphicon-thumbs-up"></span>
        </a>
        <a href="#" class="tip" data-toggle="tooltip" title="" data-original-title="Beğenme">
            7<span class="glyphicon glyphicon-thumbs-down"></span>
        </a>
    </div>
    -->

</div>
<div class="showBox">

    <div class="buttons_p_n">
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
        <div id="floating-box">
            <div id="right-social" style="margin-top: 0px;"></div>
        </div>
        <a id="prev_p" class="prev_p" title="Iguana" href="{{@$prev}}"></a>
        <a id="next_p" class="next_p" title="The Artists" href="{{@$next->slug}}"></a>
    </div>
    @if($show_item->type==1)
        <img src="{{$show_item->src}}" alt="" width="650" style="margin-left: 15px;"/>
    @elseif($show_item->type==3)
    <iframe src="http://www.youtube.com/embed/{{ $videoUrl }}?rel=0&autohide=1&showinfo=0" frameborder="0" width="650" height="350" style="margin-left: 15px;"></iframe>

    @endif

</div>
<!--END SHOW BOX-->