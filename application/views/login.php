<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?= site_url('assets/sneat')?>/assets/"
  data-template="vertical-menu-template-free"
>
<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
  />

  <title>Login - CMS</title>
  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= site_url('assets/sneat')?>/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
    rel="stylesheet"
  />

  <!-- Icons -->
  <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/vendor/css/core.css" />
  <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/vendor/css/theme-default.css" />
  <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <link rel="stylesheet" href="<?= site_url('assets/sneat')?>/assets/vendor/css/pages/page-auth.css" />

  <!-- Helpers -->
  <script src="<?= site_url('assets/sneat')?>/assets/vendor/js/helpers.js"></script>
  <script src="<?= site_url('assets/sneat')?>/assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <div class="card">
          <div class="card-body">
            <h4 class="mb-2">Welcome to CMS! 👋</h4>
            <form class="mb-3" action="<?= base_url('auth/login') ?>" method="POST" id="loginForm">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input
                  type="text"
                  class="form-control"
                  name="username"
                  id="username"
                  placeholder="Enter your username"
                  autofocus
                  required
                />
              </div>
              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    placeholder="••••••••"
                    aria-describedby="password"
                    required
                  />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
              </div>
              <div id="alertMessage">
                <?= $this->session->flashdata('alert') ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Content -->

  <!-- Core JS -->
  <script src="<?= site_url('assets/sneat')?>/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="<?= site_url('assets/sneat')?>/assets/vendor/libs/popper/popper.js"></script>
  <script src="<?= site_url('assets/sneat')?>/assets/vendor/js/bootstrap.js"></script>
  <script src="<?= site_url('assets/sneat')?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="<?= site_url('assets/sneat')?>/assets/vendor/js/menu.js"></script>
  <script src="<?= site_url('assets/sneat')?>/assets/js/main.js"></script>

  <!-- Debugging Script -->
  <script>
    document.getElementById("loginForm").onsubmit = function() {
      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;
      console.log("Debug - Username:", username);
      console.log("Debug - Password:", password);
    };
  </script>
</body>
</html>
