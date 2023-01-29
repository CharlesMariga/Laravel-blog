@props(['categories'])

<x-dropdown>
    <x-slot name='trigger'>
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full flex lg:inline-flex lg:w-32 text-left">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>
    <x-dropdown-item href="/" active="{{ !request('category') }}">All</x-dropdown-item>
    @foreach ($categories as $category)
        <x-dropdown-item href="/?category={{ $category->slug }}"
            active="{{ request('category') === $category->slug ? true : false }}">
            {{ ucwords($category->name) }}</x-dropdown-item>
    @endforeach
</x-dropdown>
