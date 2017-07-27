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
                  <h1>Join genenerationOn</h1>
              </div>
          </div>
      </div>
    </section>
  
  
  <!-- Content Start -->
  <div id="content">
    <section class="light-md-grey join-section center-section">
        <div class="container">
          <div class="content-center-part center-block white-bg panel-shadow text-center join-content">
            <h3 class="">Please Enter Your Date of Birth</h3>
            <div class="join-form">
              <form>
                <div class="form-group has-error">
                  <input type="text" class="form-control" placeholder="dd / mm / yyyy">
                  <span class="exampl">Example: 23/02/1985</span>
                  <div class="error-block">
                    <span class="help-block error"><span>!</span>Please enter a valid date</span>
                    <span class="help-block error"><span>!</span>You must be 16 years or older to join</span>
                  </div>
                </div>
                <div class="form-group">
                    <div>
                      <input type="submit" class="btn btn-blue" value="SIGN UP">
                    </div>
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