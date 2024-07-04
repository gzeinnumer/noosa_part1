@extends('layouts.auth-master')

@section('content')
    <form method="post" action="/login/perform">
        @csrf
        <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/1280px-Bootstrap_logo.svg.png" alt="" width="72" height="57" />

        <h1 class="h3 mb-3 fw-normal">Login</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required" autofocus />
            <label for="floatingName">Email or Username</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required" />
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

        @include('auth.partials.copy')
    </form>
@endsection
