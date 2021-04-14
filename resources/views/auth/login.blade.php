@extends('layouts.app')

@section('content')
    <div class="row justify-content-center h-screen">
            <div class="bg-blue w-full p-8 flex justify-center font-sans">
                <div class="rounded bg-grey-light w-full p-2">
                    <div class="flex justify-between py-1">
                        <h3 class="text-md">{{ __('Login') }}</h3>
                    </div>

                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="block text-grey-darker text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="password" class="block text-grey-darker text-sm font-bold mb-2">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>


                            <div class="flex items-center justify-between">
                                    <button type="submit" class="bg-blue hover:bg-blue-dark text-black font-bold py-2 px-4 rounded">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
    </div>

@endsection
