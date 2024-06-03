<article {{ $attributes->class(['flex w-80 flex-col items-start justify-between border-2 border-gray-700 rounded-md my-2 max-sm:w-full hover:opacity-80']) }}>

    <div class="group relative">
        <img src="{{ $site->getFirstMediaUrl('webpage', 'featured') }}" class="relative">
        <a href="#"
           class="absolute bottom-2 left-2 rounded-sm bg-gray-50 p-1 font-bold uppercase text-gray-600 hover:bg-gray-100 text-xs">{{ $category->name }}</a>


    </div>

    <div class="flex-col items-center gap-x-4 text-xs p-2">
        <h3 class=" text-lg font-semibold leading-6 text-gray-200 group-hover:text-gray-600">
            <a href="#">
                {{ $site->name }}
            </a>
        </h3>
        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-200">{{ $site->description }}</p>

    </div>


</article>
