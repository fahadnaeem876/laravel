<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        {{-- Use the ?? operator to provide a default value if 'role' is not set --}}
        <?php $role = $_GET['role'] ?? null; ?>

        <form method="POST" action="{{ route('register', ['role' => $role]) }}">
            @csrf

            <!-- Common Fields -->
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <!-- Fields based on the user's role -->
            @if($role == 0)
               <!-- Additional fields for role 0 -->
               <div class="mt-4">
                <x-label for="user_address" value="{{ __('User Address') }}" />
                <x-input id="user_address" class="block mt-1 w-full" type="text" name="user_address" :value="old('user_address')" required autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone Number') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="gender" value="{{ __('Gender') }}" />
                <select id="gender" name="gender" class="block mt-1 w-full">
                    <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            @elseif($role == 2)
                <!-- Additional fields for role 2 -->
                <div class="mt-4">
                <x-label for="user_address" value="{{ __('user_address') }}" />
                <x-input id="user_address" class="block mt-1 w-full" type="text" name="user_address" :value="old('user_address')" required autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone Number') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="user_experties" value="{{ __('user_experties') }}" />
                <x-input id="user_experties" class="block mt-1 w-full" type="text" name="user_experties" :value="old('user_experties')"  autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="user_qualification" value="{{ __('user_qualification') }}" />
                <x-input id="user_qualification" class="block mt-1 w-full" type="text" name="user_qualification" :value="old('user_qualification')" required autocomplete="username" />
            </div>
            
            <div class="mt-4">
                <x-label for="gender" value="{{ __('Gender') }}" />
                <select id="gender" name="gender" class="block mt-1 w-full">
                    <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="mt-4">
                <x-label for="service" value="{{ __('service') }}" />
                <x-input id="service" class="block mt-1 w-full" type="text" name="service" :value="old('service')" autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-input id="usertype" class="block mt-1 w-full" type="hidden" name="usertype" value="{{ $role; }}" autocomplete="username" />
            </div>
            @endif

<!-- Common Fields (continue) -->
<div class="mt-4">
    <x-label for="password" value="{{ __('Password') }}" />
    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
</div>

<div class="mt-4">
    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
</div>

<!-- Additional fields for all roles -->


<!-- Terms and Privacy Policy (if applicable) -->
@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
    <!-- Add your terms and privacy policy fields here -->
@endif

<!-- Registration Button -->
<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-button class="ms-4">
        {{ __('Register') }}
    </x-button>
</div>
</form>
</x-authentication-card>
</x-guest-layout>