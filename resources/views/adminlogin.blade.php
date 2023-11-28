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

                {{-- @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif --}}

                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p class="mb-5">{{ session('success') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                @endif

                <form action="/adminlogin" method="POST">
                    @csrf
                    <div class="inputbox">
                        <input type="text" name="username" class="@error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required>
                    </div>

                    <div class="inputbox">
                        <input type="text" name="Password" placeholder="Password">
                    </div>

                    <div class="inputbox">
                        <input type="submit" value="login" name="">
                    </div>
                    <div class="inputbox">
                        <p>Don't have an account?<a href="/adminregister">Sign up</a></p>
                    </div>
                </form>
        </div>
    </section>
</body>