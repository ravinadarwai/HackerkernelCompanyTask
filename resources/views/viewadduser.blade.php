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
        <h2 class="mb-4"  style="color: #448fef;text-transform: uppercase;">User Details</h2>

        <div class="table-responsive">
            <table class="table   table-striped" id="data-table">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->mobile }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4" style=" display:flex;">
            {{ $users->links() }}
        </div>

        <button id="export-button"  class="float-end btn btn-success mt-1 mx-1">Export Table Data</button>
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











