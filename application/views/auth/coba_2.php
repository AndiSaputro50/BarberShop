<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTables Styling</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table.dataTable {
            border-collapse: collapse;
            width: 100%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            overflow: hidden;
        }

        table.dataTable thead th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            color: #495057;
            font-weight: bold;
            text-align: left;
        }

        table.dataTable tbody td {
            background-color: #fff;
            color: #495057;
            border-bottom: 1px solid #dee2e6;
        }

        table.dataTable tbody tr:nth-of-type(even) {
            background-color: #f8f9fa;
        }

        table.dataTable tbody tr:hover {
            background-color: #e9ecef;
        }

        table.dataTable.no-footer {
            border-bottom: none;
        }

        div.dataTables_paginate {
            margin-top: 10px;
        }

        div.dataTables_paginate ul.pagination {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin: 0;
            padding: 0;
        }

        div.dataTables_paginate ul.pagination li.page-item {
            list-style: none;
        }

        div.dataTables_paginate ul.pagination li.page-item a.page-link {
            padding: 5px 10px;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            color: #495057;
            transition: all 0.3s ease;
        }

        div.dataTables_paginate ul.pagination li.page-item a.page-link:hover {
            background-color: #f8f9fa;
        }

        div.dataTables_paginate ul.pagination li.page-item.active a.page-link {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }
    </style>
</head>

<body>

    <table id="example" class="display">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <!-- Add more table rows here -->
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                pagingType: 'full_numbers'
            });
        });
    </script>
</body>

</html>
