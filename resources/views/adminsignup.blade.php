<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title></title>
  <link rel="stylesheet" href="/css/signup.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
    <section>
        <div class="imgbox">
            <img src="https://i.ibb.co/4Kzqy7r/Mobile-login-amico-1.png">
        </div>
        <div class="contentbox">
            <div class="formbox">
               
                <form action="/adminregister" method="POST">
                    @csrf
                    <div class="inputbox">
                        <input type="text" name="username" class="@error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="inputbox">
                        <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="inputbox">
                        <input type="password" name="password" class="@error('password') is-invalid @enderror" id="password" placeholder="password" required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="inputbox">
                        <input type="submit" value="Sign Up">
                    </div>

                    <div class="inputbox">
                        <p> Already have an account? <a href="/adminlogin">Login</a></p>
                    </div>
                </form>
        </div>
    </section>
</body>