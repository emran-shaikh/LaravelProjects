<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hello {{$user->name}} Please update your profile.
        </h2>
    </x-slot>
    <div class="w-full space-y-8 pt-6 px-4 sm:px-6 lg:px-8">
        <div class="right-0">
            <a class="btn btn-primary float-right rounded-full" href="{{ route('users') }}"> Back</a>
        </div>
    </div>
    <div class="min-w-full flex items-center justify-center py-12 pt-6 px-4 sm:px-6 lg:px-8">

        <div class="w-full space-y-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="mt-8 space-y-6"  action="{{ route('update', $user->id) }}" method="POST">
                @method('PATCH')
                @csrf
                {{--<input type="hidden" name="remember" value="true">--}}
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="name" class="sr-only">Full Name</label>
                        <input id="full-name" name="name" type="text" value="{{$user->name}}"  class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Full Name">
                    </div>

                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" value="{{$user->email}}" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
                    </div>

                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" value="{{$user->password}}"autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                    </div>

                    <div>
                        <label for="role" class="sr-only">Role</label>
                        <select name="role_id" id="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                @foreach($roles as $role)
{{--                                <option value="{{ $role->id }}">{{ $role->name }}</option>--}}

                                <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected="selected"' : '' }}>{{ $role->name }}</option>
                                @endforeach
                                {{--<option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">User</option>--}}
                        </select>
                    </div>

                    <div>
                        <label for="status" class="sr-only">Status</label>
                        <input id="is_active" name="status" type="number" value="{{$user->is_active}}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Status">
                    </div>
                </div>

                <div class=" space-y-8 py-12">
{{--                    <button class="rounded-none ...">Register</button>--}}
                    <button type="submit" class="btn btn-primary inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"  style="background: green">Update</button>

                </div>
            </form>
        </div>
    </div>

</x-app-layout>
