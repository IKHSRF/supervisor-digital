<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <link
         rel="stylesheet"
         href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
         />
   </head>
   <body>
      <div id="card-register">
         <div id="card-content">
            <div id="card-title">
               <h2>SIGN UP</h2>
               <div class="underline-title"></div>
            </div>
            <form method="POST" action="{{ route('register') }}" class="form">
               @csrf
               <label for="name" style="padding-top: 13px">{{ __('Nama') }}</label>
               <input id="form-content" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
               @error('name')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
               <div class="form-border"></div>
               <label for="email" style="padding-top: 13px">{{ __('E-Mail Address') }}</label>
               <input id="user-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
               @error('email')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
               <div class="form-border"></div>
               <label for="password" style="padding-top: 13px">{{ __('Password') }}</label>
               <input id="user-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
               @error('password')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
               <div class="form-border"></div>
               <label for="password-confirm" style="padding-top: 13px">{{ __('Confirm Password') }}</label>
               <input id="user-password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
               <div class="form-border"></div>
               <label for="id_level" style="padding-top: 22px;">
               Daftar Sebagai
               </label>
               <select class="form-content" name="id_level" id="user-email">
                  <option value="1">Guru</option>
                  <option value="2">Kurikulum</option>
                  <option value="3">Kepala Sekolah</option>
                  <option value="4">Supervisor</option>
                  <option value='5'>Admin</option>
               </select>
               <div class="form-border"></div>
               <button type="submit" id="submit-btn">
               {{ __('Register') }}
               </button>
               <!--<input id="submit-btn" type="submit" name="submit" value="LOGIN" />-->
               <a href="/" id="signin">Sudah Punya akun?</a>
            </form>
            </form>
         </div>
      </div>
   </body>
</html>
