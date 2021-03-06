@extends('user/index')
@section('title', "Sign in")

@section('content')
<main>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-49">
                        Đăng kí
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                        <span class="label-input100">Email (*)</span>
                        <input class="input100" type="email" name="pass" placeholder="Nhập vào email">
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                        <span class="label-input100">Mật khẩu (*)</span>
                        <input class="input100" type="password" name="password" placeholder="Nhập vào mật khẩu">
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                        <span class="label-input100">Họ và tên đệm (*)</span>
                        <input class="input100" type="email" name="pass" placeholder="Nhập vào họ và tên đệm">
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                        <span class="label-input100">Tên (*)</span>
                        <input class="input100" type="email" name="pass" placeholder="Nhập vào tên">
                    </div>

                    <div class="text-right p-t-8 p-b-31"></div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Đăng kí
                            </button>
                        </div>
                    </div>

                    <div class="flex-col-c p-t-50">
                        <span class="txt1 p-b-17">
                            Bạn đã có tài khoản?
                        </span>

                    <a href="{{ route('user.login') }}" class="txt2">
                            Đăng nhập
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
</main>

@endsection
