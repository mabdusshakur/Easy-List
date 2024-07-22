<x-enter-layout>
    <form action="{{ route('enter.post') }}" method="post">
        @csrf
        <label for="user_name">Enter User Name </label>
        <input id="user_name" name="user_name" type="string" value="{{ old('user_name') }}" placeholder="Example : panda" @required(true) />
        <label for="pin_code">Enter Your Pin</label>
        <input id="pin_code" name="pin_code" type="number" value="{{ old('pin_code') }}" placeholder="Example : 4455" @required(true) />
        <button type="submit"> Enter </button>
    </form>
</x-enter-layout>
