<!doctype html>
<?php
ob_start(); // Start output buffering
session_start(); // Initialize the session

if (!file_exists('dbconn.php')) {
  die('Error: dbconn.php not found');
}
require('dbconn.php');
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
          <form id="formAuthentication" class="mb-3" action="" method="POST">
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
          <?php
if (isset($_POST['signin'])) {
  $u = trim($_POST['email_username']);
  $p = trim($_POST['password']);

  if (empty($u) || empty($p)) {
    $_SESSION['loginError'] = 'Please enter both username and password.';
  } else {
    $sql = "SELECT * FROM users WHERE Email=? OR Username=? AND Password=?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
      die('Error preparing statement: ' . $conn->error);
    }

    $stmt->bind_param("sss", $u, $u, $p);
    if ($stmt->execute() === false) {
      die('Error executing statement: ' . $stmt->error);
    }

    $result = $stmt->get_result();
    if ($result->num_rows === 0) {
      $_SESSION['loginError'] = 'Failed to Login! User not found or password incorrect.';
    } else {
      $row = $result->fetch_assoc();
      $_SESSION['user_type'] = $row['User_Type'];
      $_SESSION['user_id'] = $row['id']; // You can also save other session information here
      $redirectMap = [
        'student' => '/ulaf/html/user/checkout-page.php',
        'faculty' => '/ulaf/html/user/checkout-page.php',
        'staff' => '/ulaf/html/user/checkout-page.php',
        'admin' => 'admin_list.php'
      ];
      $redirectUrl = $redirectMap[$_SESSION['user_type']] ?? 'index.php';
      header("Location: $redirectUrl");
      exit();
    }
  }
}

if (isset($_SESSION['loginError'])) {
  echo '<p class="text-danger">Error: ' . $_SESSION['loginError'] . '</p>';
  unset($_SESSION['loginError']);
}
?>



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
</body>

</html>