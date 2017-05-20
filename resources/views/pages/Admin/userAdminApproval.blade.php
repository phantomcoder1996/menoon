@extends('layouts.adminLayout')

@section('content')

    <div class="w3-container">
        <div class="page-header iqTestHeader">User's information</div>
<div class="user_info w3-card-4 w3-border w3-border-grey">
   <h3 class="w3-panel w3-gray" >{{$user[0]->getUname()}}:</h3>

      <h4>First name: {{$user[0]->getFname()}}</h4>
      <h4>Last name: {{$user[0]->getLname()}}</h4>
    <h4>Address: {{$user[0]->getAddress()}}</h4>
    <h4>Emails</h4>
    <ul>
    <?php $em=$user[0]->getEmails(); if(!$em){
        for($i=0;$i<count($em);$i++){?>
    <li>{{$em[$i]}}</li>
    <?php } }else echo "no emails";?>
    </ul>

        <form method="post" action="/approvalAdmin">
            {{csrf_field()}}
            <input type="hidden" value="{{$user[0]->getId()}}" name="id" />
            <h4>Birth Certificate number:</h4>
            @if($user[0]->getBirthCertificateNo())
            <label><input type="checkbox" value="1" name="birth_certificate_no"/>{{$user[0]->getBirthCertificateNo()}}</label>
            @else
                <label>Not submitted</label>
            @endif
            <p class="container_p"><img src="/storage/{{$user[0]->getBirthCertificatePhotocopy()}}" alt="No birth certificate uploaded" class="img-thumbnail user_images"/></p>

            <h4>Passport number:</h4>
            @if($user[0]-> getPassportNo())
            <label><input type="checkbox" value="1" name="passport_no"/>{{$user[0]-> getPassportNo()}}</label>
            @else
                <label>Not submitted</label>
            @endif
            <p class="container_p"><img src="/storage/{{$user[0]->getPassportPhotocopy()}}" alt="No passport uploaded" class="img-thumbnail user_images" /></p>

            <h4>National id:</h4>
            @if($user[0]-> getNationalIdNo())
            <label><input type="checkbox" value="1" name="national_id_no"/>{{$user[0]-> getNationalIdNo()}}</label>
            @else
                <label>Not submitted</label>
            @endif
            <p class="container_p"><img src="{{$user[0]->getNationalIdPhotocopy()}}" alt="No id uploaded" class="img-thumbnail user_images"/></p>
            <button type="submit" class="btn btn-default" style="margin-left:10%; margin-top:10%;">Accept</button>
            <a href="/deleteUser/{{$user[0]->getId()}}"  class="btn btn-default " style="margin-right:10%;margin-top:10%;">Reject</a>
        </form>




</div>
    </div>

@endsection