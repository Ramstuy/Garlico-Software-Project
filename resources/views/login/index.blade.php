@extends('layouts.form')

@section('container')
<div class="row justify-content-center w-100 align-items-center">
  <div class="col-lg-5">
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

    @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main class="mb-4 w-100 m-auto mt-5">
      <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="mb-4 form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-4 form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        
        <button class="btn btn-dark w-100 py-2" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Not registered? <a href="/register">Register now!</a></small>
    </main>
  </div>
  <div class="col-lg-1 position-absolute bottom-0 end-0 p-3" style="white-space: nowrap; display: inline-block;">
    <!-- Back to Home link -->
    <a href="/" class="text-decoration-none text-dark">Back to Home</a>
</div>
</div>

@endsection