<html>
<head>
  <?php include_once("head.php"); ?>
  <title>Generation On</title>  
</head>
<body>
  <div id="wrapper">
    <?php include_once("header.php"); ?>

    <!-- Banner Start -->
    <section id="banner" class="inner-banner full-h-banner">
      <div class="container padding-none-xs">
          <div class="banner-full-height">
              <div class="banner-text banner-text-center cleafix text-center">
                  <h1>Login to your account</h1>
              </div>
          </div>
      </div>
    </section>
  
  
  <!-- Content Start -->
  <div id="content" class="page-login">
    <section class="light-md-grey login-section center-section">
        <div class="container">
          <div class="content-center-part center-block white-bg panel-shadow text-center login-content">
            <h2 class="h2 dkmdpurple">You can login with your e-mail address and password. Want to <a href="#" class="blue text-underline">sign up</a>?</h2>
            <div class="login-form">
              <form>
                <div class="form-group has-error">
                  <label class="label-title text-left">EMAIL</label>
                  <input type="email" class="form-control" placeholder="jane@example.com">
                  <span class="help-block error"><span>!</span>No account found</span>
                </div>
                <div class="form-group">
                  <label class="label-title text-left">PASSWORD</label>
                  <input type="password" class="form-control" placeholder="•••••••••">
                  <div class="checkbox style-checkbox purple-checkbox">
                    <label>
                      <input type="checkbox">Show Password
                      <span class="check-style">
                        <em class="fa fa-check"></em>
                      </span>
                    </label>
                  </div>
                  <span class="help-block error"><span>!</span>Please re-enter your password</span>
                </div>
                <div class="form-group">
                    <div>
                      <input type="submit" class="btn btn-blue" value="login">
                    </div>
                    <a href="#" class="blue text-underline">Forgot Password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>
  </div>

  <?php include_once("footer.php"); ?>
</div><!--wrapper -->
</body>
</html>