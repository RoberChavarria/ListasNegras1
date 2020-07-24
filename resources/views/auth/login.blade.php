@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Iniciar Sesion') }}</div>

                <div class="card-body">

                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Un nuevo correo se ha enviado al correo relacionado con este RFC') }}
                            </div>
                        @endif

                        @error('alreadyConfirmed')
                            <div class="alert alert-danger text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror

                        <div class="text-center alert alert-warning" id="globalAlert">
                            {{ __('Antes de proceder, si usted es un usuario nuevo verifique su correo para Iniciar sesion') }}
                        </div>
                    <br/>

                    <form method="POST" action="{{ route('login') }}" id="verifyForm">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('RFC') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesion') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <br/>
                    <br/>



                        <div class="text-center">
                            {{ __('Si no recibiste el correo de confirmacion') }},
                            <form class="d-inline" >
                                <button onclick="resendEmail();" class="btn btn-link p-0 m-0 align-baseline" id="resendButton">{{ __('click aqui para solicitar otro') }}</button>.
                            </form>
                        </div>
                </div>
            </div>
        </div>
        <script>
            function resendEmail() {
               
                var resendButton = document.getElementById('resendButton');
                resendButton.disabled = true;

                var form = document.getElementById("verifyForm");
                Array.from(form.elements).forEach(formElement => formElement.disabled = true);

                var globalAlert = document.getElementById('globalAlert');
                var message = globalAlert.innerHTML;
                globalAlert.innerHTML = "{{ trans('black-bits/laravel-cognito-auth::validation.resending') }}";

                var xhr = new XMLHttpRequest();
                var csrf = document.getElementsByName("_token")[0].value;
                var email = document.getElementById('name').value;
                var params = 'name=' + email;

                xhr.open('POST', "{{ route('cognito.verification-resend') }}");
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.setRequestHeader('X-CSRF-TOKEN', csrf);

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        // document.body.innerHTML = xhr.responseText;
                        Array.from(form.elements).forEach(formElement => formElement.disabled = false);
                        globalAlert.innerHTML = "{{ trans('black-bits/laravel-cognito-auth::validation.resend') }}";
                        resendButton.disabled = false;
                    }
                    else if (xhr.status !== 200) {
                        if(xhr.status === 400) {
                            var prased = JSON.parse(xhr.responseText)
                            // console.log(1,prased);
                            alert(prased.error)
                        }
                        else if(xhr.status === 422) {
                            // console.log(prased);
                            alert("El campo de RFC es necesario para mandar el nuevo link al correo relacionado con esta cuenta.")
                        } else {
                            // console.log(prased);
                            alert('Request failed.  Returned status of ' + xhr.status);
                        }

                        Array.from(form.elements).forEach(formElement => formElement.disabled = false);
                        resendButton.disabled = false;
                        globalAlert.innerHTML = message;
                    }
                };
                // console.log(12);
                xhr.send(params);
            }
        </script>
    </div>
    
</div>
@endsection

