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
                  <li>
                    <div class="step-number">
                      <span>2</span>
                    </div>
                    <span>Impact</span>
                  </li>
                  <li class="active">
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
                              <p>I would like to share my story</p>
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
                            <div class="form-group">
                              <label class="label-title">TELL US ABOUT HOW YOUR PROJECT MADE A DIFFERENCE</label>
                              <textarea class="form-control text-area-sm" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                              <label class="label-title">WHAT DID YOU OR YOUR GROUP LEARN BY DOING THIS PROJECT?</label>
                              <textarea class="form-control text-area-sm" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                              <label class="label-title">THE MOST MEMORABLE PART WAS ...</label>
                              <textarea class="form-control text-area-sm" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                              <label class="label-title">DO YOU HAVE ANY PICTURES YOU CAN UPLOAD ?</label>
                              <div class="file-upload-block">
                                <input type="text" class="form-control">
                                <div class="file-upload">
                                  <input type="file">
                                  <span class="btn btn-blue">
                                    SELECT FILES
                                  </span>
                                </div>
                              </div>
                              <P>Upload jpg ﬁles smaller that 10mb.</P>
                            </div>
                            <div class="checkbox style-checkbox purple-checkbox">
                                <label>
                                  <input type="checkbox"> I agree that generationOn can publish my story and images
                                  <span class="check-style">
                                    <em class="fa fa-check"></em>
                                  </span>
                                </label>
                              </div>
                          </div>
                      </form>
                    </div>
              </div>
              <div class="track-footer clearfix">
                <a href="track-service-3.php" class="btn btn-grey btn-outline pull-left">BACK</a>
                <a href="track-service-4.php" class="btn btn-blue pull-right">NEXT</a>
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