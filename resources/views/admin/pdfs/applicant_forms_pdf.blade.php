<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PSAU | PDF</title>
    <link rel="icon" href="{{ URL::asset('images/PSAU_logo.png') }}" type="image/x-icon" />
    @include('layout.link')
</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="d-flex mt-3">
                <div class="">
                    <img src="{{ asset('images/PSAU_logo.png') }}" alt="" srcset="" class="img-fluid"
                        style="max-height: 130px">
                </div>
                <div class="w-100 d-flex flex-column justify-content-center">
                    <div class="text-uppercase  ms-3 fs-style">pampanga state agricultural university</div>
                    <div class="ms-3 fw-bold ">Office of Student Affairs and Services</div>
                    <hr class="border border-dark border-1 opacity-75 w-100">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            {{-- <div class="grid">
    <div class="title">{{ $headers[0] }}</div>
    <div class="date">{{ $headers[1] }}</div>
</div>
<div class="type">Applicatan type: <strong>{{ $headers[2] }}</strong></div>
<div class="program">Program  selected: <strong>{{ $headers[3] }}</strong></div>
<div class="status">Status: <strong>{{ $headers[4] }}</strong></div> --}}
            <div class="title text-center mb-3">TITLE</div>

            <div class="type">Applicatan type: <strong class="ms-2">TYpe</strong></div>
            <div class="program">Program selected: <strong class="ms-2">PRogram</strong></div>
            <div class="status">Status: <strong class="ms-2">All</strong></div>
            <div class="date">Date:  <strong class="ms-2">12-21-2003</strong></div>

            <div class="container p-0 m-0">
                <table class="table table-column table-bordered table-striped border-dark " id="table">
                    <thead>
                        <tr>
                            <th class="col col-bg">Applicant No.</th>
                            <th class="col col-bg">Email</th>
                            <th class="col col-bg">Name</th>
                            <th class="col col-bg">Courses</th>
                            <th class="col col-bg">Type</th>
                            <th class="col col-bg">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @php
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
                    <td class="fs-6">{{ $data->applicant_no }}</td>
                    <td class="fs-6">{{ $data->email }}</td>
                    <td class="fs-6">{{ $data->name }}</td>
                    <td class="fs-6">{{ $data->title . ' (' . $data->acronym . ')' }}</td>
                    <td class="fs-6">{{ $typeLabels[$data->type] ?? 'Unknown' }}</td>
                    <td class="fs-6">{{ $statusLabels[$data->status] ?? 'Unknown' }}</td>
                </tr>
            @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
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
        font-size: 14px;
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

        .col-bg {
        background-color: #fec541 !important;
        color: black !important;
    }

    .title {
        font-weight: 600;
        font-size: 20px;
    }

    .date,
    .type,
    .program,
    .status {
        font-size: 14px;
    }
</style>
