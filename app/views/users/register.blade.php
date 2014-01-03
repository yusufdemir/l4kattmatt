<div id="fullscreen_bg" class="fullscreen_bg"/>
<div class="containerAuth">

        @if($errors->all())
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    @foreach($errors->all() as $error)
                    {{ $error }}<br>
                    @endforeach
            </div>
        @endif




    @if(!Auth::check())
        {{ Form::open(array('url'=>'users/create', 'class'=>'form-signin')) }}
        <h1 class="form-signin-heading text-muted">Üye Ol</h1>
        {{ Form::text('firstname', null, array('class'=>'form-control first', 'placeholder'=>'Adınız', 'required'=>'', 'autofocus'=>'')) }}
        {{ Form::text('lastname', null, array('class'=>'form-control last', 'placeholder'=>'Soyadınız', 'required'=>'')) }}
        {{ Form::text('email', null, array('class'=>'form-control last', 'placeholder'=>'E-Posta Adresiniz', 'required'=>'')) }}
        {{ Form::password('password', array('class'=>'form-control last', 'placeholder'=>'Şifreniz', 'required'=>'')) }}
        {{ Form::password('password_confirmation', array('class'=>'form-control bottom', 'placeholder'=>'Tekrar Şifreniz', 'required'=>'')) }}
        {{ Form::submit('Üye Ol', array('class'=>'btn btn-lg btn-primary btn-block'))}}
        {{ Form::close() }}
    @else
        <h1 class="form-signin-heading text-muted loginForm-text">Giriş Yapılmış Durumda {{ HTML::link('users/logout', 'Çıkış Yap') }}</h1>

    @endif


</div>
</div>
<div style="clear: both;"></div>