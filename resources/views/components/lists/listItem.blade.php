<div class="my-2 flex justify-center px-4">
    <div class="flex items-center justify-between gap-10 border-b border-gray-200 py-4">
        <div class="flex-grow">
            <h3 class="{{ $item->status == 'pending' ? 'text-blue-500' : 'text-green-500' }} truncate">{{ $item->title }}</h3>
        </div>
        <form action="{{ route('list.patch', $item->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="edit-btn text-yellow-500 hover:text-yellow-600">
                <button class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-600" type="submit">{{ $item->status == 'pending' ? 'Mark as Done' : 'Mark as Pending' }}</button>
            </div>
        </form>
    </div>
</div>
