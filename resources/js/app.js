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
        return password.trim().length >= 6;
    }

    // Submnit
    document
        .getElementById("customer-login-form")
        .addEventListener("submit", function (e) {
            // Reset error message
            hideError(emailError);
            hideError(passwordError);
            console.log("Form submitted");

            // Validate email
            if (emailInput.value.trim() === "") {
                showError(emailError, "Email address is required");
                e.preventDefault();
                console.log(emailError, "missing email");
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
                    "Password must be at least 4 characters long"
                );
                e.preventDefault();
            }
        });
});
