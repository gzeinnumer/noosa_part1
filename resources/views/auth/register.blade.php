@extends('layouts.auth-master')

@section('content')
    <form method="post" action="/register/perform">
        @csrf
        <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/1280px-Bootstrap_logo.svg.png" alt="" width="72" height="57" />

        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" placeholder="name@example.com" required="required" autofocus />
            <label for="floatingEmail">Email address</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required" autofocus />
            <label for="floatingName">Username</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required" />
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="required" />
            <label for="floatingConfirmPassword">Confirm Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

        @include('auth.partials.copy')
    </form>
@endsection
