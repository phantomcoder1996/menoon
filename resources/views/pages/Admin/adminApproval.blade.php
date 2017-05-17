@extends('layouts.adminLayout')

@section('content')
    <div class="page-header iqTestHeader">Users</div>
    <div class="w3-container">
        <ul class="w3-ul w3-border">
            @foreach($users as $user)
                <a href=/approvalAdmin/{{$user->id}}"> <div class="w3-card">
                <li class="panel">
                        <p>First name: {{$user->fname}}</p>
                        <p>Last name: {{$user->lname}}</p>
                        <p>User name: {{$user->username}}</p>
                    </li>
                </div></a>
                @endforeach

        </ul>

    </div>

@endsection