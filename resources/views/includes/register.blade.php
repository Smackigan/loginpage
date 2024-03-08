<div class="wrapper">
    <div class=" flex flex-col md:flex-row flex-wrap mt-16 mb-6 ml-6 lg:ml-0">
        <h1 class="text-[#02170E] page-title title-font">
            <span class="text-xl xl:text-2xl" data-ui-id="page-title-wrapper">
                Create New Customer Account
            </span>
        </h1>
    </div>

    <form class="card w-full mb-8 md:my-0" method="post" action="{{ url('register') }}" id="customer-register-form">
        @csrf
        @method('post')

        <h2 class="title-font mb-3 text-primary" role="heading" aria-level="2">
            Personal Information
        </h2>

        {{-- First name --}}
        <div class="firstName">
            <label class="label" for="firstName">
                <span class="text-[#02170E] text-base font-normal font-montserrat">First Name</span>
            </label>
            <div class="control">
                <input data-test="register-firstName" name="firstName" id="firstName" class="form-input"
                    value="{{ old('firstName') }}" autocomplete="off" title="firstName">
            </div>
            <div class="error-message text-red-500" id="firstNameError"></div>
            @error('firstName')
                <div class="error-message text-red-500 -mb-3">{{ $message }}</div>
            @enderror
        </div>

        {{-- Last name --}}
        <div class="lastName">
            <label class="label" for="lastName">
                <span class="text-[#02170E] text-base font-normal font-montserrat">Last Name</span>
            </label>
            <div class="control">
                <input data-test="register-lastName" name="lastName" class="form-input" id="lastName"
                    value="{{ old('lastName') }}" autocomplete="off" title="lastName">
            </div>
            <div class="error-message text-red-500" id="lastNameError"></div>
            @error('lastName')
                <div class="error-message text-red-500 -mb-3">{{ $message }}</div>
            @enderror
        </div>

        <h2 class="title-font mb-3 mt-4 text-primary" role="heading" aria-level="2">
            Sign-in Information
        </h2>

        {{-- Email --}}
        <div class="email">
            <label class="label" for="email">
                <span class="text-[#02170E] text-base font-normal font-montserrat">Email</span>
            </label>
            <div class="control">
                <input data-test="register-email" name="registerEmail" id="registerEmail" class="form-input"
                    value="{{ old('registerEmail') }}" autocomplete="off" title="register-email">
            </div>
            <div class="error-message text-red-500" id="registerEmailError"></div>
            @error('registerEmail')
                <div class="error-message text-red-500 -mb-3">{{ $message }}</div>
            @enderror
        </div>

        {{-- Pass --}}
        <div class="password">
            <label class="label" for="password">
                <span class="text-[#02170E] text-base font-normal font-montserrat">Password</span>
            </label>
            <div class="control">
                <input data-test="register-password" name="registerPassword" class="form-input" value=""
                    autocomplete="off" type="password" id="registerPassword" title="registerPassword">
            </div>
            <div class="error-message text-red-500" id="registerPasswordError"></div>
            @error('registerPassword')
                <div class="error-message text-red-500 -mb-3">{{ $message }}</div>
            @enderror
        </div>

        {{-- Confirm pass --}}
        <div class="confirm">
            <label class="label" for="confirm">
                <span class="text-[#02170E] text-base font-normal font-montserrat">Confirm
                    Password</span>
            </label>
            <div class="control">
                <input data-test="register-passwordConfirm" name="confirmPassword" class="form-input" value=""
                    type="password" autocomplete="off" id="confirmPassword" title="confirmPassword">
            </div>
            <div class="error-message text-red-500" id="confirmPasswordError"></div>
            @error('confirmPassword')
                <div class="error-message text-red-500 -mb-3">{{ $message }}</div>
            @enderror
        </div>

        {{-- Checkbox --}}
        <div class="flex items-center mt-4">
            <input id="checkbox" type="checkbox" data-test="register-newsletter"
                class="h-4 w-4 flex rounded border border-[#D1D5DB] text-[#0F8352] hover:border hover:border-[#0F8352]" />

            <label class="text-[#02170E] text-base font-normal font-montserrat ml-4 flex mb-0">Sign Up
                for
                Newsletter</label>
        </div>

        <div class="actions-toolbar pt-6 pb-2 flex self-end">
            <button class="btn hover:text-white active:text-white" type="submit" name="register" id="register"
                data-test="register-submit">
                <span>Create an Account</span>
            </button>
        </div>
    </form>
</div>
