<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title></title>
  <link rel="stylesheet" href="/css/login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
    <section>
        <div class="imgbox">
            <img src="https://i.ibb.co/4Kzqy7r/Mobile-login-amico-1.png">
        </div>
        <div class="contentbox">
            <div class="formbox">

                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p class="mb-5">{{ session('success') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                @endif

                @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p class="mb-5">{{ session('loginError') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                @endif

                <form action="/adminlogin" method="POST">
                    @csrf
                    <div class="inputbox">
                        <input type="email" name="email" class="@error('email') is-invalid @enderror form-control" id="email" placeholder="email" autofocus required>
                    </div>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="inputbox">
                        <input type="password" name="password" class="@error('password') is-invalid @enderror form-control form-control" id="password" placeholder="password" required>
                    </div>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="inputbox">
                        <input type="submit" value="login">
                    </div>
                    <div class="inputbox">
                        <p>Don't have an account?<a href="/adminregister">Sign up</a></p>
                    </div>
                </form>
        </div>
    </section>
</body>