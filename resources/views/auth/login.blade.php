@extends('layouts.form')

@section('titulo', "FacilitAluno | Login")

@section('form')
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="form-icon">
                <img src="{{asset('assets/img/logo.svg')}}" class="icon icon-user" style="width: 55%; margin-bottom:15%" />
            </div>
            <p id="slogan">FacilitAluno</p>
            <div class="form-group">
                <input id="email" type="email" class="form-control item" name="email" value="{{ isset($usuario) ? $usuario->email : old('email')}}" placeholder="Email" required autocomplete="email">
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control item" name="password" placeholder="Senha" required autocomplete="new-password">
            </div>
            
            <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Entrar</button>
            </div>

            @if (Route::has('password.request'))
                <a class="btn btn-link btn-senha" href="{{ route('password.request') }}">
                    {{ __('Esqueci minha senha') }}
                </a>
            @endif
        </form>
@endsection
