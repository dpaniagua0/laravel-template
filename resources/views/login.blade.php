@extends('layouts.login')

@section('custom-css')
    <link href="{{ asset('css/login.screen.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="single-widget-container">
        <section class="widget login-widget">
            <header class="text-align-center">
                <h4>Login to your account</h4>
            </header>
            <div class="body">
                <form class="no-margin"
                      action="{{ url('/login') }}" method="post">
                    <fieldset>
                        {!! csrf_field() !!}
                        {{--*/ $has_error = ''/*---}}
                        @if ($errors->has('email') || $errors->has('password'))
                            {{--*/ $has_error = 'has-error'/*---}}

                        @endif
                        <div class="form-group">
                            <label for="email" class="control-label" >Email</label>
                            <div class="input-group {{$has_error}}">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                <input id="email" type="email" class="form-control input-lg input-transparent"
                                       placeholder="Your Email" value="{{ old('email') }}" name="email">
                            </div>
                            @if ($errors->has('email'))
                                <label class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </label>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>

                            <div class="input-group input-group-lg {{$has_error}} ">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input id="password" type="password" class="form-control input-lg input-transparent"
                                       placeholder="Your Password" name="password">
                            </div>
                            @if ($errors->has('password'))
                                <label class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </label>
                            @endif
                        </div>
                    </fieldset>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-block btn-lg btn-danger">
                            <span class="small-circle"><i class="fa fa-caret-right"></i></span>
                            <small>Sign In</small>
                        </button>
                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
