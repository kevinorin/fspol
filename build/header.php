<!-- Header Start -->
<?php $file = basename($_SERVER['PHP_SELF']);?>
<header id="header" class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            
            <a class="navbar-brand" href="index.php"><img src="../assets/images/logo.svg" alt=""></a>
        </div>
        <div class="navbar-header-right clearfix hidden-xs">
            <ul class="clearfix">
              <li><a href="donate.php">Donate Now</a></li>
              <li><a href="join.php">Join generationOn</a></li>
            </ul>
            <a href="login.php" class="btn btn-sm btn-white btn-outline">login</a>
        </div>
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