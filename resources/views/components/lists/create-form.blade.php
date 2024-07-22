<div>
    <form action="{{ url('/') }}" method="post">
        @csrf
        <label for="title">Title</label>
        <input id="title" name="title" type="text">
        <button type="submit">Add</button>
    </form>
</div>
