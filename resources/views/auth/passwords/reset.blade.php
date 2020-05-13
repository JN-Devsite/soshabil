<x-master>
<div class="container mx-auto px-6 py-4">
    <div class="justify-content-center">
        <div class="">
            <div class="">
                <h3 class="font-bold uppercase">{{ __('Reset Password') }}</h3>

                <div class="w-64">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="">
                            <label for="email" class="font-bold uppercase text-xs">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="bg-transparent border-white rounded-md border-2 mb-1 w-full @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password" class="font-bold uppercase text-xs">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="bg-transparent border-white rounded-md border-2 mb-1 w-full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password-confirm" class="font-bold uppercase text-xs">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="bg-transparent border-white rounded-md border-2 mb-1 w-full " name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" class="sosha-bgcolor rounded-md uppercase font-bold text-sm p-2 mb-1 w-full">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-master>
