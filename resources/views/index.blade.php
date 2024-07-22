<x-layout title="All List">
    <h1>List index page</h1>

    <x-lists.create-form />
    <x-lists.drop-down />

    @foreach ($items as $item)
        <x-lists.listItem :item=$item />
    @endforeach

</x-layout>
