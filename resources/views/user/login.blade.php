@extends('layouts.master', ['title' => 'Login - MailPanda'])

@section('body')
    @include('includes.message-block')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{ route('post.signin') }}" method="post">
                <h3>Sign in</h3>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Your E-mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="#">Forgot password?</a>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection