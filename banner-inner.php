<section id="banner" class="inner-banner full-h-banner">
  <div class="container padding-none-xs">
    <div class="banner-full-height">
      <?php
        if (stripos($_SERVER['REQUEST_URI'], 'dashboard.php')){
          echo '<div class="banner-text cleafix">
            <div class="banner-left">
              <h1>Welcome Joshua</h1>
            </div>
            <div class="banner-right">
              <a href="edit-profile.php" class="btn btn-white btn-outline">Edit profile</a>
            </div>
          </div>';
        }
        else if (stripos($_SERVER['REQUEST_URI'], 'track-service.php')){
          echo '<div class="banner-text track-banner cleafix text-center">
            <h1>Track Your Service</h1>
          </div>';
        }
        else if (stripos($_SERVER['REQUEST_URI'], 'login.php')){
          echo '<div class="banner-text track-banner cleafix text-center">
            <h1>Login to your account</h1>
          </div>';
        }
      ?>
    </div>
  </div>
</section>