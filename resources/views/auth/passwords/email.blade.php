<x-master>
<div class="container mx-auto px-6 py-4">
    <div class="justify-content-center">
        <div class="">
            <div class="">
                <h3 class="font-bold uppercase">{{ __('Reset Password') }}</h3>

                <div class="w-64">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="">
                            <label for="email" class="font-bold uppercase text-xs">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="bg-transparent border-white rounded-md border-2 mb-1 w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="sosha-bgcolor rounded-md uppercase font-bold text-sm p-2 mb-1 w-full">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-master>
