
@extends('email.layouts.layout')

@section('content')
    
    @if ($flag == true)
        <p>
            Hello!
        </p>
        <p style="font-weight:bold ;font-size:20px">{{ $user->name }}</p>
        <p>Greetings From {{ config('app.name') }}</p>
        <p>Your Account has been created successfully the following are your login credentials.</p>

        <p style="font-size:25px ;font-bold ;margin-bottom:20px;text-align:center;color:black">Account Details</p>
        <table align="center">
            <tr>
                <th
                    style="border: 2px solid #463033;text-align: left;padding: 8px;width: 14rem;color: #463033;font-size: 17px;">
                    email</th>
                <td
                    style="border: 2px solid #463033;text-align: left;padding: 8px;width: 14rem;color: #463033;font-size: 17px;">
                    <strong>{{ $user->email }}</strong>
                </td>
            </tr>
            <tr>
                <th
                    style="border: 2px solid #463033;text-align: left;padding: 8px;width: 14rem;color: #463033;font-size: 17px;">
                    password</th>
                <td
                    style="border: 2px solid #463033;text-align: left;padding: 8px;width: 14rem;color: #463033;font-size: 17px;">
                    <strong>{{ $password }}</strong>
                </td>

            </tr>

        </table>


        <div style="display:flex ; justify-items: center;">
            <div style="margin-left:auto ; margin-right:auto;  margin-top:2rem ; margin-bottom:2rem"><a href="{{ route('login') }}"  style="border-radius:4px; background-color:#463033 ; padding:8px; margin-top:4px; color:white ; font-size: 20px; font-weight: bold ;">Login</a></div>
        </div>

    @endif

    <p>Following are the details recieved for the order uploaded by you</p>

    <p style="font-size:25px ;font-bold ;margin-bottom:20px;text-align:center; color:black">Order Details</p>
    <table align="center">

        <tr>
            <th style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                Name</th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong>{{ $user->name }}</strong>
            </td>
        </tr>
        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                Email</th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong>{{ $user->email }}</strong>
            </td>
        </tr>
        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                Phone</th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong>{{ $data['phone'] }}</strong>
            </td>
        </tr>
        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                Country</th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong>{{ $data['country'] }}</strong>
            </td>
        </tr>
        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                Paper Topic</th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong>{{ $data['paper_topic'] ?? '-' }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                Paper Type</th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong>{{ $pt  }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                Academic Level </th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong> {{ $data['academic_level'] ?? '-' }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                No Of Pages </th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong> {{ $data['number_of_pages'] ?? '-' }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                Reference Style </th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong> {{ $rs  }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                References </th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong> {{ $data['style'] ?? '-' }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                Deadline </th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong> {{ $data['deadline'] ?? '-' }}</strong>
            </td>

        </tr>

        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                Detail</th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong>{{ $data['detail'] ?? '-' }}</strong>
            </td>

        </tr>

        <tr>
            <th
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                Total Cost</th>
            <td
                style="border: 2px solid #463033;text-align: left;padding: 8px;width: 50% ;color: #463033;font-size: 17px;">
                <strong> {{ addCurrency($invoice->amount) }}</strong>
            </td>
        </tr>



    </table>

            <div style="display:flex ; justify-items: center;">
                <div style="margin-left:auto ; margin-right:auto; margin-top:2rem ; margin-bottom:2rem"><a href="https://tawk.to/chat/5f1dc03d5e51983a11f5d499/default"  style="border-radius:4px; background-color:#463033 ; padding:8px; margin-top:4px; color:white ; font-size: 20px; font-weight: bold ;">Live Chat</a></div>
            </div>

    <p>Kindly make the payment for the confirmation of your order</p>
    {{-- <button><a style="color: white" href="{{ route('invoice', ['reference' => $invoice->ref_no]) }}">Pay
            {{ addCurrency($invoice->amount) }}</a></button> --}}

            <div style="display:flex ; justify-items: center;">
                <div style="margin-left:auto ; margin-right:auto; margin-top:2rem ; margin-bottom:2rem;"><a href="{{ route('invoice', ['reference' => $invoice->ref_no]) }}"  style="border-radius:4px; background-color:#463033 ; padding:8px; margin-top:4px; color:white ; font-size: 20px; font-weight: bold ;">Pay {{ addCurrency($invoice->amount) }}</a></div>
            </div>
    <p>if you want to share more information or files related to your order , you can simply email us at
        {{ config('app.app_email') }}</p>
    <p>For any further queries, feel free to contact us via email or Online Chat,</p>
    <p>Best Regards</p>
    <p>Customer Support,</p>
    <p>{{ config('app.name') }}</p>
@endsection




