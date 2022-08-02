<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>

<h1>{{ $details['title'] }}</h1>
@if($details['flag'] == '0')
    <a href="{{url('change_status/'.$details['id'])}}">{{ $details['body'] }}</a>
@else
    <a href="{{route('user.reset_password_form',$details['id'])}}">{{ $details['body'] }}</a>
@endif
<p>Thank you</p>
</body>
</html>
