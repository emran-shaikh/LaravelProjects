{{--@include('head');--}}
@include('layouts.head')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg">
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
            <div class="mt-10 sm:mt-0">
                <header class="p-6 bg-gray-50 border-b border-gray-200" style="margin-bottom:15px;">
                    <h2 class="font-semibold text-gray-800">{{$products->name}}</h2>
                </header>
                <div class="w-full">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <main class="my-8">
                            <div class="container mx-auto px-6">
                                <div class="md:flex md:items-center">
                                    <div class="w-full h-64 md:w-1/2 lg:h-96">
                                        <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="/image/{{$products->image}}" alt="{{$products->name}}">
                                    </div>
                                    <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
                                        <h3 class="text-gray-700 uppercase text-lg">{{$products->name}}</h3>
                                        <span class="text-gray-500 mt-3">{{$products->price}}$</span>
                                        <hr class="my-3">
                                        <div class="mt-2">
                                            <span class="text-gray-500 mt-3">{{$products->detail}}</span><br><br>
                                            <span class="text-gray-500 mt-3">Updated At: {{$products->created_at}}</span><br>
                                            <span class="text-gray-500 mt-3">Created At: {{$products->updated_at}}</span>
                                        </div>
                                        <div class="mt-3">
                                            <label class="text-gray-700 text-sm" for="count">Color:</label>
                                            <div class="flex items-center mt-1">
                                                <button class="h-5 w-5 rounded-full bg-blue-600 border-2 border-blue-200 mr-2 focus:outline-none"></button>
                                                <button class="h-5 w-5 rounded-full bg-teal-600 mr-2 focus:outline-none"></button>
                                                <button class="h-5 w-5 rounded-full bg-pink-600 mr-2 focus:outline-none"></button>
                                            </div>
                                        </div>
                                    </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--@include('footer');--}}
