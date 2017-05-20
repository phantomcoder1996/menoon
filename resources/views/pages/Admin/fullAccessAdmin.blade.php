@extends('layouts.adminLayout')


@section('content')

    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    
                </div>
              
                <span class="logout-spn" >
                  <a href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        {{--<nav class="navbar-default navbar-side" role="navigation">--}}
            {{--<div class="sidebar-collapse">--}}
                {{--<ul class="nav" id="main-menu">--}}
                 {{----}}


                    {{--<li class="active-link">--}}
                        {{--<a href="index.html" ><i class="fa fa-desktop "></i>Dashboard </a>--}}
                    {{--</li>--}}
                   {{----}}



                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-qrcode "></i>My Link One</a>--}}
                    {{--</li>--}}


                    {{----}}
                {{--</ul>--}}
                            {{--</div>--}}

        {{--</nav>--}}
        <!-- /. NAV SIDE  -->
        {{--<div id="page-wrapper" >--}}
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome Admin ! </strong> You Have No pending Task For Today.
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="/addFingerPrint" >
 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>Finger prints</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="/createAdminView" >
 <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>Create Admin</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="/approvalAdmin" >
 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>Approve users</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="/acceptInterviewees" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>Event Interviews</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="/CreateEvent" >
 <i class="fa fa-key fa-5x"></i>
                      <h4>create Events </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="/mediauploader" >
 <i class="fa fa-comments-o fa-5x"></i>
                      <h4>Upload media</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div>
                 <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                 
                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="/tags" >
 <i class="fa fa-clipboard fa-5x"></i>
                      <h4>Approve tags</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-gear fa-5x"></i>--}}
                      {{--<h4>Settings</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-wechat fa-5x"></i>--}}
                      {{--<h4>Live Talk</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-bell-o fa-5x"></i>--}}
                      {{--<h4>Notifications </h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-rocket fa-5x"></i>--}}
                      {{--<h4>Launch</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                     {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-user fa-5x"></i>--}}
                      {{--<h4>Register User</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div> --}}
              {{--</div>   --}}
                  {{--<!-- /. ROW  -->    --}}
                 {{--<div class="row text-center pad-top">--}}
                   {{----}}
                 {{----}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-envelope-o fa-5x"></i>--}}
                      {{--<h4>Mail Box</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-lightbulb-o fa-5x"></i>--}}
                      {{--<h4>New Issues</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-users fa-5x"></i>--}}
                      {{--<h4>See Users</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-key fa-5x"></i>--}}
                      {{--<h4>Admin </h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="#" >--}}
 {{--<i class="fa fa-comments-o fa-5x"></i>--}}
                      {{--<h4>Support</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                     {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-circle-o-notch fa-5x"></i>--}}
                      {{--<h4>Check Data</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
              {{--</div>--}}
                 {{--<!-- /. ROW  -->  --}}
                 {{--<div class="row text-center pad-top">--}}
                 {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-rocket fa-5x"></i>--}}
                      {{--<h4>Launch</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                 {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-clipboard fa-5x"></i>--}}
                      {{--<h4>All Docs</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-gear fa-5x"></i>--}}
                      {{--<h4>Settings</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-wechat fa-5x"></i>--}}
                      {{--<h4>Live Talk</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-bell-o fa-5x"></i>--}}
                      {{--<h4>Notifications </h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{----}}
                     {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-user fa-5x"></i>--}}
                      {{--<h4>Register User</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div> --}}
              {{--</div>   --}}
                  {{--<!-- /. ROW  -->  --}}
                {{--<div class="row text-center pad-top">--}}
                   {{----}}
                 {{----}}
                  {{----}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-lightbulb-o fa-5x"></i>--}}
                      {{--<h4>New Issues</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-users fa-5x"></i>--}}
                      {{--<h4>See Users</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-key fa-5x"></i>--}}
                      {{--<h4>Admin </h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                  {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-comments-o fa-5x"></i>--}}
                      {{--<h4>Support</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                     {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-circle-o-notch fa-5x"></i>--}}
                      {{--<h4>Check Data</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
                    {{--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">--}}
                      {{--<div class="div-square">--}}
                           {{--<a href="blank.html" >--}}
 {{--<i class="fa fa-envelope-o fa-5x"></i>--}}
                      {{--<h4>Mail Box</h4>--}}
                      {{--</a>--}}
                      {{--</div>--}}
                     {{----}}
                     {{----}}
                  {{--</div>--}}
              </div>

                  <!-- /. ROW  --> 
    {{--</div>paginner--}}
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >

                </div>
            </div>
        </div>
          



@endsection