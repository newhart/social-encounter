<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat"
        style="background-image: url(https://via.placeholder.com/800x950.png);"></div>
    <div class="col-xl-7 vh-100 align-items-center d-flex bg-white rounded-3 overflow-hidden">
        <div class="card shadow-none border-0 ms-auto me-auto login-card">
            <div class="card-body rounded-0 text-left">
                <h2 class="fw-700 display1-size display2-md-size mb-3">Login into <br>your account</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group icon-input mb-3">
                        <i class="font-sm ti-email text-grey-500 pe-0"></i>
                        <x-text-input id="email"
                            class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" type="email"
                            name="email" :value="old('email')" required autofocus autocomplete="username"
                            placeholder="Your Email Address" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group icon-input mb-1">
                        <x-text-input id="password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3"
                            type="password" name="password" required autocomplete="current-password"
                            placeholder="Password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                    </div>
                    <div class="form-check text-left mb-3">
                        <label for="remember_me" class="form-check-label font-xsss text-grey-500">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                        <a href="{{ route('password.request') }}"
                            class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your
                            Password?</a>
                    </div>
                    <div class="col-sm-12 p-0 text-left">
                        <div class="form-group mb-1">
                            <x-primary-button
                                class="form-control text-center style2-input text-white fw-600 bg-dark border-0 pt-0">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                        <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Dont have account <a
                                href="{{ route('register') }}" class="fw-700 ms-1">Register</a></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
