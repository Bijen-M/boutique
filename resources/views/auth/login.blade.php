<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}" />
    <link rel="preload" href="{{ asset('images/logo.png') }}" type="image/x-icon" as="image" />
    <title>
        {{ isset($title) ? $title : (isset($settings->site_title) ? $settings->site_title : 'SaralBankingSewa') }}
    </title>
</head>

<style>
    .loginbtn {
        font-size: inherit;
        padding: 5px 39px;
    }

    .error_div {
        background: #c53310;
        padding: 2%;
        margin: 0%;
        color: white;
    }

</style>

<body>
    <main>
        <section class="main__content" style="height: 100%">
            <div class="login-col">
                <div class="container">
                    <div class="row">
                        <div class="col* col-md-5 col-lg-5 card__mid">
                            <div class="login__tabs">
                                <h2 class="login__head">User Log In </h2>
                                @if ($errors->any())
                                    {!! implode('', $errors->all('<div class="error_div">:message</div>')) !!}
                                @endif
                                <br>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="login__title">Email <span class="astrick">*</span>
                                        </label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control" placeholder="">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="login__title">Password <span class="astrick">*</span>
                                        </label>
                                        <div class="password__eye">
                                            <input id="" type="password" name="password" value=""
                                                class="form-control password-field" placeholder="">

                                            @error('password')
                                                <span class="invalid-feedback error-msg" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="passRemFlex">
                                        <div class="passRemLeft">
                                            <label class="checkboxContainer">Remember me
                                                <input type="checkbox" type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div> <br>
                                    @if (Route::has('password.request'))
                                        <div class="form-group">
                                            <a
                                                href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4"></div>
                                            <div class="col-6">
                                                <button type="submit" value="" class="btn-lg btn-1 loginbtn">Login
                                                </button>
                                            </div>
                                        </div>


                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="go-top"> <i class="las la-angle-up"></i>

    </div>
    <script src="{{ asset('front/js/main/all.min.js') }}"></script>
    <script src="{{ asset('js/script/custom.min.js') }}"></script>
</body>

</html>
