<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <h2 class="mt-6 text-2xl font-semibold text-center text-gray-700">
            Choose your role
        </h2>

        <div class="flex justify-center mt-6">
            <a href="{{ route('register', ['role' => 0]) }}" class="text-center px-4 py-2 bg-blue-500  rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
            <x-button>User</x-button>
            </a>

            <span class="mx-2 text-gray-500">or</span>

            <a href="{{ route('register', ['role' => 2]) }}" class="text-center px-4 py-2 bg-green-500 rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-green-300">
                <x-button>Lawyer</x-button>
            </a>
        </div>
    </x-authentication-card>
</x-guest-layout>