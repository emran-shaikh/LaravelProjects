<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product list view
        </h2>
    </x-slot>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">

        <div class="">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right px-4 sm:-my-px py-3 text-right sm:px-6" style="float:right; margin:15px 0;">
                                <a  class="btn btn-success bg-white text-blue-600 text-sm font-semibold rounded-md px-3 py-2 shadow mt-2 sm:mt-0" href="{{route('create')}}"> Add New Product</a>
                            </div>
                        </div>
                        {{--<div class="px-4 sm:-my-px py-3 bg-gray-50 text-right sm:px-6" style="float:right; margin:15px 0;">
                            <button style="background-color: #000;" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Update
                            </button>
                        </div>--}}

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
                                Image
                            </th>
                            <th scope="col"  style="text-align: left;" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            {{--<th scope="col"  style="text-align: left;" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Title
                            </th>--}}
                            <th scope="col"  style="text-align: left;" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price
                            </th>
                            <th scope="col"  style="text-align: left;" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Detail
                            </th>
                            <th scope="col"  style="text-align: left;" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white w-full divide-gray-200" style="width: 100%;">
                        @foreach ($products as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                          <img class="h-10 w-10 rounded-full" src="{{ $product->image }}" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $product->name }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="">
                                            <div class="text-sm text-gray-500">
                                                ${{ $product->price }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                {{--<td class="px-6 py-4 whitespace-nowrap">
                                  <div class="text-sm text-gray-900">{{ $user->is_active }}</div>
                                </td>--}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="">
                                            <div class="text-sm text-gray-500">
{{--                                                {{ $product->detail }}--}}
                                                {{ Str::limit($product->detail, 20) }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                    <form action="{{ route('destroy',$product->id) }}" method="POST">

                                        {{--                            <a class="btn btn-info" href="{{ route('show',$user->id) }}">Show</a>--}}

                                        <a class="btn btn-primary flex-none uppercase bg-gray-200 text-gray-600 text-xs tracking-wide font-semibold px-2 py-1 rounded-md" href="{{ route('edit',$product->id) }}" >Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger flex-none uppercase bg-gray-200 text-gray-600 text-xs tracking-wide font-semibold px-2 py-1 rounded-md">Delete</button>
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
