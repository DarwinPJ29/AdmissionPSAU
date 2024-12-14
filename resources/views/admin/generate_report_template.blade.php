<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 12pt;
        /* Adjust the font size */
    }

    .container-fluid {
        margin-top: 20px;
    }

    .table {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table th,
    .table td {
        border: 1px solid #ddd;
        padding: 3px;
        text-align: left;
        font-size: 8pt;
        /* Adjust font size of table cells */
    }

    .table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .table td {
        word-wrap: break-word;
        /* Ensure long words break within cells */
    }

    .col {
        background-color: #fec541;
        color: black
    }

    .title {
        font-weight: 600;
        font-size: 20px;
    }

    .grid {
        display: grid;
        gap: 10px;
        grid-template-columns: 2fr 1fr;
    }
    .date, .type, .program, .status{
        font-size: 12px;
    }
</style>
<div class="grid">
    <div class="title">{{ $headers[0] }}</div>
    <div class="date">{{ $headers[1] }}</div>
</div>
<div class="type">Applicatan type: <strong>{{ $headers[2] }}</strong></div>
<div class="program">Program  selected: <strong>{{ $headers[3] }}</strong></div>
<div class="status">Status: <strong>{{ $headers[4] }}</strong></div>

<div class="container-fluid">
    <table class="table table-bordered table-striped" id="table">
        <thead>
            <tr>
                <th class="col">Applicant No.</th>
                <th class="col">Email</th>
                <th class="col">Name</th>
                <th class="col">Courses</th>
                <th class="col">Type</th>
                <th class="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                // Define mappings for `type` and `status` to make the code cleaner and reusable
                $typeLabels = [
                    1 => 'Doctoral',
                    2 => 'Masteral',
                    3 => 'Second Courser',
                    4 => 'Transferee',
                    5 => 'Freshmen',
                ];

                $statusLabels = [
                    3 => 'Submitted',
                    7 => 'Admitted',
                    8 => 'Denied',
                ];
            @endphp

            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->applicant_no }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->title . ' (' . $data->acronym . ')' }}</td>
                    <td>{{ $typeLabels[$data->type] ?? 'Unknown' }}</td>
                    <td>{{ $statusLabels[$data->status] ?? 'Unknown' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
