<x-header />
@vite("resources/css/reset.css")
@vite('resources/css/app.css')
@vite("resources/css/style.css")
@vite("resources/css/burger-nav.css")

<main class="body">

    <h2 class="ttl anton-regular">
        {{ __('Connexion') }}
    </h2>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form">

            <!-- Email Address -->
            <div class="grid-input form-login-mail margtop">
                <x-input-label class="txt dm-mono-regular" for="email" :value="__('E-mail')" />
                <x-text-input id="email" class="input-itm border-input pad-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="grid-input form-login-password">
                <x-input-label class="txt dm-mono-regular" for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="input-itm border-input pad-input" type="password" name="password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

        </div>

        <div class="position form-login-btn">

            <x-primary-button class="btn anton-regular">
                {{ __('Validez') }}
            </x-primary-button>

        </div>

    </form>


</main>