@extends ('layouts.user.default')

@section('content')


    <div class="login-wrap mt-1">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Connexion</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>
            <div class="login-form">


                <div class="sign-in-htm">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="group">
                            <label for="email*" class="label">{{ __('E-Mail ') }}</label>
                            <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>



                        <div class="group">
                            <label for="password" class="label col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                            <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" data-type="password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __(' Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <button type="submit" class="button">
                                {{ __('Connexion') }}
                            </button>



                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié ?') }}
                                </a>
                            @endif
                        </div>

                    </form>

                </div>
                <div class="sign-up-htm">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="group">
                            <label for="nom" class="label">nom</label>
                            <input id="nom" type="text" class="input form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{ old('nom') }}" required autofocus class="input">

                            @if ($errors->has('nom'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="group">
                            <label for="prenom" class="label">prenom</label>
                            <input id="prenom" type="text" class="input form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required>

                            @if ($errors->has('prenom'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="group">
                            <label for="email" class="label">Email</label>
                            <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="group">
                            <label for="numero" class="label">numero</label>
                            <input id="numero" type="text" class="input form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}" name="numero" value="{{ old('numero') }}" required>
                            @if ($errors->has('numero'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="group">
                            <label for="date_naissance" class="label">Date naissance</label>
                            <input id="date_naissance" type="date" class="input form-control{{ $errors->has('date_naissance') ? ' is-invalid' : '' }}" name="date_naissance" value="{{ old('date_naissance') }}" required>

                            @if ($errors->has('date_naissance'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_naissance') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="group">
                            <label for="sexe" class="label">sexe</label>
                            <input id="sexe" type="sexe" class="input form-control{{ $errors->has('sexe') ? ' is-invalid' : '' }}" name="sexe" value="{{ old('sexe') }}" required>

                            @if ($errors->has('sexe'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sexe') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="group">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="group">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="group">
                            <input type="submit" class="button" value="Connexion">
                        </div>
                        <div class="hr"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


{{--

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
