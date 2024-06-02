<div class="gap-y-2">
    @foreach($categories as $category)
        <a href="{{ route('category.show', $category) }}">
            <div class="uppercase py-1 text-black dark:text-white font-bold">{{ $category->name }}</div>
        </a>
    @endforeach

</div>
