<x-guest-layout>


    <div class="px-6 lg:px-8">
        <div class=" max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-100 sm:text-4xl">Lista de site-uri adaugate
            </h2>
            <p class="mt-2 text-lg leading-8 text-gray-100"> categoria {{ $category->name }}</p>
            <div class="mt-2 space-y-6 border-t border-gray-200 pt-2 sm:mt-2 sm:pt-2">
                @foreach($sites as $site)

                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-16"
                                  class="text-gray-500">{{ $site->created_at->diffForHumans() }}</time>
                            <a href="#"
                               class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $category->name }}</a>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-100 group-hover:text-gray-600">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    {{ $site->name }}
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ $site->description }}</p>
                        </div>

                    </article>

                @endforeach
                <!-- More posts... -->
            </div>
        </div>
    </div>

</x-guest-layout>
