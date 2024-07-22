<div>
    <h3>{{ $item->title }}</h3>
    <p>{{ $item->status }}</p>
    <form action="{{ url('/') }}" method="post">
        @csrf
        @method('patch')
        <button type="submit" value="completed">Completed</button>
    </form>
</div>
