@extends('app\partial\header\header')
@section('title', 'Register')
@extends('app\partial\header\navbar')


<div class="container" style="margin-top: 80px">

    <div class="center">
        <h3 class="center">Register</h3>
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('register')}}">
            @csrf

            <div class="mb-3 row">
                <label for="staticUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-5">
                    <input type="text" name="username" class="form-control" placeholder="Username" id="staticUsername">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-5">
                    <input type="text" name="email" class="form-control" placeholder="Email" id="staticEmail">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control" placeholder="Password" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-5">
                    <input class="btn btn-outline-primary" type="submit" class="form-control" id="submitBtn" value="Register">
                </div>
            </div>

        </form>

    </div>

</div>

@extends('app\partial\footer\footer')