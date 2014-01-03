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
            <li>
                <div class="type"><span class="glyphicon glyphicon-picture"></span></div>
                <a href="#">
                    <img src="http://lorempixel.com/200/200/sports/1/" />
                    <div><span>Bahaddin :)</span></div>
                </a>
            </li>
            <li>
                <div class="type"><span class="glyphicon glyphicon-camera"></span></div>
                <a href="#">
                    <img src="http://lorempixel.com/200/200/sports/1/" />
                    <div><span>Test 2</span></div>
                </a>
            </li>
            <li>
                <div class="type"><span class="glyphicon glyphicon-film"></span></div>
                <a href="#">
                    <img src="http://lorempixel.com/200/200/sports/1/" />
                    <div><span>Test3</span></div>
                </a>
            </li>
            <li>
                <div class="type"><span class="glyphicon glyphicon-picture"></span></div>
                <a href="#">
                    <img src="http://lorempixel.com/200/200/sports/1/" />
                    <div><span>Bahaddin :)</span></div>
                </a>
            </li>
            <li>
                <div class="type"><span class="glyphicon glyphicon-camera"></span></div>
                <a href="#">
                    <img src="http://lorempixel.com/200/200/sports/1/" />
                    <div><span>Test 2</span></div>
                </a>
            </li>
            <li>
                <div class="type"><span class="glyphicon glyphicon-film"></span></div>
                <a href="#">
                    <img src="http://lorempixel.com/200/200/sports/1/" />
                    <div><span>Test3</span></div>
                </a>
            </li>
            <li>
                <div class="type"><span class="glyphicon glyphicon-picture"></span></div>
                <a href="#">
                    <img src="http://lorempixel.com/200/200/sports/1/" />
                    <div><span>Bahaddin :)</span></div>
                </a>
            </li>
            <li>
                <div class="type"><span class="glyphicon glyphicon-camera"></span></div>
                <a href="#">
                    <img src="http://lorempixel.com/200/200/sports/1/" />
                    <div><span>Test 2</span></div>
                </a>
            </li>
            <li>
                <div class="type"><span class="glyphicon glyphicon-film"></span></div>
                <a href="#">
                    <img src="http://lorempixel.com/200/200/sports/1/" />
                    <div><span>Test3</span></div>
                </a>
            </li>
        </ul>
        <!--thumbnail images END-->

    </div>
    <!--NEWS END-->
    <div class="tab-pane" id="images">2</div>
    <div class="tab-pane" id="gifs">3</div>
    <div class="tab-pane" id="videos">4</div>
    <div class="tab-pane" id="vine">vine</div>
</div>

<script>
    $(function () {
        $('#myTab a:first').tab('show')
    })
</script>
<!--TABS END-->