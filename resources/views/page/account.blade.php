@extends('layout.default')

@section('content')


    <div class="">
        <div class="column main">
            <div id="" class="columns">

                <div class="">
                    <div class=" flex flex-col md:flex-row flex-wrap my-6 mt-16 mb-6  ml-6 lg:ml-0">
                        <h1 class="text-[#02170E] page-title title-font">
                            <span class="text-xl xl:text-2xl" data-ui-id="page-title-wrapper">
                                Customer Login
                            </span>
                        </h1>
                    </div>
                    <div class="lg:w-full card ">
                        <div aria-labelledby="block-customer-login-heading">
                            <form class="form form-login" action="{{ url('login') }}" method="post"
                                id="customer-login-form">
                                @csrf
                                <fieldset class="fieldset login">
                                    <div class="lg:max-w-[378px]">
                                        <legend class="mb-3">
                                            <h2 class="title-font text-primary">
                                                Login
                                            </h2>
                                        </legend>

                                        <div class="text-secondary-darker text-base font-normal font-montserrat mb-4">
                                            If you have an account, sign in with your email address.
                                        </div>
                                        <div class="field">
                                            <label class="label" for="email">
                                                <span
                                                    class="text-secondary-darker text-base font-normal font-montserrat">Email</span>
                                            </label>
                                            <div class="control">
                                                <input data-test="login-email" name="email" class="form-input"
                                                    value="{{ old('email') }}" autocomplete="off" id="email"
                                                    title="Email">

                                            </div>
                                            <div class="error-message text-red-500" id="email-error"></div>
                                            @if ($errors->has('email'))
                                                <div class="error-message text-red-500" id="email-error">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                        </div>


                                        <div class="field">
                                            <label for="pass" class="label">
                                                <span
                                                    class="text-secondary-darker text-base font-normal font-montserrat">Password</span>
                                            </label>
                                            <div class="control flex items-center">
                                                <input data-test="login-password" name="password" class="form-input"
                                                    autocomplete="off" id="pass" title="Password">
                                                <div class="cursor-pointer px-4" aria-label="Show Password">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" class="w-5 h-5" width="24" height="24">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                        <path fill-rule="evenodd"
                                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>

                                                </div>



                                            </div>
                                            @if ($errors->has('password'))
                                                <div class="error-message text-red" id="password-error">
                                                    {{ $errors->first('password') }}
                                                </div>
                                            @endif
                                            <div class="error-message text-red-500" id="password-error"></div>
                                        </div>
                                    </div>
                                    <div class="actions-toolbar flex justify-between pt-6  items-center">
                                        <button data-test="login-submit" type="submit" class="btn" name="send">
                                            <span>Sign In</span>
                                        </button>
                                        <a class="underline font-montserrat font-normal text-[#6D6D6D] leading-6"
                                            href="#">
                                            <span>Forgot Your Password?</span>
                                        </a>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

                <div>
                    <div class=" flex flex-col md:flex-row flex-wrap mt-16 mb-6  lg:ml-0">
                        <h1 class="text-[#02170E] page-title title-font">
                            <span class="text-xl xl:text-2xl" data-ui-id="page-title-wrapper">
                                Create New Customer Account
                            </span>
                        </h1>
                    </div>

                    <form class="card w-full mb-8 md:my-0">

                        <h2 class="title-font mb-3 text-primary" role="heading" aria-level="2">
                            Personal Information
                        </h2>

                        <div class="firstName">
                            <label class="label" for="firstName">
                                <span class="text-secondary-darker text-base font-normal font-montserrat">First Name</span>
                            </label>
                            <div class="control">
                                <input data-test="login-email" name="firstName" class="form-input"
                                    value="{{ old('firstName') }}" autocomplete="off" id="name" title="firstName">
                            </div>
                        </div>
                        <div class="lastName">
                            <label class="label" for="lastName">
                                <span class="text-secondary-darker text-base font-normal font-montserrat">Last Name</span>
                            </label>
                            <div class="control">
                                <input data-test="login-email" name="lastName" class="form-input"
                                    value="{{ old('lastName') }}" autocomplete="off" id="name" title="lastName">
                            </div>
                        </div>

                        <h2 class="title-font mb-3 text-primary" role="heading" aria-level="2">
                            Sign-in Information
                        </h2>
                        <div class="email">
                            <label class="label" for="lastName">
                                <span class="text-secondary-darker text-base font-normal font-montserrat">Email</span>
                            </label>
                            <div class="control">
                                <input data-test="login-email" name="lastName" class="form-input"
                                    value="{{ old('lastName') }}" autocomplete="off" id="name" title="lastName">
                            </div>
                        </div>
                        <div class="password">
                            <label class="label" for="lastName">
                                <span class="text-secondary-darker text-base font-normal font-montserrat">Password</span>
                            </label>
                            <div class="control">
                                <input data-test="login-email" name="lastName" class="form-input"
                                    value="{{ old('lastName') }}" autocomplete="off" id="name" title="lastName">
                            </div>
                        </div>
                        <div class="confirm">
                            <label class="label" for="lastName">
                                <span class="text-secondary-darker text-base font-normal font-montserrat">Confirm
                                    Password</span>
                            </label>
                            <div class="control">
                                <input data-test="login-email" name="lastName" class="form-input"
                                    value="{{ old('lastName') }}" autocomplete="off" id="name" title="lastName">
                            </div>
                        </div>
                        <div class="flex">
                            <input id="checkbox" type="checkbox"
                                class="h-4 w-4 rounded border-[#D1D5DB] text-[#D1D5DB] focus:ring-indigo-600" />
                            <label class="text-secondary-darker text-base font-normal font-montserrat">Sign Up for
                                Newsletter</label>
                        </div>
                        <div class="actions-toolbar  pt-6 pb-2 flex self-end">
                            <a href="#" class="btn hover:text-white active:text-white">
                                <span>Create an Account</span>
                            </a>
                        </div>
                </div>


                </form>
            </div>

        </div>
    </div>
    </div>
@stop

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('pass');
            const emailError = document.getElementById('email-error');
            const passwordError = document.getElementById('password-error');

            // Function to display error messages
            function showError(element, message) {
                element.textContent = message;
                element.style.display = 'block';
            }

            // Function to hide error messages
            function hideError(element) {
                element.textContent = '';
                element.style.display = 'none';
            }

            // Function to validate email format
            function validateEmail(email) {
                const pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return pattern.test(email);
            }

            // Event listener for form submission
            document.getElementById('customer-login-form').addEventListener('submit', function(event) {
                // Reset error messages
                hideError(emailError);
                hideError(passwordError);

                // Validate email
                if (emailInput.value.trim() === '') {
                    showError(emailError, 'Email address is required');
                    event.preventDefault();
                } else if (!validateEmail(emailInput.value)) {
                    showError(emailError, 'Please provide a valid e-mail address');
                    event.preventDefault();
                }

                // Validate password
                if (passwordInput.value.trim() === '') {
                    showError(passwordError, 'Password is required');
                    event.preventDefault();
                }
            });
        });
    </script>
@endsection
