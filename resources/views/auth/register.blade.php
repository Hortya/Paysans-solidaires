<x-header />
@vite("resources/css/reset.css")
@vite('resources/css/app.css')
@vite("resources/css/style.css")
@vite("resources/css/burger-nav.css")

<main class="body">

    <h2 class="ttl anton-regular">
        {{ __('Inscription') }}
    </h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form">

            <!-- Firstname -->
            <div class="input-txt form-name">
                <x-input-label class="txt dm-mono-regular firstname" for="firstname" :value="__('Prénom')" />
                <x-text-input id="firstname" class="input-itm-name input-firstname border-input pad-input" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            
                <x-input-label class="txt dm-mono-regular lastname" for="lastname" :value="__('Nom')" />
                <x-text-input id="lastname" class="input-itm-name input-lastname border-input pad-input" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="input-txt form-mail">
                <x-input-label class="txt dm-mono-regular" for="email" :value="__('E-mail')" /><br>
                <x-text-input id="email" class="input-itm border-input pad-input" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="grid-input form-password">
                <x-input-label class="txt dm-mono-regular" for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="input-itm border-input pad-input" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="grid-input form-confirm-password">
                <x-input-label class="txt dm-mono-regular" for="password_confirmation" :value="__('Confirmation mot de passe')" />

                <x-text-input id="password_confirmation" class="input-itm border-input pad-input" type="password" name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="form-read">
                <input class="checkbox" type="checkbox" name="read" value="read">
                <label class="txt dm-mono-regular" for="read">J'ai lu et j'accepte les conditions générales.</label>
            </div>

        </div>

        <div class="position form-btn">
            <x-primary-button class="btn anton-regular">
                {{ __('Valider') }}
            </x-primary-button>
        </div>

    </form>


</main>