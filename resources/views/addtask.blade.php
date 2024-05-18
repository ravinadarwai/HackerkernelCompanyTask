@include('home.header')

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container mt-5">
            <h2 style="color: #448fef text-transform: uppercase;">Add Task</h2>
            <form method="POST" action="{{ route('storetask') }}">
    @csrf
    <div class="form-group">
        <label for="user_id">Select User:</label>
        <select class="form-control" name="user_id" id="user_id">
            <option value="" disabled selected>Select User</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="task_detail">Task Detail:</label>
        <input type="text" class="form-control" name="task_detail">
    </div>

    <div class="form-group">
        <label for="task_type">Task Type:</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="task_type" value="Pending" id="pending">
            <label class="form-check-label" for="pending">Pending</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="task_type" value="Done" id="done">
            <label class="form-check-label" for="done">Done</label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Add Task</button>
</form>

        </div>
    </div>
</div>

<script>
    // Get all checkboxes with the same name
    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="task_type"]');
    
    // Add a click event listener to each checkbox
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('click', () => {
            // Uncheck all checkboxes except the one that was clicked
            checkboxes.forEach(cb => {
                if (cb !== checkbox) {
                    cb.checked = false;
                }
            });
        });
    });
</script>
