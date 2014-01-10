<!--TABS START-->
<ul class="nav nav-tabs" id="myTab" style="margin-top: 20px;">
    <li class="active">
        <a href="#news" data-toggle="tab">
            <span class="glyphicon glyphicon-bullhorn"></span> TAZELER
        </a>
    </li>
    <li>
        <a href="#images" data-toggle="tab">
            <span class="glyphicon glyphicon-camera"></span>
            RESİMLER
        </a>
    </li>
    <li>
        <a href="#gifs" data-toggle="tab">
            <span class="glyphicon glyphicon-flash"></span>
            HAREKETLİ RESİMLER
        </a>
    </li>
    <li>
        <a href="#videos" data-toggle="tab">
            <span class="glyphicon glyphicon-film"></span>
            VİDEOLAR
        </a>
    </li>
    <li>
        <a href="#vine" data-toggle="tab">
            <span class="glyphicon glyphicon-play-circle"></span>
            VİNE
        </a>
    </li>
</ul>
{{ HTML::script('packages/thumbhover/js/modernizr.custom.97074.js') }}
{{ HTML::script('packages/thumbhover/js/jquery.hoverdir.js') }}
{{ HTML::style('packages/thumbhover/css/style.css') }}
<script type="text/javascript">
    $( document ).ready(function() {
        $(function() {
            $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
        });
    });
</script>

<script type="text/javascript">

</script>

<div class="tab-content">
    <div class="tab-pane active" id="news">


        <ul id="da-thumbs" class="da-thumbs">

            @foreach ($medias as $image)
                <li>
                    <p>
                        {{ $image->name }}
                    </p>
                    <div class="type">
                        {{ $image->icon() }}

                    </div>
                    <a href="show/{{$image->slug }}">
                        @if($image->type==3)

                            @if($image->video_site_id==3)
                                <img src="http://placehold.it/200x135&text=Görsel Hazırlanıyor" width="200" height="200" />
                            @else
                                <img src="{{ $image->thumbnail_src }}" width="200" height="200" />
                            @endif

                        @else
                            <img src="{{ $image->src }}" width="200" height="200" />
                        @endif
                        <div>

                            <span>{{ $image->description }}</span>
                        </div>
                    </a>
                </li>
            @endforeach

        </ul>
        <!--thumbnail images END-->

    </div>
    <!--NEWS END-->
    <div class="tab-pane" id="images">
        <ul id="da-thumbs" class="da-thumbs">

            @foreach ($medias as $image)
                @if($image->type==0)
                    <li>
                        <div class="type">
                            {{ $image->icon() }}
                        </div>
                        <a href="show/{{$image->slug}}">
                            @if($image->video_site_id==3)
                                <img src="{{ $image->src }}" width="200" height="200" />
                            @else
                                <img src="{{ $image->src }}" width="200" height="200" />
                            @endif
                            <div>
                                <span>{{ $image->name }}</span>
                                <span>{{ $image->description }}</span>
                            </div>
                        </a>
                    </li>
                @endif
            @endforeach

        </ul>
        <!--thumbnail images END-->
    </div>
    <div class="tab-pane" id="gifs">
        <ul id="da-thumbs" class="da-thumbs">

            @foreach ($medias as $image)
                @if($image->type==1)
                    <li>
                        <div class="type">
                            {{ $image->icon() }}
                        </div>
                        <a href="show/{{ $image->id }}/{{$image->slugName()}}">
                            <img src="{{ $image->src }}" width="200" height="200" />
                            <div>
                                <span>{{ $image->name }}</span>
                                <span>{{ $image->description }}</span>
                            </div>
                        </a>
                    </li>
                @endif
            @endforeach

        </ul>
        <!--thumbnail images END-->
    </div>
    <div class="tab-pane" id="videos">
        <ul id="da-thumbs" class="da-thumbs">

            @foreach ($medias as $video)
            <li>
                <div class="type">
                    <span class="glyphicon glyphicon-film"></span>
                </div>
                <a href="#{{ $video->id }}">
                    <img src="{{ $video->thumbnail_src }}" width="200" height="200" />
                    <div>
                        <span>{{ $video->name }}</span>
                        <span>{{ $video->description }}</span>
                    </div>
                </a>
            </li>
            @endforeach

        </ul>
        <!--thumbnail images END-->
    </div>
    <div class="tab-pane" id="vine">
        <ul id="da-thumbs" class="da-thumbs">

            @foreach ($medias as $image)
            <li>
                <div class="type">
                    {{ $image->icon() }}
                </div>
                <a href="#{{ $image->id }}">
                    <img src="{{ $image->src }}" width="200" height="200" />
                    <div>
                        <span>{{ $image->name }}</span>
                        <span>{{ $image->description }}</span>
                    </div>
                </a>
            </li>
            @endforeach

        </ul>
        <!--thumbnail images END-->
    </div>
</div>

<script>
    $(function () {
        $('#myTab a:first').tab('show')
    })
</script>
<!--TABS END-->