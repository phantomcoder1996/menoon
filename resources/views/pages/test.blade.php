

@extends('layouts.master')
<!--All our stylesheets are added here-->
@section('stylesheet')

{!!Html::style('css/parsley.css')!!}

@endsection

<!--  ====================================================================== -->

@section('content')


<div class="container-fluid">

@include('pages.feedback')

@include('pages.newsletter')

@include('pages.more_fb')

@include('pages.media')

</div>


@include('pages.messages')



@endsection

<!-- All scripts shall go here -->
@section('script')


{!!Html::script('js/home.js') !!}
{!!Html::script('js/parsley.min.js') !!}
{!!Html::script('js/media.js') !!}





@endsection


<!--  ====================================================================== -->


