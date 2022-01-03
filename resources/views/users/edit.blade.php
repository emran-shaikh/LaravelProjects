<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit user
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="right-0 py-3">
            <a class="btn btn-primary float-right rounded-full" href="{{ route('users') }}"> Back</a>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

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
                    <div class=" space-y-2 py-2">
                        <label for="name" class="sr-only">Full Name</label>
                        <input id="full-name" name="name" type="text" value="{{$user->name}}"  class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Full Name">
                    </div>

                    <div class=" space-y-2 py-2">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" value="{{$user->email}}" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
                    </div>

                    <div class=" space-y-2 py-2">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" value="{{$user->password}}"autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                    </div>

                    <div class=" space-y-2 py-2">
                        <label for="role" class="sr-only">Role</label>
                        <select name="role_id" id="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                @foreach($roles as $role)
                                <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected="selected"' : '' }}>{{ $role->name }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class=" space-y-2 py-2">
                        <label for="status" class="sr-only">Status</label>
                        <select name="status" id="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                            @foreach($statuses as $key => $value)
                                <option value="{{ $key }}" {{ ( $key == $user->is_active) ? 'selected' : '' }}>
                                    {{ $value }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class=" space-y-2 py-2">
                    <button type="submit" class="btn btn-success bg-white text-blue-600 text-sm font-semibold rounded-md px-3 py-2 shadow mt-2 sm:mt-0">Update</button>

                </div>
            </form>
        </div>
    </div>

</x-app-layout>
