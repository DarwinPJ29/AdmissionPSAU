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
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/PSAU_logo.png'))) }}"
                        alt="PSAU Logo" style="height: 100px;">
                </td>
                <td style="text-align: start; vertical-align: start; padding: 0; ">
                    <!-- University Name -->
                    <div class="f-title" style="text-transform: uppercase;  font-weight: bold; margin-left:10px; padding-top: 20px">
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
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 30px">
                <thead>
                    <th>
                        <tr>
                            <td class="f-tag"
                                style=" padding: 2px; text-transform:uppercase: font-weight:600; text-align:center"
                                width="100%">
                                {{ $headers[0] }}
                            </td>
                        </tr>
                    </th>
                </thead>
            </table>
            <table style="padding-top: 20px">
                <tr style="width: 100vw">
                    <td style="padding: 2px; width: 50vw;">
                        Applicant type: <strong class="ms-2">
                            {{ $headers[2] }}
                        </strong>
                    </td>
                    <td style="padding: 2px; width: 50vw;">
                        Program selected: <strong class="ms-2">
                            {{ $headers[3] }}
                        </strong>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 2px; width: 50vw;">
                        Status: <strong class="ms-2">
                            {{ $headers[4] }}
                        </strong>
                    </td>
                    <td style="padding: 2px; width: 50vw;">
                        Generated Date: <strong class="ms-2">
                            {{ $headers[1] }}
                        </strong>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 2px; width: 50vw;">
                        School Year: <strong class="ms-2">
                            {{ $headers[5] }}
                        </strong>
                    </td>
                    <td style="padding: 2px; width: 50vw;">
                        Semester: <strong class="ms-2">
                            {{ $headers[6] }}
                        </strong>
                    </td>

                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse; gap:0; margin-top: 10px">
                <thead>
                    <tr>
                        <td style=" padding: 2px; border: 1px solid black; font-weight:600">
                            Applicant No.
                        </td>
                        <td style=" padding: 2px; border: 1px solid black; font-weight:600">
                            Email
                        </td>
                        <td style=" padding: 2px; border: 1px solid black; font-weight:600">
                            Name
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
                            <td style=" padding: 2px; border: 1px solid black; fonst-size:12px">
                                {{ $data->applicant_no }}
                            </td>
                            <td style=" padding: 2px; border: 1px solid black; fonst-size:12px">
                                {{ $data->email }}
                            </td>
                            <td style=" padding: 2px; border: 1px solid black; fonst-size:12px">
                                {{ $data->name }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
