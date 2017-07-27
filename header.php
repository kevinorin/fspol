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
    </div>
</header>
<!-- Nav Start -->
<nav id="nav" class="vrdkpurple-bg navbar-inverse">
    <div class="nav-inner">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="show">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navigation">
            <div class="nav-top">
                <a href="#" class="btn btn-purple">LOGIN</a>
                <span class="close-menu">
                    <em class="icon icon-close"></em>
                </span>
            </div>
            <ul class="nav-menu">
                <li class="active">
                    <a href="index.php">Home <em class="icon icon-arrow-angle-right"></em></a>
                </li>
                <li>
                    <a href="#">GET INVOLVED <em class="icon icon-arrow-angle-right"></em></a>
                    <div class="submenu">
                        <ul class="clearfix">
                            <li><a href="#">Campaigns</a></li>
                            <li><a href="#">Days of Service</a></li>
                            <li><a href="#">Clubs for Kids & Teens</a></li>
                            <li><a href="#">Nominate an Exceptional Youth</a></li>
                            <li><a href="#">For Classrooms & Schools</a></li>
                            <li><a href="#">Sign Up for Training</a></li>
                            <li><a href="#">Grants</a></li>
                            <li><a href="#">Track Your Service</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">PROJECTS AND CAUSES <em class="icon icon-arrow-angle-right"></em></a></li>
                <li>
                    <a href="#">WHAT WE DO <em class="icon icon-arrow-angle-right"></em></a>
                    <div class="submenu">
                        <ul class="clearfix">
                            <li><a href="#">2016-2017 Calendar</a></li>
                            <li><a href="#">Our Programs</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">RESOURCES <em class="icon icon-arrow-angle-right"></em></a></li>
                <li>
                    <a href="#">STORIES AND NEWS <em class="icon icon-arrow-angle-right"></em></a>
                    <div class="submenu">
                        <ul class="clearfix">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Newsletter Archive</a></li>
                            <li><a href="#">Press Releases</a></li>
                            <li><a href="#">Tell Your Story</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>