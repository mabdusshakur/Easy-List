<x-enter-layout>
    <form action="{{ route('enter.post') }}" method="post">
        @csrf
        <div class="min-w-80">
            @include('components.partials._alerts')
            <div>
                <label class="mb-2 block text-sm font-medium text-gray-900" for="user_name">Enter User Name</label>
                <input class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" id="user_name" name="user_name" type="text" value="{{ old('user_name') }}" placeholder="panda" required />
            </div>
            <div class="mb-6">
                <label class="mb-2 block text-sm font-medium text-gray-900" for="pin_code">Enter Your Pin</label>
                <input class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" id="pin_code" name="pin_code" type="password" value="{{ old('pin_code') }}" placeholder="••••" required />
            </div>
            <button class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto" type="submit">Enter</button>
        </div>
    </form>

</x-enter-layout>
