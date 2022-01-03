<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Profile') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <!-- eslint-disable -->
        <div class="bg-white my-12 pb-6 max-w-xl justify-center items-center overflow-hidden md:max-w-sm rounded-lg shadow-sm mx-auto">
            <div class="relative h-40">
                <img class="absolute h-full w-full object-cover" src="https://images.unsplash.com/photo-1448932133140-b4045783ed9e?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80">
            </div>
            <div class="relative shadow mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4">
                <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=80">
            </div>
            <div class="mt-16">
                <h1 class="text-lg text-center font-semibold">
                    {{$user->name}}
                </h1>
                <p class="text-sm text-gray-600 text-center">
                    Email: {{$user->email}}
                </p>
                <p class="text-sm text-gray-600 text-center">
                    Status: {{$user->is_active ? 'Active': 'Inactive'}}
                </p>
                <p class="text-sm text-gray-600 text-center">
                    @if ($user->role_id === 1)
                        Role: Super Admin
                    @endif
                    @if ($user->role_id === 2)
                        Role: Admin
                    @endif
                    @if ($user->role_id === 3)
                        Role:User
                    @endif
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
