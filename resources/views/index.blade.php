<x-layout title="All List">
    <nav class="border-gray-200 bg-white">
        <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
            <a class="flex items-center space-x-3 rtl:space-x-reverse" href="{{ config('app.url') }}">
                <span class="self-center whitespace-nowrap text-2xl font-semibold">{{ config('app.name') }}</span>
            </a>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium rtl:space-x-reverse md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0">
                    <li>
                        <a class="block rounded px-3 py-2 text-gray-900 hover:bg-gray-100 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700" href="{{ route('enter.logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <x-lists.create-form />

    <x-lists.drop-down />

    @foreach ($items as $item)
        <x-lists.listItem :item=$item />
    @endforeach

</x-layout>
