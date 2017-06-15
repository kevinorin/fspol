<!-- Header Start -->
<?php $file = basename($_SERVER['PHP_SELF']);?>
<header id="header" class="navbar navbar-inverse <?php echo $file=="index.php"?"navbar-home":"";?>">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.svg" alt="" class="hidden-xs">
                <img src="assets/images/logo-mob.svg" alt="" class="visible-xs">
            </a>
        </div>
        <?php
            if (stripos($_SERVER['REQUEST_URI'], 'index.php')
                ||stripos($_SERVER['REQUEST_URI'], 'login.php')
                ||stripos($_SERVER['REQUEST_URI'], 'join.php')
                ||stripos($_SERVER['REQUEST_URI'], 'join-2.php')){
                 echo '<div class="navbar-header-right clearfix hidden-xs">
                        <ul class="clearfix">
                          <li><a href="donate.php">Donate Now</a></li>
                          <li><a href="join.php">Join generationOn</a></li>
                        </ul>
                        <a href="login.php" class="btn btn-sm btn-white btn-outline">login</a>
                    </div>';
            }
            else{
                 echo '<div class="navbar-header-right clearfix hidden-xs">
                        <ul class="clearfix">
                          <li><a href="donate.php">Donate Now</a></li>
                        </ul>
                        <a href="login.php" class="btn btn-sm btn-white btn-outline">logout</a>
                        <a href="dashboard.php" class="btn btn-sm btn-white btn-outline">my dashboard</a>
                    </div>';
            }
        ?>
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="show">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Nav Start -->
        <!--<nav id="nav">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php echo $file=="index.php"?"active":"";?>"><a href="index.php">Home</a></li>
                    <li class="<?php echo $file=="about.php"?"active":"";?>"><a href="about.php">about</a></li>
                </ul>
            </div>
        </nav>-->
    </div>
</header>