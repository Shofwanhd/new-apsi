<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- NIK -->
        <div>
            <x-input-label for="nik" :value="__('Nik')" />
            <x-text-input id="nik" class="block mt-1 w-full" type="number" name="nik" :value="old('nik')"
                 autofocus autocomplete="nik" />
            <x-input-error :messages="$errors->get('nik')" class="mt-2" />
        </div>

        <!-- NIK -->
        <div>
            <x-input-label for="umur" :value="__('Umur')" />
            <x-text-input id="umur" class="block mt-1 mb-1 w-full" type="number" name="umur" :value="old('umur')"
                 autofocus autocomplete="umur" />
            <x-input-error :messages="$errors->get('umur')" class="mt-2" />
        </div>

        <!-- domisili -->
        <div>
            <x-input-label for="domisili" :value="__('Domisili')" />
            {{-- <x-text-input id="domisili" class="block mt-1 w-full" type="text" name="domisili" :value="old('domisili')"
                required autofocus autocomplete="domisili" /> --}}
            <select id="domisili" name="domisili"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <option value="Jakarta Selatan">Jakarta Selatan</option>
                <option value="Jakarta Barat">Jakarta Barat</option>
                <option value="Jakarta Pusat">Jakarta Pusat</option>
                <option value="Jakarta Timur">Jakarta Timur</option>
                <option value="Jakarta Utara">Jakarta Utara</option>
            </select>
            <x-input-error :messages="$errors->get('domisili')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
