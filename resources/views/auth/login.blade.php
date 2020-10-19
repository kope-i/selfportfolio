@extends('layouts.app')

@section('content')
<h2 class="ui center aligned header"> </h1>
<div class="ui middle aligned center aligned grid">
    <div class="eight wide column">
      <h2 class="ui green image header">
      <div class="content">Login your account</div>
      </h2>
        <form class="ui large form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon">   
                        </i>
                        <input id="email" type="email" name="email" placeholder="E-mail Address"  class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"> 
                        </i>
                        <input type="password" name="password" placeholder="Password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input class="form-check-input"type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Remember me?</label>
                    </div>
                </div>
                <button type="submit" class="ui positive button">Login</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                         {{ __('Forgot your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
