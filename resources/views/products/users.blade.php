<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Users
        </h2>
    </x-slot>

    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">

    <div class="">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="pull-right px-4 sm:-my-px py-3 bg-gray-50 text-right sm:px-6" style="float:right; margin:15px 0;">
                        <a style="background: green" class="btn btn-success inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{route('create')}}"> Add New Product</a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
          <table class="w-full divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col"  style="text-align: left;" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                {{--<th scope="col"  style="text-align: left;" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Title
                </th>--}}
                <th scope="col"  style="text-align: left;" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Status
                </th>
                <th scope="col"  style="text-align: left;" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Role
                </th>
                <th scope="col"  style="text-align: left;" class="relative px-6 py-3">
                  <span class="sr-only">Action</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white w-full divide-gray-200" style="width: 100%;">
              @foreach ($users as $user)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                        {{--<div class="flex-shrink-0 h-10 w-10">
                          <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                        </div>--}}
                        <div class="">
                          <div class="text-sm font-medium text-gray-900">
                            {{ $user->name }}
                          </div>
                          <div class="text-sm text-gray-500">
                            {{ $user->email }}
                          </div>
                        </div>
                      </div>
                    </td>
                    {{--<td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">{{ $user->is_active }}</div>
                    </td>--}}
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        {{ $user->is_active ? 'Active': 'InActive' }}
                      </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ !empty($user->role) ? $user->role->name:'' }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <form action="{{ route('destroy',$user->id) }}" method="POST">

{{--                            <a class="btn btn-info" href="{{ route('show',$user->id) }}">Show</a>--}}


                            <a class="btn btn-primary flex-none uppercase bg-gray-200 text-gray-600 text-xs tracking-wide font-semibold px-2 py-1 rounded-md" href="{{ route('edit',$user->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-primary flex-none uppercase bg-gray-200 text-gray-600 text-xs tracking-wide font-semibold px-2 py-1 rounded-md">Delete</button>
                        </form>
                    </td>
                  </tr>
              @endforeach


              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>
