<html>
<head>
  <?php include_once("head.php"); ?>
  <title>Generation On</title>  
</head>
<body>
	<div id="wrapper">
	<?php include_once("header.php"); ?>
	
  <!-- Banner Start -->
  <?php include_once("banner-inner-center.php"); ?>
  
  <!-- Content Start -->
  <div id="content">
  	<section class="light-md-grey track-service-section track-service-1">
        <div class="container">
          <div class="track-service-center content-center-part center-block white-bg panel-shadow">
            <div class="track-service-inner">
              <div class="track-steps text-center">
                <ul class="clearfix">
                  <li>
                    <div class="step-number">
                      <span>1</span>
                    </div>
                    <span>Project Info</span>
                  </li>
                  <li class="active">
                    <div class="step-number">
                      <span>2</span>
                    </div>
                    <span>Impact</span>
                  </li>
                  <li>
                    <div class="step-number">
                      <span>3</span>
                    </div>
                    <span>Story</span>
                  </li>
                  <li>
                    <div class="step-number">
                      <span>4</span>
                    </div>
                    <span>Participation</span>
                  </li>
                </ul>
              </div>
              <div class="track-body">
                    <div class="track-body-grey light-md-grey"></div>
                    <div class="track-body-content">
                      <h2 class="h2 h2-sub">Your Project's Impact</h2>
                      <form>
                        <div class="bordered-field-block">
                            <div class="option-block">
                              <p>Was this project part of an official generationOn Campaign or Day of Service?</p>
                              <div class="radio-group">
                                <div class="radio-inline style-radio purple-radio">
                                  <label>
                                    <input type="radio" name="radio-1" checked>Yes
                                    <span class="check-style">
                                      <span></span>
                                    </span>
                                  </label>
                                </div>
                                <div class="radio-inline style-radio purple-radio">
                                  <label>
                                    <input type="radio" name="radio-1">No
                                    <span class="check-style">
                                      <span></span>
                                    </span>
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bordered-field-block">
                            <div class="option-block">
                              <p>Did you collect or create anything as part of the project?</p>
                              <div class="radio-group">
                                <div class="radio-inline style-radio purple-radio">
                                  <label>
                                    <input type="radio" name="radio-2" checked>Yes
                                    <span class="check-style">
                                      <span></span>
                                    </span>
                                  </label>
                                </div>
                                <div class="radio-inline style-radio purple-radio">
                                  <label>
                                    <input type="radio" name="radio-2">No
                                    <span class="check-style">
                                      <span></span>
                                    </span>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="drop-filedset">
                              <div class="gray-box-formset tool-filed">
                                <div class="clearfix">
                                  <div class="gray-box-require orange">
                                    <span>REQUIRED</span>
                                  </div>
                                  <div class="gray-box-remove">
                                    <button type="button">REMOVE</button>
                                  </div>
                                </div>
                                <div class="form-group">
                                   <label>What did you collect or create?</label>
                                   <input type="text" class="form-control" placeholder="e.g Garbage">
                                </div>
                                <div class="form-group last-form-group">
                                  <div class="option-block field-hours">
                                    <p>How many items were collected or created?</p>
                                    <div class="radio-group">
                                      <input class="form-control" type="text" placeholder="000">
                                      <span>Hours</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="tool-info">
                                  <div class="tool-info-inner">
                                    <em class="fa fa-info orange"></em>
                                    For each type of item you collect (eg. Bags of Garbage, Cards for Vets, Winter Jackets) add a seperate item record
                                  </div>
                                </div>
                              </div>
                              <div class="add-new-field">
                                <a href="#" class="blue">+ Add another item</a>
                              </div>
                            </div>
                        </div>
                        <div class="bordered-field-block">
                            <div class="option-block">
                              <p>Did you educate any people though the project?</p>
                              <div class="radio-group">
                                <div class="radio-inline style-radio purple-radio">
                                  <label>
                                    <input type="radio" name="radio-1">Yes
                                    <span class="check-style">
                                      <span></span>
                                    </span>
                                  </label>
                                </div>
                                <div class="radio-inline style-radio purple-radio">
                                  <label>
                                    <input type="radio" name="radio-1">No
                                    <span class="check-style">
                                      <span></span>
                                    </span>
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bordered-field-block">
                            <div class="option-block">
                              <p>Did you serve any people though the project?</p>
                              <div class="radio-group">
                                <div class="radio-inline style-radio purple-radio">
                                  <label>
                                    <input type="radio" name="radio-2">Yes
                                    <span class="check-style">
                                      <span></span>
                                    </span>
                                  </label>
                                </div>
                                <div class="radio-inline style-radio purple-radio">
                                  <label>
                                    <input type="radio" name="radio-2">No
                                    <span class="check-style">
                                      <span></span>
                                    </span>
                                  </label>
                                </div>
                              </div>
                            </div>
                        </div>
                      </form>
                    </div>
              </div>
              <div class="track-footer clearfix">
                <a href="track-service-2.php" class="btn btn-grey btn-outline pull-left">BACK</a>
                <a href="track-service-3.php" class="btn btn-blue pull-right">NEXT</a>
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