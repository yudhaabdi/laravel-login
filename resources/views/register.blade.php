@extends('template/layout')

@section('title', 'login')

@section('container')
    
    <form class="form-signin" method="POST" action="{{ route('register') }}">
        {{csrf_field()}}
        <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>

        <label for="inputname"  class="sr-only">Nama</label>
        <input type="tex" name="name" id="inputName" class="form-control" placeholder="Please insert your name" value="{{ old('name') }}" required autofocus>
        
        <label for="inputEmail"  class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="{{ old('email') }}" required>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <label for="inputPassword" class="sr-only">Password Confirmation</label>
        <input type="password" name="password_confirmation" id="inputPassword" class="form-control" placeholder="Password Confirmation" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>
    
@endsection
