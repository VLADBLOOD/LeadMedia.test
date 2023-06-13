@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-4 mx-auto">
            <form class="form-signin text-center" action="{{ route('login') }}" method="POST">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal">Вход в аккаунт</h1>

                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror
                <label for="inputEmail" class="sr-only">Email address</label>
                <input name="email" type="email" id="inputEmail" class="form-control mb-2" placeholder="Email address" required
                       autofocus>

                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
                <label for="inputPassword" class="sr-only">Password</label>
                <input name="password"  type="password" id="inputPassword" class="form-control mb-2" placeholder="Password" required>

                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    <span>Войти</span>
                </button>

                <p class="mt-2 mb-3 text-muted"><a href="{{ route('registration') }}">Зарегистрироваться</a></p>
            </form>
        </div>
    </div>

@endsection
