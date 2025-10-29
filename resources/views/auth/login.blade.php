{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin login</title>
    <style>
        :root {
  /* --bg: #111; */
  background: url('https://images.wallpapersden.com/image/download/firewatch-new-hd-22-art_bWpubm2UmZqaraWkpJRnamtlrWZpaWU.jpg') no-repeat;
  background-size: cover;
  background-position: center;
  --accent: #00ffff;
  --text: #fff;
  --danger: #ff0055;
}

body {
  margin: 0;
  background: var(--bg);
  font-family: 'Segoe UI', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  overflow: hidden;
}

.blob-bg {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: -1;
}

svg {
  width: 100%;
  height: 100%;
  filter: blur(100px);
  opacity: 0.25;
}

.form-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.tab-toggle {
  display: flex;
  gap: 2rem;
  margin-bottom: 1rem;
  background: #222;
  border-radius: 30px;
  padding: 0.25rem 1rem;
  box-shadow: 0 0 10px var(--accent);
  cursor: pointer;
}

.tab-toggle span {
  padding: 0.5rem 1rem;
  border-radius: 20px;
  transition: all 0.3s ease;
  color: var(--accent);
  font-weight: bold;
}

.tab-toggle span.active {
  background-color: var(--accent);
  color: var(--bg);
  text-shadow: 0 0 5px var(--accent);
}

.form-container {
  background: rgba(20, 20, 20, 0.75);
  border-radius: 20px;
  padding: 2rem;
  max-width: 320px;
  width: 100%;
  box-shadow: 0 0 40px var(--accent);
  backdrop-filter: blur(10px);
  transition: all 0.3s ease;
  animation: flicker 1.2s ease;
  transform: perspective(800px) rotateX(0deg);
}

.form-container:hover {
  transform: perspective(800px) rotateX(2deg);
}

form {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

h2 {
  text-align: center;
  color: var(--accent);
  margin: 0;
  font-weight: bold;
  text-shadow: 0 0 5px var(--accent);
}

input {
  padding: 0.75rem;
  background: #1e1e1e;
  border: 2px solid transparent;
  border-radius: 8px;
  color: var(--text);
  transition: 0.3s;
}

input:focus {
  outline: none;
  border-color: var(--accent);
  box-shadow: 0 0 8px var(--accent);
}

button {
  background: var(--accent);
  border: none;
  color: var(--bg);
  /* padding: 0.75rem; */
  padding-right: 5rem;
  padding-left: 5rem;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  border-radius: 30px;
  font-weight: bold;
  cursor: pointer;
  transition: 0.3s;
}

button:hover {
  box-shadow: 0 0 12px var(--accent);
}

.submit-area {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 1rem;
}

.loader {
  display: none;
  width: 24px;
  height: 24px;
  border: 3px solid var(--accent);
  border-top-color: transparent;
  border-radius: 50%;
  animation: spin 1s linear infinite;
}

.optional-field {
  display: none;
}

.success-area {
  display: none;
  flex-direction: column;
  gap: 1rem;
  text-align: center;
  animation: fadeIn 0.6s ease forwards;
}

.success-area p {
  color: var(--accent);
  font-weight: bold;
}

@keyframes spin {
  to { transform: rotate(360deg); }
}

@keyframes flicker {
  0% { opacity: 0.1; box-shadow: 0 0 10px var(--accent); }
  50% { opacity: 1; box-shadow: 0 0 30px var(--accent); }
  100% { opacity: 1; box-shadow: 0 0 40px var(--accent); }
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
    </style>
</head>
<body>
    <div class="blob-bg">
        <svg viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
          <g transform="translate(300,300)">
            <path id="blob" fill="#0ff"></path>
          </g>
        </svg>
      </div>
      
      <div class="form-wrapper">
        <div class="tab-toggle">
          <span id="loginTab" class="active">Admin Login Panel</span>
          {{-- <span id="signupTab">Signup</span> --}}
        </div>
      
        <div class="form-container">
          <form id="authForm" method="POST" action="{{ route('login') }}">
            @csrf
            <h2 id="formTitle">Login</h2>
      
            {{-- <div id="nameField" class="optional-field"> 
              <input type="text" placeholder="Full Name" />
            </div> --}}
             
            <input type="email" id="email" placeholder="Email" name="email" class="@error('email') is-invalid @enderror" required />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input type="password" id="password" placeholder="Password" name="password" class="@error('password') is-invalid @enderror" required />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      
            {{-- <div id="confirmField" class="optional-field">
              <input type="password" placeholder="Confirm Password" />
            </div> --}}
      
            <div class="submit-area">
              <button type="submit" id="submitBtn"><strong>Login</strong></button>
              <div class="loader" id="loader"></div>
            </div>
      
            <div id="successMsg" class="success-area">
              <p>✅ Logged in successfully!</p>
              <button onclick="window.location.href='/'">Go to Homepage</button>
            </div>
          </form>
        </div>
      </div>
</body>
</html>