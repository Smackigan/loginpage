<div>
    <div class=" flex flex-col md:flex-row flex-wrap mt-16 mb-6 ml-6 lg:ml-0">
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
                <span class="text-[#02170E] text-base font-normal font-montserrat">First Name</span>
            </label>
            <div class="control">
                <input data-test="login-email" name="firstName" class="form-input" value="{{ old('firstName') }}"
                    autocomplete="off" id="name" title="firstName">
            </div>
        </div>
        <div class="lastName">
            <label class="label" for="lastName">
                <span class="text-[#02170E] text-base font-normal font-montserrat">Last Name</span>
            </label>
            <div class="control">
                <input data-test="login-email" name="lastName" class="form-input" value="{{ old('lastName') }}"
                    autocomplete="off" id="name" title="lastName">
            </div>
        </div>

        <h2 class="title-font mb-3 mt-4 text-primary" role="heading" aria-level="2">
            Sign-in Information
        </h2>
        <div class="email">
            <label class="label" for="lastName">
                <span class="text-[#02170E] text-base font-normal font-montserrat">Email</span>
            </label>
            <div class="control">
                <input data-test="login-email" name="lastName" class="form-input" value="{{ old('lastName') }}"
                    autocomplete="off" id="name" title="lastName">
            </div>
        </div>
        <div class="password">
            <label class="label" for="lastName">
                <span class="text-[#02170E] text-base font-normal font-montserrat">Password</span>
            </label>
            <div class="control">
                <input data-test="login-email" name="lastName" class="form-input" value="{{ old('lastName') }}"
                    autocomplete="off" id="name" title="lastName">
            </div>
        </div>
        <div class="confirm">
            <label class="label" for="lastName">
                <span class="text-[#02170E] text-base font-normal font-montserrat">Confirm
                    Password</span>
            </label>
            <div class="control">
                <input data-test="login-email" name="lastName" class="form-input" value="{{ old('lastName') }}"
                    autocomplete="off" id="name" title="lastName">
            </div>
        </div>

        <div class="flex items-center mt-4">
            <input id="checkbox" type="checkbox"
                class="h-4 w-4 flex rounded border border-[#D1D5DB] text-[#0F8352] hover:border hover:border-[#0F8352]" />

            <label class="text-[#02170E] text-base font-normal font-montserrat ml-4 flex mb-0">Sign Up
                for
                Newsletter</label>
        </div>
        <div class="actions-toolbar pt-6 pb-2 flex self-end">
            <a href="#" class="btn hover:text-white active:text-white">
                <span>Create an Account</span>
            </a>
        </div>
    </form>
</div>
