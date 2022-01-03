<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New User
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 py-3 lg:px-8">
        <div class="right-0">
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
            <form class="mt-8 space-y-6"  action="{{ route('store') }}" method="POST">
                @csrf
                {{--<input type="hidden" name="remember" value="true">--}}
                <div class="rounded-md shadow-sm -space-y-px">
                    <div class=" space-y-2 py-2">
                        <label for="name" class="sr-only">Full Name</label>
                        <input id="full-name" name="name" type="text"  class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Full Name">
                    </div>

                    <div class=" space-y-2 py-2">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
                    </div>

                    <div class=" space-y-2 py-2">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                    </div>

                    <div class=" space-y-2 py-2">
                        <label for="role" class="sr-only">Role</label>
                        <select name="role_id" autocomplete="role" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($roles as $getrole)
                                <option value="{!! $getrole->id !!}">{!! $getrole->name  !!}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class=" space-y-2 py-2">
                        <label for="status" class="sr-only">Status</label>
{{--                        <input id="is_active" name="status" type="number" min="0" max="1" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Status">--}}
                        <select name="status" id="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                <option value="0" >InActive</option>
                                <option value="1" >Active</option>
                        </select>
                    </div>
                </div>

                <div class=" space-y-2 py-2">
{{--                    <button class="rounded-none ...">Register</button>--}}
                    <button  type="submit" class="btn btn-success bg-white text-blue-600 text-sm font-semibold rounded-md px-3 py-2 shadow mt-2 sm:mt-0">Create</button>

                </div>
            </form>
        </div>
    </div>

</x-app-layout>
