<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reset Password | Access Your Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/toastr.min.css') }}">

</head>

<body>
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow ">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4 d-flex justify-content-center"
                            style="flex-direction: column;align-items:center;">
                            <a href="{{ url('/') }}"><img src="{{ asset('front-end/img/logo.png') }}"
                                    class="mb-4" alt=""></a>
                            <h1 class="mb-1 fw-bold">Forgot Password</h1>
                            <span>Fill the form to reset your password</a></span>
                        </div>
                        <!-- Form -->

                        @if (session('status'))
                            {{ Toastr::warning(session('status'), '', ['positionClass' => 'toast-top-right', 'progressBar' => true, 'showMethod' => 'fadeIn', 'hideMethod' => 'fadeOut', 'preventDuplicates' => true]) }}
                        @endif
                        <form method="POST" action="{{ route('password.email') }}" autocomplete="off">
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Enter Your Email Address" value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-danger btn-block">
                                        {{ __('Send Password Reset Link') }}</button>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                <div>
                                    @if (Route::has('login'))
                                        <p>Return to <a href="{{ route('login') }}">{{ __('Login') }}</a></p>
                                    @endif
                                </div>
                                <div> </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="{{ asset('backend/jquery.min.js') }}"></script>
<script src="{{ asset('backend/toastr.min.js') }}"></script>
{!! Toastr::message() !!}

</html>
