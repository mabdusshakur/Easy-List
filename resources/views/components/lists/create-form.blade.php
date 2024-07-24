<div class="my-2 flex justify-center">
    <form action="{{ route('list.post') }}" method="post">
        @csrf
        <input class="rounded-md border px-2 py-2" id="title" name="title" type="text" placeholder="Write it down!" required>
        <button class="rounded-md bg-blue-100 p-2 uppercase" type="submit">Add</button>
    </form>
</div>
