<div>
    <select id="status" name="status" onchange="updateStatus()">
        <option>Filter</option>
        <option value="all">all</option>
        <option value="completed">completed</option>
        <option value="pending">pending</option>
    </select>
</div>

<script>
    function updateStatus() {
        const status = document.getElementById('status');
        window.location = '/?status=' + status.value;
    }
</script>
