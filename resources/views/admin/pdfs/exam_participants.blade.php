<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    @include('layout.link')
</head>
<body>

<div class="container-fluid">
    <div class="container ">
        <div class="d-flex mt-3">
            <div class="">
                <img src="{{ asset('images/PSAU_logo.png') }}" alt="" srcset="" class="img-fluid"
                    style="max-height: 130px">
            </div>
            <div class="w-100 d-flex flex-column justify-content-center">
                <div class="text-uppercase fs-3 ms-3 fs-style">pampanga state agricultural university</div>
                <div class="ms-3">To be a Responsive Premier Agricultural State University for Humane and Blissful Development</div>
                <hr class="border border-dark border-1 opacity-75 w-100">
            </div>
        </div>

        <div class="mt-4 text-center fw-bold fs-4 ">
            <u>Exam Participants</u>
        </div>


        <div class="mt-4">
            <table class="table table-bordered border-dark">
                <thead class="main-bg">
                    <tr>
                        <th class="col-2">Applicant No.</th>
                        <th class="col-3 ">Name</th>
                        <th class="col-3">Email</th>
                        <th class="col-2">Date & Time</th>
                        <th class="col-2">Room</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Smpl-0001
                        </td>
                        <td class="text-uppercase">Lorem, ipsum dolor.</td>
                        <td>Lorem, ipsum dolor.</td>
                        <td>sample</td>
                        <td>201</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
