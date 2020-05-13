<x-master>
<div class="container mx-auto px-6 py-4">
    <div class="justify-content-center">
        <div class="">
            <div class="">
                <h3 class="font-bold uppercase">{{ __('Login') }}</h3>

                <div class="w-64">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="">
                            <label for="email" class="font-bold uppercase text-xs">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control bg-transparent border-white rounded-md border-2 mb-1 w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password" class="font-bold uppercase text-xs col-md-4">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="bg-transparent border-white rounded-md border-2 mb-1 w-full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="font-bold uppercase text-xs form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" class="sosha-bgcolor rounded-md uppercase font-bold text-sm p-2 mb-1 w-full">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <br>
                                    <a class="sosha-bgcolor rounded-md uppercase font-bold text-sm p-2 mb-1 inline-block w-full" href="{{ route('password.request') }}">
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
</div>
</x-master>
