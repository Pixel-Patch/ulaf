<!doctype html>
<?php
ob_start(); // Start output buffering
session_start(); // Initialize the session




if (!file_exists('process-login.php')) {
  die('Error: process-login not found');
}
require('process-login.php');

?>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Login Cover - Pages | ULAF Admin</title>
  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css" />
  <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../assets/css/demo.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />
  <link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css" />
  <script src="../../assets/vendor/js/helpers.js"></script>
  <script src="../../assets/vendor/js/template-customizer.js"></script>
  <script src="../../assets/js/config.js"></script>
</head>

<body>
  <div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
      <div class="d-none d-lg-flex col-lg-7 p-0">
        <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
          <img src="../../assets/img/illustrations/auth-login-illustration-light.png" alt="auth-login-cover" class="img-fluid my-5 auth-illustration" data-app-light-img="illustrations/auth-login-illustration-light.png" data-app-dark-img="illustrations/auth-login-illustration-dark.png" />
          <img src="../../assets/img/illustrations/bg-shape-image-light.png" alt="auth-login-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png" />
        </div>
      </div>
      <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
        <div class="w-px-400 mx-auto">
          <div class="app-brand mb-4">
            <a href="index.php" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <!-- SVG Logo -->
              </span>
            </a>
          </div>
          <h3 class="mb-1">Welcome to Vuexy! 👋</h3>
          <p class="mb-4">Please sign-in to your account and start the adventure</p>
          <form id="formAuthentication" class="mb-3" action="process-login.php" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email or Username</label>
              <input type="text" class="form-control" id="email" name="email_username" placeholder="Enter your email or username" autofocus />
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                <a href="auth-forgot-password-cover.php">
                  <small>Forgot Password?</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100" type="submit" name="signin">Sign in</button>
          </form>



          <p class="text-center">
            <span>New on our platform?</span>
            <a href="auth-register-cover.php">
              <span>Create an account</span>
            </a>
          </p>
          <div class="divider my-4">
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="../../assets/vendor/js/menu.js"></script>
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/pages-auth.js"></script>
  <script>
    'use strict';
    document.addEventListener('DOMContentLoaded', function() {
      const formAuthentication = document.querySelector('#formAuthentication');
      if (formAuthentication) {
        const fv = FormValidation.formValidation(formAuthentication, {
          fields: {
            email_username: {
              validators: {
                notEmpty: {
                  message: 'Please enter your email or username'
                },
                stringLength: {
                  min: 6,
                  message: 'Must be more than 6 characters'
                }
              }
            },
            password: {
              validators: {
                notEmpty: {
                  message: 'Please enter your password'
                },
                stringLength: {
                  min: 6,
                  message: 'Password must be more than 6 characters'
                }
              }
            },
            terms: {
              validators: {
                notEmpty: {
                  message: 'Please agree to terms & conditions'
                }
              }
            }
          },
          plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap5: new FormValidation.plugins.Bootstrap5({
              eleValidClass: '',
              rowSelector: '.mb-3'
            }),
            submitButton: new FormValidation.plugins.SubmitButton(),
            defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Handles form submission if validation succeeds
            autoFocus: new FormValidation.plugins.AutoFocus()
          }
        });

        formAuthentication.addEventListener('submit', function(e) {
          e.preventDefault();
          fv.validate().then(function(status) {
            if (status === 'Valid') {
              formAuthentication.submit();
            }
          });
        });
      }
    });
  </script>

</body>

</html>