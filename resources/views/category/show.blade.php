<x-guest-layout>


    <div class="px-2 lg:px-8">
        <div class="max-w-full">
            <h2 class="text-xl text-center font-bold tracking-tight text-gray-100 sm:text-2xl">Lista de site-uri
                adaugate
            </h2>
            <p class="my-2 text-lg leading-8 text-gray-100"> categoria {{ $category->name }}</p>
            <div class="mt-2 space-y-6 border-t border-gray-200 pt-2 sm:mt-2 sm:pt-2">
                @foreach($sites as $site)

                    <x-site :site="$site" :category="$category"/>

                @endforeach
                <!-- More posts... -->
            </div>
        </div>
    </div>

</x-guest-layout>
