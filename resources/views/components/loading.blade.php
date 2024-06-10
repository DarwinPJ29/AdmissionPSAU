<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loading</title>
</head>

<body>
    <style>
        @keyframes loader_5191 {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .square {
            background: black;
            width: 10px;
            height: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -5px;
            margin-left: -5px;
        }

        #sq1 {
            margin-top: -25px;
            margin-left: -25px;
            animation: loader_5191 675ms ease-in-out 0s infinite alternate;
        }

        #sq2 {
            margin-top: -25px;
            animation: loader_5191 675ms ease-in-out 75ms infinite alternate;
        }

        #sq3 {
            margin-top: -25px;
            margin-left: 15px;
            animation: loader_5191 675ms ease-in-out 150ms infinite;
        }

        #sq4 {
            margin-left: -25px;
            animation: loader_5191 675ms ease-in-out 225ms infinite;
        }

        #sq5 {
            animation: loader_5191 675ms ease-in-out 300ms infinite;
        }

        #sq6 {
            margin-left: 15px;
            animation: loader_5191 675ms ease-in-out 375ms infinite;
        }

        #sq7 {
            margin-top: 15px;
            margin-left: -25px;
            animation: loader_5191 675ms ease-in-out 450ms infinite;
        }

        #sq8 {
            margin-top: 15px;
            animation: loader_5191 675ms ease-in-out 525ms infinite;
        }

        #sq9 {
            margin-top: 15px;
            margin-left: 15px;
            animation: loader_5191 675ms ease-in-out 600ms infinite;
        }
    </style>

    <div class="loader">
        <div class="square" id="sq1"></div>
        <div class="square" id="sq2"></div>
        <div class="square" id="sq3"></div>
        <div class="square" id="sq4"></div>
        <div class="square" id="sq5"></div>
        <div class="square" id="sq6"></div>
        <div class="square" id="sq7"></div>
        <div class="square" id="sq8"></div>
        <div class="square" id="sq9"></div>
    </div>

    <!-- Your JavaScript code for redirecting after a certain duration -->
    <script>
        setTimeout(function() {
            window.location.href = "{{ route('redirect') }}";
        }, 1500); // Set the duration in milliseconds
    </script>
</body>

</html>
