@extends("layouts.viewApp")

@section("viewApp")


    <div class="container">
<div id="app">
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
   @for($i=0;$i<sizeof($users);$i++)
        <tr>

            <td>{{$userName[$i]}}</td>
            <td>{{$users[$i]->application_date}}</td>
            <td>{{$users[$i]->iq_test_score}}</td>
            <td>{{$users[$i]->money_paid}}</td>

        </tr>

      @endfor

        </tbody>
    </table>
    <br>
    <a   href="{{route("pages.viewEvents")}}" class="btn" style="background-color:#2C3E50;color:white;" id="viewApp">Choose another event</a>

</div>



    </div>

    @endsection