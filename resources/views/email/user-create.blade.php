@extends('email.layouts.layout')

@section('content')
<p>Hello!</p>
<p style="font-weight:bold ;font-size:20px">{{ $user->name }}</p>
<p>Greetings From {{ env('APP_NAME', config('app.name')) }}</p>
<p>Your Account has been created successfully the following are your login credentials.</p>

<p style="font-size:25px ;font-bold ;margin-bottom:20px;text-align:center;color:#463033">Account Details</p>
<table align="center">
    <tr>
        <th
            style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50%;color: #463033;font-size: 17px;">
            email</th>
        <td
            style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50%;color: #463033;font-size: 17px;">
            <strong>{{ $user->email }}</strong></td>
    </tr>
    <tr>
        <th
            style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50%;color: #463033;font-size: 17px;">
            password</th>
        <td
            style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50%;color: #463033;font-size: 17px;">
            <strong>{{ $password }}</strong></td>

    </tr>

</table>

<div style="display:flex ; justify-items: center;">
    <div style="margin-left:auto ; margin-right:auto; margin-top:2rem; margin-bottom:2rem"><a href="{{ route('login') }}"  style="border-radius:4px; background-color:#463033 ; padding:8px; margin-top:4px; color:white ; font-size: 20px; font-weight: bold ;">Login</a></div>
</div>

@endsection
