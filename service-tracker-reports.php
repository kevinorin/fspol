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
            <div class="banner-text cleafix">
                <div class="banner-left">
                    <h1>Past Service Tracker Reports</h1>
                </div>
                <div class="banner-right">
                    <a href="dashboard.php" class="btn btn-white btn-outline">MY DASHBOARD</a>
                </div>
            </div>
        </div>
    </div>
</section>
  
  <!-- Content Start -->
  <div id="content">
  	<section class="section-block ltgrey-bg filter-form-section">
        <div class="container">
            <div class="filter-form">
              <form>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="label-title">TRACKED IN</label>
                      <select class="form-control js-select grey-light-out-select" title="West Dallas Enviro Cl..">
                        <option>West Dallas Enviro Cl..</option>
                        <option>Select 2</option>
                        <option>Select 3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="label-title">TRACKED IN</label>
                      <select class="form-control js-select grey-light-out-select" title="Everyone">
                        <option>Everyone</option>
                        <option>Select 2</option>
                        <option>Select 3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="label-title">YOUTH PARTICIPANT</label>
                      <select class="form-control js-select grey-light-out-select" title="All">
                        <option>All</option>
                        <option>Select 2</option>
                        <option>Select 3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="label-title">FROM DATE</label>
                      <input type="text" class="form-control" placeholder="dd / mm / yyyy">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="label-title">to DATE</label>
                      <input type="text" class="form-control" placeholder="dd / mm / yyyy">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="text-right">
                      <button type="button" class="btn btn-blue">APPLY FILTERS</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </section>
    <section class="tracker-section">
      <div class="container">
        <div class="tracker-title">
          <h2 class="h2 navyblue">Total of 302 hrs in 25 service tracker reports, and 5 legacy service tracker reports</h2>
          <div class="info-help">
            <span class="info-tool orange-bg white">
              <em class="icon icon-info"></em>
            </span>
            <a href="#" class="cyan">What is a "Legacy" Report?</a>
          </div>
        </div>
        <div class="tracker-table-outer">
        <div class="tracker-table">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="fixed-td">PROJECT NAME</th>
                <th>TRACKED BY</th>
                <th>DATE</th>
                <th>HOURS</th>
                <th>YOUTHS</th>
                <th>ADULTS</th>
                <th>ACTIONS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fixed-td">Animal Shelter Helpers</td>
                <td>David Smith</td>
                <td>12 Jan 2017</td>
                <td>2</td>
                <td>15</td>
                <td>2</td>
                <td><a href="#" class="btn btn-xgreen">VIEW REPORT</a></td>
              </tr>
              <tr>
                <td class="fixed-td">Park Cleanup</td>
                <td>Hope Watt</td>
                <td>4 Jan 2017</td>
                <td>6</td>
                <td>18</td>
                <td>1</td>
                <td><a href="#" class="btn btn-xgreen">VIEW REPORT</a></td>
              </tr>
              <tr>
                <td class="fixed-td">Animal Shelter Helpers</td>
                <td>David Smith</td>
                <td>12 Jan 2017</td>
                <td>2</td>
                <td>15</td>
                <td>2</td>
                <td><a href="#" class="btn btn-xgreen">VIEW REPORT</a></td>
              </tr>
              <tr>
                <td class="fixed-td">Park Cleanup</td>
                <td>Hope Watt</td>
                <td>4 Jan 2017</td>
                <td>6</td>
                <td>18</td>
                <td>1</td>
                <td><a href="#" class="btn btn-nevyblue">VIEW REPORT</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
        <div class="pagin-block">
            <div class="row">
              <div class="col-sm-4 col-xs-4">
                <a href="#" class="btn btn-grey btn-outline page-btn-prev"><em class="icon icon-arrow-angle-left"></em> <span>PREV</span></a>
              </div>
              <div class="col-sm-4 col-xs-4 text-center">
                <div class="pagin-number navyblue">
                  1 of 23
                </div>
              </div>
              <div class="col-sm-4 col-xs-4 text-right">
                <a href="#" class="btn btn-blue btn-outline btn-light page-btn-next"><em class="icon icon-arrow-angle-right"></em> <span>NEXT</span></a>
              </div>
            </div>
          </div>
      </div>
    </section>
    <section class="csv-section">
      <div class="container">
        <div class="csv-wrapper">
          <div class="cyan-bg white csv-block">
            <div class="csv-block-inner">
              <h2 class="h2">Need some numbers?</h2>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
              <div class="info-help">
                <span class="info-tool orange-bg white">
                  <em class="icon icon-info"></em>
                </span>
                <a href="#" class="white">What is a "Legacy" Report?</a>
              </div>
              <a href="#" class="btn btn-blue">Export data to excel (CSV File)</a>
            </div>
          </div>  
        </div>
      </div>
    </section>
  </div>

	<?php include_once("footer.php"); ?>
</div><!--wrapper -->
</body>
</html>