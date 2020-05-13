<x-master>
<div class="container mx-auto px-6 py-4">
    <div class="justify-content-center">
        <div class="">
            <div class="">
                <h3 class="font-bold uppercase">{{ __('Confirm Password') }}</h3>

                <div class="w-64">
                    <span class="font-bold uppercase text-xs">{{ __('Please confirm your password before continuing.') }}</span>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="font-bold uppercase text-xs">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="bg-transparent border-white rounded-md border-2 mb-1 w-full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" class="sosha-bgcolor rounded-md uppercase font-bold text-sm p-2 mb-1 w-full">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <br>
                                    <a class="sosha-bgcolor rounded-md uppercase font-bold text-sm p-2 mb-1 w-full" href="{{ route('password.request') }}">
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
