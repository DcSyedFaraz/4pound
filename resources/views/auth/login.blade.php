@extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <div class="login-logo">
            <a href="{{ route('admin.home') }}">
                {{ config('app.name') }}
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">
                  {{ trans('global.login') }} 
                    {{-- {{ __('global.login') }} --}}
            </p>

            @if (session('success'))
                        <div class="mt-3 bg-[#FACE85] border-t-4 border-primary-dark rounded text-teal-900 text-sm shadow-md"
                            role="alert">
                            <div class="py-2">
                                <p class="text-center font-bold">{{ session('success') }}</p>
                            </div>
                        </div>
                    @elseif (session('error'))
                        <div class="mt-3 bg-white border-t-4 border-red-500 rounded  shadow-md" role="alert">
                            <div class="py-2">
                                <p class="text-center text-red-500  font-bold">{{ session('error') }}</p>
                            </div>
                        </div>
                    @endif

            <form id="loginForm" action="{{ route('login') }}" method="POST">
                @csrf

                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" name="email" value="{{ old('email', null) }}">

                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ trans('global.login_password') }}">

                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
            </form>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember" form="loginForm">
                            <label for="remember">{{ trans('global.remember_me') }}</label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <a href="{{route('register')}}" class="btn btn-primary btn-block btn-flat">
                            Register
                        </a>
                    </div>
                    <!-- /.col -->
                </div>
            


            @if(Route::has('password.request'))
                <p class="mb-1">
                    <a href="{{ route('password.request') }}">
                        {{ trans('global.forgot_password') }}
                    </a>
                </p>
            @endif
            <div class="flex w-full space-x-1 mx-auto justify-center">
                        <button type="submit" form="loginForm"
                            class="btn btn-primary btn-block btn-flat">
                            <i class="fa fa-user" ></i>
                            <span>
                                Login
                            </span>
                        </button>

                    </div>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection
