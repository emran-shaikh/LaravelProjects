<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    <div class="row">
        <div class="max-w-7xl mx-auto sm:px-6 py-3 lg:px-8">
            <div class="right-0">
                <a class="btn btn-primary float-right rounded-full" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
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
    <div>
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">

                <form action="{{ route('products.update',$products->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="py-3">
                                <label for="product name" class="block text-sm font-medium text-gray-700">
                                    Product Name
                                </label>
                                <div class="mt-1">
                                    <label for="product-name" class="sr-only">Product Name</label>
                                    <input id="product-name" name="name" value="{{$products->name}}" type="text" value=""  class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Product Name">
                                </div>
                            </div>
                            <div>
                                <label for="product-price" class="block text-sm font-medium text-gray-700">
                                    Product Price
                                </label>
                                <div class="mt-1">
                                    <label for="product-price" class="sr-only">Product Price</label>
                                    <input id="product-price" name="price" type="number" value="{{$products->price}}"  class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Product Price">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Photo
                                </label>
                                <div class="mt-1 flex items-center">
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                    <img src="/image/{{ $products->image }}" width="300px">
                                </div>
                            </div>

                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">
                                    Product Description
                                </label>
                                <div class="mt-1">
                                    <textarea id="description" name="detail" rows="3"
                                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                              placeholder="Your Description goes here">{{ $products->detail }}</textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    Brief description for your product.
                                </p>
                            </div>

                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
