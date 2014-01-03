

<div id="fullscreen_bg" class="fullscreen_bg"/>
    <div class="containerAuth">
        @if(!Auth::check())
            {{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
            <h1 class="form-signin-heading text-muted">Giriş Yap</h1>
            {{ Form::text('email', null, array('class'=>'form-control first', 'placeholder'=>'E-Posta Adresiniz', 'required'=>'', 'autofocus'=>'')) }}
            {{ Form::password('password', array('class'=>'form-control bottom', 'placeholder'=>'Şifreniz', 'required'=>'')) }}
            {{ Form::submit('Giriş Yap', array('class'=>'btn btn-lg btn-primary btn-block'))}}
            {{ Form::close() }}
        @else
            <h1 class="form-signin-heading text-muted loginForm-text">Giriş Yapılmış Durumda {{ HTML::link('users/logout', 'Çıkış Yap') }}</h1>

        @endif


    </div>
</div>
<div style="clear: both;"></div>