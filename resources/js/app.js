// Login form
document.addEventListener("DOMContentLoaded", function () {
    const emailInput = document.getElementById("email");
    const emailError = document.getElementById("email-error");
    const passwordInput = document.getElementById("password");
    const passwordError = document.getElementById("password-error");

    // display error messages
    function showError(el, message) {
        el.textContent = message;
        el.style.display = "block";
    }

    // hide error messages
    function hideError(el) {
        el.textContent = "";
        el.style.display = "none";
    }

    // Validate email format
    function validateEmail(email) {
        const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return pattern.test(email);
    }

    function validatePassword(password) {
        return password.trim().length >= 8;
    }

    // Submit
    document
        .getElementById("customer-login-form")
        .addEventListener("submit", function (e) {
            // Reset error message
            hideError(emailError);
            hideError(passwordError);

            // Validate email
            if (emailInput.value.trim() === "") {
                showError(emailError, "Email address is required");
                e.preventDefault();
                console.log("missing email");
            } else if (!validateEmail(emailInput.value)) {
                showError(emailError, "Please provide a valid email address");
                e.preventDefault();
                console.log("invalid email format");
            } else {
                console.log("Form submitted successfully");
            }

            if (passwordInput.value.trim() === "") {
                showError(passwordError, "Password is required");
                e.preventDefault();
            } else if (!validatePassword(passwordInput.value)) {
                showError(
                    passwordError,
                    "Password must be at least 8 characters long"
                );
                e.preventDefault();
            }
        });
});

///////////////////
// register form
document.addEventListener("DOMContentLoaded", function () {
    const firstNameInput = document.getElementById("firstName");
    const nameError = document.getElementById("firstNameError");
    const lastNameInput = document.getElementById("lastName");
    const lastNameError = document.getElementById("lastNameError");
    const registerEmailInput = document.getElementById("registerEmail");
    const registerEmailError = document.getElementById("registerEmailError");
    const password = document.getElementById("registerPassword");
    const passwordError = document.getElementById("registerPasswordError");
    const confirmInput = document.getElementById("confirmPassword");
    const confirmError = document.getElementById("confirmPasswordError");
    const checkbox = document.getElementById("checkbox");
    const registerForm = document.getElementById("customer-register-form");

    // display error message
    function showError(el, message) {
        el.textContent = message;
        el.style.display = "block";
    }

    // hide error message
    function hideError(el) {
        el.textContent = "";
        el.style.display = "none";
    }

    // password length
    function validatePassword(password) {
        return password.trim().length >= 6;
    }

    // check if passwords match
    function passwordsMatch(password, confirm) {
        return password === confirm;
    }

    // validate email format
    function validateEmail(email) {
        const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return pattern.test(email);
    }

    // validate form fields
    function validateForm() {
        let isValid = true;
        hideError(nameError);
        hideError(lastNameError);
        hideError(registerEmailError);
        hideError(passwordError);
        hideError(confirmError);

        // Validate first name
        if (firstNameInput.value.trim() === "") {
            showError(nameError, "First Name is required");
            isValid = false;
        } else {
            console.log("First Name");
        }

        // Validate last name
        if (lastNameInput.value.trim() === "") {
            showError(lastNameError, "Last Name is required");
            isValid = false;
        } else {
            console.log("Last Name");
        }

        // Validate email
        if (registerEmailInput.value.trim() === "") {
            showError(registerEmailError, "Email address is required");
            isValid = false;
        } else if (!validateEmail(registerEmailInput.value)) {
            showError(
                registerEmailError,
                "Please provide a valid email address"
            );
            isValid = false;
        } else {
            console.log("email");
        }

        // Validate password
        if (password.value.trim() === "") {
            showError(passwordError, "Password is required");
            isValid = false;
        } else if (!validatePassword(password.value)) {
            showError(
                passwordError,
                "Password must be at least 6 characters long"
            );
            isValid = false;
        } else {
            console.log("password");
        }

        // Validate confirm password
        if (confirmInput.value.trim() === "") {
            showError(confirmError, "Confirm Password is required");
            isValid = false;
        } else if (!passwordsMatch(password.value, confirmInput.value)) {
            showError(confirmError, "Passwords do not match");
            isValid = false;
        } else {
            console.log("confirm");
        }

        return isValid;
    }

    // Form submit
    registerForm.addEventListener("submit", function (event) {
        event.preventDefault();

        if (validateForm()) {
            console.log("Form submitted successfully");
            this.submit();
        } else {
            console.log("Form submission failed - invalid form data");
        }
    });
});
