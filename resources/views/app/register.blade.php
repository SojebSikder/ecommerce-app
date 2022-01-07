@extends('app\partial\header\header')
@section('title', 'Register')
@extends('app\partial\header\navbar')


<div class="container" style="margin-top: 80px">
    
    <div class="center">
        <h3 class="center">Register</h3>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="Username / email" id="staticEmail">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" placeholder="Password" id="inputPassword">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <input class="btn btn-outline-primary" type="submit" class="form-control" id="submitBtn" value="Register">
            </div>
        </div>
    </div>

</div>

@extends('app\partial\footer\footer')