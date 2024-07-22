<div>
    <form action="{{ route('list.post') }}" method="post">
        @csrf
        <label for="title">Title</label>
        <input id="title" name="title" type="text">
        <button type="submit">Add</button>
    </form>
</div>
