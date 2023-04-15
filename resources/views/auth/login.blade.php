<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Larashort | Login</title>
    <!-- CSS files -->
    <link href="{{ asset('./dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./dist/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./dist/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./dist/css/demo.min.css') }}" rel="stylesheet"/>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
        </div>
        <form class="card card-md" action="/login" method="POST" autocomplete="off">
          @csrf
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Login to your account</h2>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" value="{{ old('email') }}">
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-2">
              <label class="form-label">
                Password
              </label>
              <div class="input-group input-group-flat">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password"  autocomplete="off">
                <span class="input-group-text">
                  <a onclick="show_pass()" href="javascript:void(0)" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
                @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted mt-3">
          Don't have account yet? <a href="/register" tabindex="-1">Sign up</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('./dist/js/tabler.min.js') }}"></script>
    <script src="{{ asset('./dist/js/demo.min.js') }}"></script>

    <script>
      function show_pass() {
        const pass = document.getElementById('password')
        if (pass.type == 'password') {
          pass.type = 'text'          
        } else {
          pass.type = 'password'
        }
      }
    </script>
  </body>
</html>