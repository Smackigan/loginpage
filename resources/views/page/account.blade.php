@extends('layout.default')

@section('content')


    <div class="">
        <div class="column main">
            <div id="" class="columns">

                @include('includes.login')


                @include('includes.register')

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
