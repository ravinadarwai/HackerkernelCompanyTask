@include('home.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/xlsx@0.18.4/dist/xlsx.full.min.js"></script>
      <style>
       
      </style>
</head>
<body>
    
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
    <div class="container mt-5">
        <h2 class="mb-4"  style="color: #448fef;text-transform: uppercase;">All user details with their task</h2>

        <div class="table-responsive">
        <table class="table table-striped" id="data-table">
                <thead class="thead-dark">
                    <tr>
                        <th>sno</th>
                        <th>User Name</th>
                        <th>Task Detail</th>
                        <th>Task Type</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $sn = 1;
                @endphp
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $sn++ }}</td>
                        <td>{{ $task->user->name }}</td>
                        <td>{{ $task->task_detail }}</td>
                        <td>{{ $task->task_type }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4" style=" display:flex;">
            {{ $tasks->links() }}
        </div>

        <button id="export-button" class="float-end btn btn-success mt-1 mx-1">Export Table Data</button>
    </div>

<script>
    const table = document.getElementById("data-table");
    const exportButton = document.getElementById("export-button");

    exportButton.addEventListener("click", function () {
        const tableData = [];
        const rows = table.querySelectorAll("tbody tr");

        const labels = Array.from(table.querySelectorAll("thead th")).map(th => th.textContent);
        tableData.push(labels);

        rows.forEach(row => {
            const rowData = [];
            const cells = row.querySelectorAll("td");

            cells.forEach(cell => {
                rowData.push(cell.textContent);
            });
            tableData.push(rowData);
        });

        const wb = XLSX.utils.book_new();
        const ws = XLSX.utils.aoa_to_sheet(tableData);

        XLSX.utils.book_append_sheet(wb, ws, "UserList");

        XLSX.writeFile(wb, "user_list.xlsx");
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
</body>
</html>











