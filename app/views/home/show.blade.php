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
    <img src="{{$show_item->src}}" alt="" width="650" style="margin-left: 15px;"/>
</div>