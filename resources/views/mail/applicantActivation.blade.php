<p style="margin-bottom: 10px">Hello <strong>{{ $applicant_name }}</strong></p>
<p style="margin-bottom: 10px">Please click the Activate button to verify your email and activate your applicant account.</p>
<p style="margin-bottom: 10px">Your applicant account password is <b>{{ $password }}</b> </p>
<a href='{{ route('accountActivation', $user_id) }}'
style="text-decoration: none;
 border-radius:4px;
 padding: 10px 20px;
 cursor: pointer;
 background-color:yellow;
 color:black;
 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
 ">Activate</a>
<p style="margin-top: 30px; color:red">(Please disregard this email address if have any concern contact PSAU)</p>
