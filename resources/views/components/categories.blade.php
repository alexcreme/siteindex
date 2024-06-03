<div class="max-sm:gap-y-2 max-sm:gap-x-4 max-sm:flex max-sm:overflow-x-auto ">
    @foreach($categories as $category)
        <a href="{{ route('category.show', $category) }}" class="sm:flex group">
            @if($category->icon)
                <x-dynamic-component :component="'far-'.$category->icon"
                                     class=" group-hover:opacity-50 w-10 h-10 sm:w-6 sm:h-6 mt-2 max-sm:mx-auto font-bold text-white sm:mr-4 sm:ml-4"/>
            @endif
            <div
                class="group-hover:opacity-50 uppercase py-1 text-white font-bold text-2xl sm:text-lg justify-start">{{ $category->name }}</div>
        </a>
    @endforeach

</div>
