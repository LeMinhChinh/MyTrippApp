@extends('user/index')
@section('title', "Sign in")

@section('content')
<main>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-49">
                        Sing up
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="pass" placeholder="Type your email">
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="text" name="password" placeholder="Type your password">
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                        <span class="label-input100">Repassword</span>
                        <input class="input100" type="repassword" name="pass" placeholder="Type your repassword">
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                        <span class="label-input100">Fullname</span>
                        <input class="input100" type="repassword" name="pass" placeholder="Type your fullname">
                    </div>

                    <div class="text-right p-t-8 p-b-31"></div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Sign up
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
</main>

@endsection
