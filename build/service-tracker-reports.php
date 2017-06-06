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
            <em class="fa fa-info orange"></em>
            <a href="#" class="cyan">What is a "Legacy" Report?</a>
          </div>
        </div>
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
    </section>
  </div>

	<?php include_once("footer.php"); ?>
</div><!--wrapper -->
</body>
</html>