<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" type="text/css" href="./css/style.css" />
      <link
         rel="stylesheet"
         href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
         />
   </head>
   <body>
      <div id="card">
         <div id="card-content">
            <div id="card-title">
               <h2>LOGIN</h2>
               <div class="underline-title"></div>
            </div>
            <form method="POST" action="{{ route('login') }}" class="form">
               @csrf
               <label for="email" style="padding-top: 13px">{{ __('E-Mail Address') }}</label>
               <input id="user-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
               @error('email')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
               <div class="form-border"></div>
               <label for="password" style="padding-top: 13px">{{ __('Password') }}</label>
               <input id="user-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
               @error('password')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
               <div class="form-border"></div>
               <a href="#">
                  <legend id="forgot-pass">Forgot password?</legend>
               </a>
               <button type="submit" id="submit-btn">{{ __('Login') }}</button>
               <a href="register" id="signup">Belum punya akun?</a>
            </form>
         </div>
      </div>
   </body>
</html>
