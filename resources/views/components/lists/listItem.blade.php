<div class="my-2 flex justify-center px-4">
    <div class="flex items-center justify-between gap-10 border-b border-gray-200 py-4">
        <div class="text-wrap flex items-center md:max-w-[800px]">
            <h3 class="{{ $item->status == 'pending' ? 'text-blue-500' : 'text-green-500' }}">{{ $item->title }}</h3>
        </div>
        <form action="{{ route('list.patch', $item->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="edit-btn text-yellow-500 hover:text-yellow-600">
                <button type="submit">{{ $item->status == 'pending' ? 'Mark as Done' : 'Mark as Pending' }}</button>
            </div>
        </form>
    </div>
</div>
