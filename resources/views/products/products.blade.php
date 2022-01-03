<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product list view
        </h2>
    </x-slot>
    <style>
        .hide {
            -moz-animation: cssAnimation 0s ease-in 5s forwards;
            /*/ Firefox /*/
            -webkit-animation: cssAnimation 0s ease-in 5s forwards;
            /*/ Safari and Chrome /*/
            -o-animation: cssAnimation 0s ease-in 5s forwards;
            /*/ Opera /*/
            animation: cssAnimation 0s ease-in 5s forwards;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }
        @keyframes cssAnimation {
            to {
                width:0;
                height:0;
                overflow:hidden;
            }
        }
        @-webkit-keyframes cssAnimation {
            to {
                width:0;
                height:0;
                visibility:hidden;
            }
        }

    </style>
    <!-- component -->
@if ($message = Session::get('success'))
    <!-- Success Component -->
        <div  class="hide h-screen absolute top-0 right-0 py-3 z-40 px-3">
            <div class="m-auto">
                <div class="bg-white rounded-lg border-gray-300 border p-3 shadow-lg">
                    <div class="flex flex-row">
                        <div class="px-2">
                            <svg width="24" height="24" viewBox="0 0 1792 1792" fill="#44C997" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
                            </svg>
                        </div>
                        <div class="ml-2 mr-6">
                            <span class="font-semibold">{{ $message }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
        <div class="row  sm:px-6 lg:px-8 lg:px-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="pull-right px-0 sm:-my-px py-3 text-right sm:px-0" style="float:right; margin:15px 0;">
                    <a  class="btn btn-success bg-white text-blue-600 text-sm font-semibold rounded-md px-3 py-2 shadow mt-2 sm:mt-0" href="{{route('products.create')}}"> Add New Product</a>
                </div>
            </div>
        </div>
        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
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
                        <tbody class="bg-white divide-y divide-gray-200" style="width: 100%;">
                        @foreach ($products as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                          <img class="h-10 w-10 rounded-full" src="/image/{{ $product->image }}" alt="">
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
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                        <a class="btn btn-primary flex-none uppercase bg-gray-200 text-gray-600 text-xs tracking-wide font-semibold px-2 py-1 rounded-md" href="{{ route('productdetail',$product->id) }}">View</a>
                                        <a class="btn btn-primary flex-none uppercase bg-gray-200 text-gray-600 text-xs tracking-wide font-semibold px-2 py-1 rounded-md" href="{{ route('products.edit',$product->id) }}" >Edit</a>

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
