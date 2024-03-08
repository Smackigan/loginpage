/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

// Login form
document.addEventListener("DOMContentLoaded", function () {
  var emailInput = document.getElementById("email");
  var emailError = document.getElementById("email-error");
  var passwordInput = document.getElementById("password");
  var passwordError = document.getElementById("password-error");

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
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
  }
  function validatePassword(password) {
    return password.trim().length >= 8;
  }

  // Submit
  document.getElementById("customer-login-form").addEventListener("submit", function (e) {
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
      showError(passwordError, "Password must be at least 8 characters long");
      e.preventDefault();
    }
  });
});

///////////////////
// register form
document.addEventListener("DOMContentLoaded", function () {
  var firstNameInput = document.getElementById("firstName");
  var nameError = document.getElementById("firstNameError");
  var lastNameInput = document.getElementById("lastName");
  var lastNameError = document.getElementById("lastNameError");
  var registerEmailInput = document.getElementById("registerEmail");
  var registerEmailError = document.getElementById("registerEmailError");
  var password = document.getElementById("registerPassword");
  var passwordError = document.getElementById("registerPasswordError");
  var confirmInput = document.getElementById("confirmPassword");
  var confirmError = document.getElementById("confirmPasswordError");
  var checkbox = document.getElementById("checkbox");
  var registerForm = document.getElementById("customer-register-form");

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
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
  }

  // validate form fields
  function validateForm() {
    var isValid = true;
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
      showError(registerEmailError, "Please provide a valid email address");
      isValid = false;
    } else {
      console.log("email");
    }

    // Validate password
    if (password.value.trim() === "") {
      showError(passwordError, "Password is required");
      isValid = false;
    } else if (!validatePassword(password.value)) {
      showError(passwordError, "Password must be at least 6 characters long");
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

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/sass/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;