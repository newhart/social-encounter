<x-guest-layout>

    <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat"
        style="background-image: url(https://via.placeholder.com/800x950.png);"></div>
    <div class="col-xl-7 vh-100 align-items-center d-flex bg-white rounded-3 overflow-hidden">
        <div class="card shadow-none border-0 ms-auto me-auto login-card">
            <div class="card-body rounded-0 text-left">
                <h2 class="fw-700 display1-size display2-md-size mb-4">Change <br>your password</h2>
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="form-group icon-input mb-3">
                        <x-text-input id="email" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3"
                            type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username"
                            placeholder="Email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                    </div>

                    <div class="form-group icon-input mb-3">
                        <x-text-input id="password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3"
                            type="password" name="password" required autocomplete="new-password"
                            placeholder="Password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                    </div>
                    <div class="form-group icon-input mb-1">
                        <x-text-input id="password_confirmation"
                            class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                    </div>
                    <div class="col-sm-12 p-0 text-left">
                        <div class="form-group mb-1">
                            <x-primary-button
                                class="form-control text-center style2-input text-white fw-600 bg-dark border-0 pt-0">
                                {{ __('Reset Password') }}
                            </x-primary-button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</x-guest-layout>
