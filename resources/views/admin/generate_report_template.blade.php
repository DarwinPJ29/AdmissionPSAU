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
</style>
<h5>{{ $headers[0] }}</h5> //title nung report
<h5>{{ $headers[1] }}</h5> // date kung kelan nag generate
<h5>{{ $headers[2] }}</h5>// anung applicant type ung ni select
<h5>{{ $headers[3] }}</h5> // anung program ung ni select
<h5>{{ $headers[4] }}</h5> // anung status ni select

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
