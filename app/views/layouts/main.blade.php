<!DOCTYPE html>
<html lang="en">
 	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Larave 4 KattMatt</title>
        <!--GET CSS-->
    	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
        {{ HTML::style('packages/bxslider/jquery.bxslider.css') }}
    	{{ HTML::style('css/main.css') }}
        <!--GET CSS END-->

        <!--GET JS-->
        <script language="JavaScript" type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        {{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
        {{ HTML::script('packages/bxslider/jquery.bxslider.js') }}
        <!--GET JS END-->

  	</head>

  	<body>

        <div class="fixTopBarWrapper">
            <div class="fixTopBar">
                <!--LOGO START-->
                <div class="logo">KATT MATT</div>
                <!--LOGO END-->
                <!--Pages-->
                <ul class="topMenu">
                    <li>{{ HTML::link(URL::route('index'), 'Anasayfa') }}</li>
                    <li>{{ HTML::link(URL::route('index'), 'Resimler') }}</li>
                    <li>{{ HTML::link(URL::route('index'), 'Hareketli Resimler') }}</li>
                    <li>{{ HTML::link(URL::route('index'), 'Videolar') }}</li>
                    <li>{{ HTML::link(URL::route('index'), 'Vine') }}</li>
                </ul>
                <!--Pages END-->

                <!--Auth MENU-->
                <ul class="topMenu" style="float: right;">
                    <li>{{ HTML::link(URL::route('index'), 'Yükle') }}</li>
                    @if(!Auth::check())
                    <li>{{ HTML::link('users/register', 'Kayıt Ol') }}</li>
                    <li>{{ HTML::link('users/login', 'Giriş Yap') }}</li>
                    @else
                    <li>{{ HTML::link('users/logout', 'Çıkış Yap') }}</li>
                    @endif
                </ul>
                <!--AUTH MENU END-->
            </div>
        </div>
        <!--Fix Menu END-->

        <!--LAST İTEMS START-->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.slider4').bxSlider({
                    slideWidth: 800,
                    minSlides: 5,
                    maxSlides: 5,
                    moveSlides: 5,
                    slideMargin: 10
                });
            });
        </script>
        <div class="last-itemsWrappers">
            <div class="last-items">
                <div class="slider4" style="height: 150px;">
                    @foreach ($news as $new)
                        <div class="slide">
                            <a href="/show/{{ $new->id }}/{{$new->slugName()}}">
                                @if($new->type==3)
                                <img src="{{ $new->thumbnail_src }}" width="200" height="120">
                                @else
                                <img src="{{ $new->src }}" width="200" height="120">
                                @endif

                            </a>
                        </div>
                    @endforeach
                    <!-- Last Modified :D
                    <div class="slide"><a href="#"><img src="http://placehold.it/200x135&text=FooBar1"></a></div>
                    <div class="slide"><a href="#"><img src="http://placehold.it/200x135&text=FooBar2"></a></div>
                    <div class="slide"><img src="http://placehold.it/200x135&text=FooBar3"></div>
                    <div class="slide"><img src="http://placehold.it/200x135&text=FooBar4"></div>
                    <div class="slide"><img src="http://placehold.it/200x135&text=FooBar5"></div>
                    <div class="slide"><img src="http://placehold.it/200x135&text=FooBar6"></div>
                    <div class="slide"><img src="http://placehold.it/200x135&text=FooBar7"></div>
                    <div class="slide"><img src="http://placehold.it/200x135&text=FooBar8"></div>
                    <div class="slide"><img src="http://placehold.it/200x135&text=FooBar9"></div>
                    <div class="slide"><img src="http://placehold.it/200x135&text=FooBar10"></div>
                    -->
                </div>
            </div>
        </div>

	    <div class="container topPadding">
            <div class="content">
                <div class="ads-content">
                    <img src="http://placehold.it/700x90&text=BannerTop">
                </div>
                @if(Session::has('errorMessage'))
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <span class="glyphicon glyphicon-minus-sign"></span>
                        {{ Session::get('errorMessage') }}
                    </div>
                @endif
                @if(Session::has('successMessage'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span class="glyphicon glyphicon-bullhorn"></span>
                    {{ Session::get('successMessage') }}
                </div>
                @endif

                {{ $content }}

                <div class="ads-content">
                    <img src="http://placehold.it/700x90&text=BannerBottom">
                </div>
            </div>
            <!--Content END-->
	    	<div class="sidebar">
                <input class="form-control btn btn-success" type="button" value="Sende Gönder !"/>
	    	</div>
            <!--Sidebar END-->
	    </div>
        <!--Container END-->
        <div style="clear: both"></div>
        <div class="footerWrappers">
            <div class="footer">
                ©2014 Tüm Hakları Saklıdır
            </div>
        </div>
        <!--SCRIPTS-->
        <script type="text/javascript">
            $(function() {
                $('.tip').tooltip();
            });
        </script>
        <!--SCRIPTS-->
  	</body>
</html>