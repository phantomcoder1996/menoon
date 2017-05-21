@extends("layouts.home")

@section('about')
    <!-- about-->
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"  style="color:#2C3E50">We've got what you need!</h2>
                    <hr align="center"  style="color:#2C3E50;max-width:50px;margin-left:44%">
                    <p class="text-faded" style="color:#2C3E50">MeNooN LLC specializes in software development and advanced computer science training
                        courses. Our training services are located throughout the Middle East and North Africa. We
                        encourage young people to take competitive programming courses to boost creativity and to
                        strengthen their candidacy for employment abroad.</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button" style="background-color:#2C3E50;color:#fff">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- about-->
    @endsection

@section("header")

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">MeNooN LLC</h1>
                <hr>
                <p>Whatever your problems are, we believe we can solve most management problems with software</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>
    @endsection
@section("contact")
    <div id="container" class="form">
        <br><br>
        <h1 >Get In Touch </h1>
        <form action="{{url("contact")}}" method="POST">
            {{csrf_field()}}
            <input type="name" name="name" placeholder="Name" required="required">
            <input type="email" name="email" placeholder="E-mail" required="required" >
            <textarea  name="message" placeholder="Message" required="required" rows="9" cols="25" style="margin-right:20px;"></textarea>

            <input type="submit" name="submit" value="Submit" class="btn "  >

        </form>
    </div>
@endsection
@section("media")
    @include("pages.media")
    @endsection
@section("subscribe")
    @include("pages.newsletter")
    @endsection
@section("feedback")
    @include('pages.feedback')
@endsection
@section("morefeedback")
    @include('pages.more_fb')
    @endsection
@section("messages")
    @include("pages.messages")
    @endsection