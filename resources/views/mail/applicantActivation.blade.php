<p style="margin-bottom: 10px">Hello <strong>{{ $applicant_name }}</strong></p>
<p style="margin-bottom: 10px">Please click the link below to verify your email and activate your applicant account.</p>
<p style="margin-bottom: 10px">Your applicant account password is <b>{{ $password }}</b> </p>
<a href='{{ route('accountActivation', $user_id) }}' style="text-decoration: none">Activate</a>
