@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registrasi">
      <form action="/register" method="POST">
        @csrf
        <center><img class="mb-4" src="../assets/img/logo.png" alt="" width="72" height="72"></center>
        <h1 class="h3 mb-3 fw-normal">Register</h1>
        <div class="form-floating">
            <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
            <label for="name">Name</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" value="{{ old('username') }}">
            <label for="name">Username</label>
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
          <label for="password">Password</label>
          @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
        <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login Now!</a></small>
      </form>
    </main>
  </div>
</div>
@endsection
