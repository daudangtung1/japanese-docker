@foreach($banners as $b)
    <div class="w-full bg-cover bg-center"
         style="height:32rem; background-image: url({{asset('/storage/'.$b->image)}});">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl">{{$b->caption}}</h1>
                <button
                    class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    Start project
                </button>
            </div>
        </div>
    </div>
@endforeach
