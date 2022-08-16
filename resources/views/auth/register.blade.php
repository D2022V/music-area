@extends('layouts.app')

@section('content')
    <div class="overlay">
        <!-- LOGN IN FORM by Omar Dsoky -->
        <form method="POST" action="{{ url ('/register') }}" class="auth-form">
        {{ csrf_field() }}
        <!--   con = Container  for items in the form-->
            <div class="con">
                <!--     Start  header Content  -->
                <header class="head-form">
                    <h2>{{trans('auth.register')}}</h2>
                </header>
                <!--     End  header Content  -->
                <br>
                <div class="field-set">

                    <!--   First name Input-->
                    <input class="form-input" id="txt-input" type="text" placeholder="{{trans('auth.first_name')}}" name="first_name"
                           value="{{ old('first_name') }}">
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                    @endif
                    <br>
                    <!--   Last name Input-->
                    <input class="form-input" id="txt-input" type="text" placeholder="{{trans('auth.last_name')}}" name="last_name"
                           value="{{ old('last_name') }}">
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                    @endif
                    <br>
                    <!--   Login name Input-->
                    <input class="form-input" id="txt-input" type="text" placeholder="{{trans('auth.loginForm')}}" name="login"
                           value="{{ old('login') }}">
                    @if ($errors->has('login'))
                        <span class="help-block">
                        <strong>{{ $errors->first('login') }}</strong>
                    </span>
                    @endif
                    <br>
                    <!--   Email Input-->
                    <input class="form-input" id="txt-input" type="text" placeholder="{{trans('auth.email')}}" name="email"
                           value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <br>

                    <!--  Password Input-->
                    <input class="form-input" type="password" placeholder="{{trans('auth.passForm')}}" id="pwd" name="password">
                    <!--      Show/hide password  -->
                    <span>
        <i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i>
     </span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <br>

                    <!-- Password-confirm Input-->
                    <input class="form-input" type="password" placeholder="{{trans('auth.passConf')}}" id="pwd"
                           name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                    <br>
                    <!--        buttons -->
                    <!--      button LogIn -->
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-user-plus"></i> {{trans('auth.register')}}
                    </button>
                </div>
                <!--   End Conrainer  -->
            </div>
            <!-- End Form -->
        </form>
    </div>
    <script>
        function show() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'text');
        }

        function hide() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'password');
        }

        var pwShown = 0;

        document.getElementById("eye").addEventListener("click", function () {
            if (pwShown == 0) {
                pwShown = 1;
                show();
            } else {
                pwShown = 0;
                hide();
            }
        }, false);

    </script>
@endsection
