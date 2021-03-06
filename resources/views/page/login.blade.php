@extends('layouts.login')
@section('title', 'Login Page')
@section('css')
{!! HTML::style('assets/css/login/form-elements.css') !!}
{!! HTML::style('assets/css/login/style.css') !!}
@endsection
@section('content')

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Bootstrap</strong> Login Form</h1>
                    <div class="description">
                        <p>
                            This is a free responsive login form made with Bootstrap. 
                            Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">

                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>
                            <p>Enter your username and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" method="post" class="login-form">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="uname" placeholder="Username..." class="form-username form-control" id="uname">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
                            </div>
                            <button type="submit" class="btn">Sign in!</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
{{--         <div class="row">
            <div class="col-sm-6 col-sm-offset-3 social-login">
                <h3>...or login with:</h3>
                <div class="social-login-buttons">
                    <a class="btn btn-link-2" href="#">
                        <i class="fa fa-facebook"></i> Facebook
                    </a>
                    <a class="btn btn-link-2" href="#">
                        <i class="fa fa-twitter"></i> Twitter
                    </a>
                    <a class="btn btn-link-2" href="#">
                        <i class="fa fa-google-plus"></i> Google Plus
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
</div>

</div>

@stop
@section('js')
{!! HTML::script('assets/js/jquery-backstretch/jquery.backstretch.min.js') !!}
{!! HTML::script('assets/js/login/scripts.js') !!}
<!--[if lt IE 10]>
{!! HTML::script('assets/js/login/placeholder.js') !!}
<![endif]-->
@endsection