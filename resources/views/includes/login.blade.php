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
             <form class="form form-login" action="{{ url('login') }}" method="post" id="customer-login-form">

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
                                     class="text-secondary-darker text-base font-normal font-montserrat">Email</span></label>
                             <div class="control">
                                 <input data-test="login-email" name="email" class="form-input"
                                     value="{{ old('email') }}" autocomplete="off" id="email" title="Email">
                             </div>

                             <div class="error-message text-red-500" id="email-error"></div>

                         </div>


                         <div class="field">
                             <label for="passsword" class="label">
                                 <span
                                     class="text-secondary-darker text-base font-normal font-montserrat">Password</span>
                             </label>
                             <div class="control flex items-center">
                                 <input data-test="login-password" name="password" class="form-input" autocomplete="off"
                                     id="password" title="Password">
                                 {{-- <div class="cursor-pointer px-4" aria-label="Show Password">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-5 h-5" width="24" height="24">
                                         <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                         <path fill-rule="evenodd"
                                             d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                             clip-rule="evenodd"></path>
                                     </svg>
                                 </div> --}}

                             </div>
                             <div class="error-message text-red-500 " id="password-error"></div>

                             @error('loginError')
                                 <div class="error-message text-red-500 -mb-3">{{ $message }}</div>
                             @enderror

                         </div>
                     </div>

                     <div class="actions-toolbar flex justify-between pt-6  items-center">
                         <button data-test="login-submit" type="submit" class="btn" name="send">
                             <span>Sign In</span>
                         </button>
                         <a class="underline font-montserrat font-normal text-[#6D6D6D] leading-6" href="#">
                             <span>Forgot Your Password?</span>
                         </a>
                     </div>
                 </fieldset>
             </form>
         </div>
     </div>
 </div>
