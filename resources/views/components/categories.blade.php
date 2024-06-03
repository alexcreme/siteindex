<div class="max-sm:gap-y-2 max-sm:gap-x-4 max-sm:flex flex-col max-sm:overflow-x-auto">
    @foreach($categories as $category)
        <a href="{{ route('category.show', $category) }}" class="sm:flex">
            @if($category->icon)
                <x-dynamic-component :component="'far-'.$category->icon"
                                     class="w-10 h-10 sm:w-6 sm:h-6 mt-2 max-sm:mx-auto font-bold text-cyan-400 sm:mr-4"/>
            @endif
            <div
                class="uppercase py-1 text-cyan-400 dark:text-cyan-400 font-bold text-2xl sm:text-lg justify-start">{{ $category->name }}</div>
        </a>
    @endforeach

</div>
