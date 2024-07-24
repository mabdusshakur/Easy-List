<div class="flex justify-center">
    <select class="mt-2 rounded-md border bg-transparent px-20 py-2" id="status" name="status" onchange="updateStatus()">
        <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>all</option>
        <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>completed</option>
        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>pending</option>
    </select>
</div>

<script>
    function updateStatus() {
        const status = document.getElementById('status');
        window.location = '/?status=' + status.value;
    }
</script>
