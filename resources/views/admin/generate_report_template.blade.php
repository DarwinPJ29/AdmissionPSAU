<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PSAU | PDF</title>
    <link rel="icon" href="{{ URL::asset('images/PSAU_logo.png') }}" type="image/x-icon" />
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12pt;
            /* Adjust the font size */
        }

        .container-fluid {
            margin-top: 20px;
            padding: 0 20px 0 30px;
        }

        .col-bg {
            background-color: #fec541 !important;
            color: black !important;
        }

        @media only screen and (max-width: 431px) {
            .f-title {
                font-size: 14px !important;
            }

            .f-tag {
                font-size: 12px !important;
            }

            .f-text {
                font-size: 10px;
            }
        }

        @media only screen and (max-width: 780px) {
            .f-title {
                font-size: 18px;
            }

            .f-tag {
                font-size: 16px !important;
            }

            .f-text {
                font-size: 14px;
            }
        }

        @media only screen and (min-width: 781px) {
            .f-title {
                font-size: 20px;
            }

            .f-tag {
                font-size: 18px !important;
            }

            .f-text {
                font-size: 16px;
            }

        }
    </style>
</head>

<body>

    <div class="container-fluid" style="padding: 0 20px 0 30px">

        <table style="width: 100%; border: none; padding: 0;">
            <tr>
                <td style="text-align: end; vertical-align: middle; width:10%; padding: 0;">
                    <!-- Image (Logo) -->
                    <img src="{{ public_path('/images/PSAU_logo.png') }}" alt="PSAU Logo" style="max-height: 110px;">
                </td>
                <td style="text-align: start; vertical-align: start; padding: 0; ">
                    <!-- University Name -->
                    <div class="f-title" style="text-transform: uppercase;  font-weight: bold; margin-left:10px">
                        Pampanga State Agricultural University
                    </div>
                    <!-- Office Name -->
                    <div class="f-tag" style="font-weight: 700; margin-left:10px">
                        Office of Student Affairs and Services
                    </div>
                    <!-- Border Line -->
                    <div class="border-line"
                        style="display: inline-block; border-bottom: 1px solid black; width: 100%;">
                    </div>
                </td>
            </tr>
        </table>

        <div class="container mt-5">


            {{-- data --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 50px">
                <thead>
                    <th>
                        <tr>
                            <td class="f-tag" style=" padding: 2px; text-transform:uppercase: font-weight:600"
                                width="100%">
                                {{-- {{ $headers[0] }} --}}
                            </td>
                        </tr>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td class="f-text" style="padding: 2px;">
                            {{-- Applicatan type: <strong class="ms-2">{{ $headers[1] }}</strong> --}}

                        </td>
                    </tr>
                    <tr>
                        <td class="f-text" style="padding: 2px;">
                            {{-- Program selected: <strong class="ms-2">{{ $headers[2] }}</strong> --}}
                        </td>
                    </tr>
                    <tr>
                        <td class="f-text" style="padding: 2px;">
                            {{-- Status: <strong class="ms-2">{{ $headers[3] }}</strong> --}}
                        </td>
                    </tr>
                    <tr>
                        <td class="f-text" style="padding: 2px;">
                            {{-- Date:  <strong class="ms-2">{{ $headers[4] }}</strong> --}}
                        </td>
                    </tr>

                </tbody>
            </table>
            {{-- header 5 , School year to example 2024-2025
            header 6, semester to example 1st Semester --}}
            {{-- table  --}}
            <table style="width: 100%; border-collapse: collapse; gap:0; margin-top: 10px">
                <thead>
                    <tr>
                        <td class="f-text" style=" padding: 2px; border: 1px solid black; font-weight:600"
                            width="15%">
                            Applicant No.
                        </td>
                        <td class="f-text" style=" padding: 2px; border: 1px solid black; font-weight:600">
                            Email
                        </td>
                        <td class="f-text" style=" padding: 2px; border: 1px solid black; font-weight:600">
                            Name
                        </td>
                        <td class="f-text" style=" padding: 2px; border: 1px solid black; font-weight:600">
                            Courses
                        </td>
                        <td class="f-text" style=" padding: 2px; border: 1px solid black; font-weight:600">
                            Typre
                        </td>
                        <td class="f-text" style=" padding: 2px; border: 1px solid black; font-weight:600">
                            Status
                        </td>
                    </tr>

                </thead>
                <tbody>
                    @php
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
                            <td class="f-text" style=" padding: 2px; border: 1px solid black; fonst-size:12px">
                                {{ $data->applicant_no }}
                            </td>
                            <td class="f-text" style=" padding: 2px; border: 1px solid black; fonst-size:12px">
                                {{ $data->email }}
                            </td>
                            <td class="f-text" style=" padding: 2px; border: 1px solid black; fonst-size:12px">
                                {{ $data->name }}
                            </td>
                            <td class="f-text" style=" padding: 2px; border: 1px solid black; fonst-size:12px">
                                {{ $data->title . ' (' . $data->acronym . ')' }}
                            </td>
                            <td class="f-text" style=" padding: 2px; border: 1px solid black; fonst-size:12px">
                                {{ $typeLabels[$data->type] ?? 'Unknown' }}
                            </td>
                            <td class="f-text" style=" padding: 2px; border: 1px solid black; fonst-size:12px">
                                {{ $statusLabels[$data->status] ?? 'Unknown' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
