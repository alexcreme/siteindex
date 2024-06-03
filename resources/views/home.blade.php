<x-guest-layout>
    <div class="mt-2 gap-y-2 border-t border-gray-200 pt-2 sm:mt-2 sm:pt-2 grid grid-cols-3">
        @foreach($sites as $site)

            <x-site :site="$site" :category="$site->category"/>

        @endforeach
        <!-- More posts... -->
    </div>
</x-guest-layout>
