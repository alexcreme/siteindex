<x-guest-layout>


    <div class="px-2 ">
        <div class="max-w-full">
            <h2 class="text-xl  font-bold tracking-tight text-black dark:text-white sm:text-2xl">Lista de site-uri
                adaugate
            </h2>
            <p class="my-2 text-lg leading-8 text-black dark:text-white"> categoria {{ $category->name }}</p>
            <div class="mt-2 gap-y-2 border-t border-gray-200 pt-2 sm:mt-2 sm:pt-2 sm:grid sm:grid-cols-3">
                @foreach($sites as $site)

                    <x-site :site="$site" :category="$site->category"/>

                @endforeach
                <!-- More posts... -->
            </div>
        </div>
    </div>

</x-guest-layout>
