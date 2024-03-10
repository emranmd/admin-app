@extends('frontend.include.baseapp')
@section('content')
<section class="loginSectionArea">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <form class="loginFormArea" action="{{ url('/userlogin') }}" method="post">
                    @csrf
                    <div class="title">
                        <span>Login</span>
                    </div>

                    <div class="formGroup mb-3">
                        <label>Email :</label>
                        <input type="text" name="email" class="form-control" placeholder="Email address..">
                        <span class="iconStyle"><i class="fa-regular fa-envelope"></i></span>
                    </div><!-- formGroup -->

                    <div class="formGroup mb-4">
                        <label>Password :</label>
                        <input type="password" name="password" class="form-control" placeholder="Password..">
                        <span class="iconStyle"><i class="fa-solid fa-lock"></i></span>
                    </div><!-- formGroup -->

                    <div class="formButton">
                        <button type="submit" class="form-control login_BtnStyle  mb-2">Login</button>
                        <span>Don't have an acount? <a href="">Signup</a></span>
                    </div><!-- formButton -->

                </form><!-- loginFormArea -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- loginSectionArea -->
@endsection

