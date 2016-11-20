<?php
    include('common/header.php');
	$currentPage = "home_slider";
    include('common/left-menu.php');
?>

<div id="page-wrapper">
	<div id="page-inner" class="">
        <div class="col-md-12">
            <h1 class="page-header">
                New Home Slider
            </h1>
        </div>
		<div class="col-lg-12 ">
			<div class="panel panel-default padding-40 panel-body col-lg-12">
				<form name="homeSliderForm" >
					<input type="hidden" name="homeSlidervalidate" id="homeSlidervalidate" />
					<div class="form-group col-lg-12">
                        <div class="col-lg-3">
    					   <label>Photo upload <span class="required">*</span></label>
                        </div>
                        <div class="col-lg-4">
							<input type="file" name="slider_image" id="slider_image" />
							<span class="errorMessage">Pls upload the file</span>
                        </div>
					</div>
					<div class="form-group col-lg-12">
                        <div class="col-lg-3">
    						<label>Title<span class="required">*</span></label>
                        </div>
                        <div class="col-lg-4">
							<input type="text" name="title" id="title" class="form-control" />
    						<span class="errorMessage">Pls enter the title name</span>
    					</div>
                    </div>
					<div class="form-group col-lg-12">
                        <div class="col-lg-3">
    						<label>Link<span class="required">*</span></label> 
                        </div>
                        <div class="col-lg-4">
							<input type="text" name="link" id="link" class="form-control" />
    						<span class="errorMessage">Pls enter the link name</span>
    					</div>
                    </div>
					<div class="form-group col-lg-12">
                        <div class="col-lg-3">
    						<label>Status <span class="errorMessage">*</span></label>
                        </div>
                        <div class="col-lg-4">
    						<label class="radio-inline"><input id="optionsRadiosInline1" type="radio" checked="" value="option1" name="optionsRadiosInline">Active</label>
    						<label class="radio-inline"><input id="optionsRadiosInline2" type="radio" value="option2" name="optionsRadiosInline">Inactive</label>
                        </div>
					</div>
                    <div class="col-lg-6 col-lg-offset-3 p-l-25">
    					<button onclick="sliderFormValidation(e);" >Submit</button>
    					<a href="home-slider.php" ><button class="btn btn-default">Cancel</button></a>
                    </div>
				</form>
			</div>
		</div>
		<!-- /. ROW  -->
	 </div>
    <!-- /. ROW  -->
	<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
</div>
<script>
    	function sliderFormValidation(e){
			e.preventDefault();
    		var title = $.trim($("#title").val());
    		var link = $.trim($("#link").val());
    		if(title == ''){
    			$("#title").next().show();
    			$("#title").focus();
    			return false;
    		} else if(link == ""){
    			$("#link").next().show();
    			$("#password").focus();
    			return false;
    		}
    		$(".errorMessage").html("");
    		$("#homeSlidervalidate").val("yes");
    		return true;
    	}

    </script>
<!-- /. PAGE INNER  -->
<?php
    include('common/footer.php');
?>