<p style="margin-bottom: 10px">Hi, <strong style="text-transform: uppercase;">{{ $applicant_name }}</strong></p>
<p style="margin-bottom: 10px">Thank you for applying at PSAU!</strong></p>
<p style="margin-bottom: 10px">To complete your account activation, kindly click the activation button provided below to initiate the steps of the process
    ensuring that all necessary information is accurately verified, and make sure to copy or memorize your account password given below.
</p>
<p style="margin-bottom: 30px">Your applicant account password is <b>{{ $password }}</b> </p>
<a href='{{ route('accountActivation', $user_id) }}'
style="text-decoration: none;
margin-top:30px;
 border-radius:4px;
 padding: 10px 20px;
 cursor: pointer;
 background-color: rgb(199, 199, 42);
 color:black;
 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
 ">Activate</a>
<p style="margin-top: 30px; color:red">(Please disregard this email address if have any concern contact PSAU)</p>
