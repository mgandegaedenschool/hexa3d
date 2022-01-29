{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}



@extends('app')

@section('content')
    <header class="upper-container d-flex">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav py-3">
                <div class="col-4 upper-image-container" style="max-width: 140px;">
                    <img src="{{asset('img/spiral_placeholder.png')}}" alt="spirale grise et blanche" class="img-fluid" style="width: 170px; height: 95px;">
                </div>  
                <h6 class="text-uppercase col-8 col-md-2 upper-title my-2">questionnaires d'intérêts professionnels</h6>
            </div>
        </div>
    </header>

        <div class="container mx-auto main-div">
            <div class="icon-container mx-auto">
                <div class="icon-container-size">
                    <i class="far fa-user"></i>
                </div>

            </div>
            {{-- <form class="mb-5 form-connexion"> --}}
                <form  class="mb-5 form-connexion" method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="form-row mb-4">
                    <div class="form-group col-12">
                        <x-label for="login" :value="__('Votre identifiant ou mail')" />
                        <x-input  type="login" class="form-control" id="login" placeholder="Votre identifiant ou mail" :value="old('login')" name="login" required autofocus />
                    </div>
                </div>

                <div class="form-row mb-5">
                    <div class="form-group col-12">
                        <x-label for="password" :value="__('Password')" />
                        <x-input type="password" class="form-control" id="password" placeholder="Votre mot de passe" name="password" required autocomplete="current-password"/>
                    </div>
                </div>  

                <div class="text-center">
                    <input type="submit" value="Connexion" class="btn purple-btn py-2 px-5">

                    <p class="mt-5 forgot-password">Mot de passe oublié? <a class="reset-password-link" href="forgot-password">Réinitialisez-le</a></p>
                </div>

            </form>
        </div>

@endsection