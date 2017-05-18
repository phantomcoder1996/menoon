@extends("layouts.admin")

@section("viewApp")


    <div class="container">
<div style="display:none" id="app">
    <h3>Applicants Information</h3><hr>
    <table class="table table-hover" >

        <thead>
        <tr>
            <th>User Name</th>
            <th>Application Date</th>
            <th>IQ Score</th>
            <th>Money Paid</th>


        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>

            <td>{{$user->username}}</td>
            <td>{{$user->application_date}}</td>
            <td>{{$user->iq_test_score}}</td>
            <td>{{$user->money_paid}}</td>

        </tr>
        @endforeach

        </tbody>
    </table>
</div>



    </div>

    @endsection