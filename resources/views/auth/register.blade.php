{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="username" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required />
            </div>

            <!-- Confirm Password -->
            {{-- <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div> --}}

            {{-- <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>  --}}


<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="mt-4">
                <x-label for="firstname" :value="__('Fistname')" />
                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstName')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="lastname" :value="__('Lastname')" />
                <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastName')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="mt-4">
                <x-label for="username" :value="__('Username')" />
                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('userName')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="niv_etude" :value="__('niv_etude')" />
                <x-input id="niv_etude" class="block mt-1 w-full" type="text" name="niv_etude" :value="old('niv_etude')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="classe" :value="__('classe')" />
                <x-input id="classe" class="block mt-1 w-full" type="text" name="classe" :value="old('section')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="section" :value="__('Section')" />
                <x-input id="section" class="block mt-1 w-full" type="text" name="section" :value="old('section')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="sexe" :value="__('sexe')" />
                <x-input id="sexe" class="block mt-1 w-full" type="text" name="sexe" :value="old('sexe')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="age" :value="__('age')" />
                <x-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="scolarise" :value="__('scolarise')" />
                <x-input id="scolarise" class="block mt-1 w-full" type="number" name="scolarise" :value="old('scolarise')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="etablissement" :value="__('etablissement')" />
                <x-input id="etablissement" class="block mt-1 w-full" type="text" name="etablissement" :value="old('etablissement')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="emploi_actuel" :value="__('emploi_actuel')" />
                <x-input id="emploi_actuel" class="block mt-1 w-full" type="text" name="emploi_actuel" :value="old('emploi_actuel')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="salarie" :value="__('Salarie')" />
                <x-input id="salarie" class="block mt-1 w-full" type="number" name="salarie" :value="old('salarie')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="specialite" :value="__('Specialite')" />
                <x-input id="specialite" class="block mt-1 w-full" type="text" name="specialite" :value="old('specialite')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="etat" :value="__('etat')" />
                <x-input id="etat" class="block mt-1 w-full" type="text" name="etat" :value="old('etat')" required autofocus />
            </div>
   
            <div class="mt-4">
                <x-label for="emploi_envisage" :value="__('emploi_envisage')" />
                <x-input id="emploi_envisage" class="block mt-1 w-full" type="text" name="emploi_envisage" :value="old('emploi_envisage')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
       
    </x-auth-card>
</x-guest-layout>  
