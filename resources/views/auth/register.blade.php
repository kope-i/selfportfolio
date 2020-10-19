@extends('layouts.app')

@section('content')
<h1 class="ui center aligned header"> </h1>
<div class="ui middle aligned center aligned grid">
    <div class="eight wide column">
    <h2 class="ui green image header">
      <div class="content">{{ __('Register') }}</div>
    </h2>
        <form class="ui large form"method="POST" action="{{ route('register') }}">
            @csrf
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user outline icon"></i>
                        <input id="name" type="text"
                        name="name"
                        placeholder="Name" 
                        class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input id="email" type="email" 
                        name="email"
                        placeholder="E-mail Address"
                        class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input id="password" type="password" 
                        name="password"
                        placeholder="Password"
                        class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i> 
                        <input id="password-confirm"type="password" class="form-control" 
                        placeholder="Confirm Password"
                        name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                
                <button type="submit" class="ui positive button">
                {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
