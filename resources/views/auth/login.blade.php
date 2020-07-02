@extends('layouts.app')

@section('content')
<div class="uk-container">
    <div class="uk-grid uk-flex uk-flex-center" uk-grid>
        <div class="uk-card uk-card-default uk-width-2-3@m">
            <div class="uk-card-body">
                <h3 class="uk-card-title">{{ __('Login') }}</div>

                <form class="uk-form-horizontal" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="uk-margin">
                        <label for="email" class="uk-form-label">{{ __('E-Mail Address') }}</label>
                        <div class="uk-form-controls">
                            <input id="email" type="email" class="uk-input @error('email') uk-form-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="uk-text-danger uk-text-small" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="password" class="uk-form-label">{{ __('Password') }}</label>
                        <div class="uk-form-controls">
                            <input id="password" type="password" class="uk-input @error('password') uk-form-danger @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="uk-text-danger uk-text-small" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-margin uk-flex uk-flex-right@m">
                        <div class="uk-width-3-4@m">
                            <div class="form-check">
                                <label>
                                    <input class="uk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin uk-flex uk-flex-right@m">
                        <div class="uk-width-3-4@m">
                            <button type="submit" class="uk-button uk-button-primary">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="uk-link-muted" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
