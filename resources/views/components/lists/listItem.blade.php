<div>
    <h3>{{ $item->title }}</h3>
    <p>{{ $item->status }}</p>
    <form action="{{ route('list.patch', $item->id) }}" method="post">
        @csrf
        @method('patch')
        <button type="submit">{{ $item->status == 'pending' ? 'Mark as Done' : 'Mark as Pending' }}</button>
    </form>
</div>
