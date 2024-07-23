<x-layout title="All List">
    <a href="{{ route('enter.logout') }}">Logout</a>

    <x-lists.create-form />
    <x-lists.drop-down />

    @foreach ($items as $item)
        <x-lists.listItem :item=$item />
    @endforeach

</x-layout>
