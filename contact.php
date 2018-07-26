<?php require_once 'partials/header.php'; ?>
<style type="text/css">
	.article .section__form .gform_wrapper ul.gform_fields input, .article .section__form .gform_wrapper ul.gform_fields select, .article .section__form .gform_wrapper ul.gform_fields textarea {
	    text-transform: unset!important;
	    
	}
	

	.alert{
		padding: 15px;
		margin-bottom: 20px;
		border: 1px solid transparent;
		border-radius: 4px;
	}
	.alert-danger {
	    color: #a94442;
	    background-color: #f2dede;
	    border-color: #ebccd1;
	}
	
</style>

<?php
  spl_autoload_register('my_autoload');
  function my_autoload($className){
    require_once 'classes/'.$className.'.php';
  }
  $Message = new Message();
?>
<?php 
$result = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && $_POST['randcheck']==$_SESSION['rand']) {
   $result = $Message->saveUserMessage($_POST);
}
?>
	<section class="section section--company">
		<section class="section section--title">
			<div class="section--title-bg" style="background-image: url(images/company-bg-1920x0.jpg);"></div>
			<div class="shell">
				<h1>Contact</h1>
				<i class="ico ico--arrow-down">
					<a href="#" class="move__down"></a>
				</i>
			</div><!-- /.shell -->
		</section><!-- /.section section-/-title -->

		<section class="section section--intro" id="intro">
			<div class="shell">
				<h4><p>Have a question about our business or our POS Solution, Please call us. We would love to speak to you or visit you at your facility.</p></h4>
			</div><!-- /.shell -->
		</section><!-- /.section section-/-intro -->

		<main class="main">
			<div class="shell">
				<div class="main__body before">
					<div class="content">
						<article class="article article__company">
							<div class="section__form">			
                				<div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_1' >
                					<form method='post' name="myForm" onsubmit="return validateForm()" enctype='multipart/form-data'  action=''>
                					<?php
                					  $rand=rand();
                					  $_SESSION['rand']=$rand;
                					?>
                					<input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                        				<div class='gform_body'>
                        				<?php require_once 'helpers/errors.php'; ?>
                        					<ul id='gform_fields_1' class='gform_fields top_label form_sublabel_below description_below'>
                        						<li id='field_1_1'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible gfield--text gfield--medium' >
                        							<label class='gfield_label' for='input_1_1' >First Name<span class='gfield_required'>*</span></label>
                    								<div class='ginput_container ginput_container_text'>
                    									<input name='firstname' id='input_1_1' type='text' value='' class='medium'  tabindex='49'  placeholder='First Name' aria-required="true" aria-invalid="false" />
                    								</div>
                        						</li>
                        						<li id='field_1_2'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible gfield--text gfield--medium' >
                        							<label class='gfield_label' for='input_1_2' >Last Name<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'>
                        								<input name='lastname' id='input_1_2' type='text' value='' class='medium'  tabindex='50'  placeholder='Last Name' aria-required="true" aria-invalid="false" />
                        							</div>
                        						</li>
                        						<li id='field_1_3'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible gfield--email gfield--medium' >
                        							<label class='gfield_label' for='input_1_3' >Email Address<span class='gfield_required'>*</span></label>
                        							<div class='ginput_container ginput_container_email'>
                            							<input name='email' id='input_1_3' type='text' value='' class='medium' tabindex='51'   placeholder='Email Address' aria-required="true" aria-invalid="false"/>
                        							</div>
                        						</li>
                        						<li id='phone'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible gfield--phone gfield--medium' >
                        							<label class='gfield_label' for='input_1_4' >Phone Number<span class='gfield_required'>*</span></label>
                        							<div class='ginput_container ginput_container_phone'>
                        								<input name='phone' id='input_1_4' type='text' value='' class='medium' tabindex='52'  placeholder='Phone Number' aria-required="true" aria-invalid="false" />
                        							</div>
                        						</li>
                        						<li id='message'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible gfield--phone gfield--medium' >
                        							<label class='gfield_label' for='input_1_5' >Message<span class='gfield_required'>*</span></label>
                        							<div class='ginput_container ginput_container_phone'>
                        								
                        								<textarea name='message' id='input_1_5' type='text' value='' class='medium' tabindex='52'  placeholder='Write here' aria-required="true" aria-invalid="false" ></textarea>
                        							</div>
                        						</li>
                            				</ul>
                            			</div>
								        <div class='gform_footer top_label'> 
								        	<input type='submit' name="submit" id='gform_submit_button_1' class='gform_button button' value='SUBMIT' tabindex='55'/> 
								        </div>
                        			</form>
                        		</div>
							</div>
						</article><!-- /.article article__company -->
					</div><!-- /.content -->

					<div class="sidebar">
						<ul class="widgets">
							<li id="carbon_fields_boxes-2" class="widget widget_values carbon_fields_boxes"><h3 class="widget__title">Our Core Values</h3>
								<div class="value-box value-box-teal"style="background-color:#00b9c4">
									<div class="value_image">
										<img src="images/company-ico9-85x0.png" alt="" />
									</div><!-- /.value_image -->
									<div class="entry">
										<h4><em>Partnership</em></h4>
										<p>We care about each other and our clients. We succeed when our partners do.</p>
									</div><!-- /.entry -->
								</div><!-- /.value-box -->
								<div class="value-box value-box-teal"style="background-color:#00b9c4">
									<div class="value_image">
										<img src="images/company-ico10-85x0.png" alt="" />
									</div><!-- /.value_image -->
									<div class="entry">
										<h4><em>Integrity</em></h4>
										<p>We keep our promises. We follow through and we do what’s right.</p>
									</div><!-- /.entry -->
								</div><!-- /.value-box -->
								<div class="value-box value-box-teal"style="background-color:#00b9c4">
									<div class="value_image">
										<img src="images/company-ico11-85x0.png" alt="" />
									</div><!-- /.value_image -->
									<div class="entry">
										<h4><em>Accountability</em></h4>
										<p>We take ownership of our roles and how to best serve our clients. We work to perform quickly, accurately and with dedication.</p>
									</div><!-- /.entry -->
								</div><!-- /.value-box -->
								<div class="value-box value-box-teal"style="background-color:#00b9c4">
									<div class="value_image">
										<img src="images/company-ico12-85x0.png" alt="" />
									</div><!-- /.value_image -->
									<div class="entry">
										<h4><em>Innovation</em></h4>
										<p>Our company is the work of many, not one. We listen and always strive to grow and adapt our service and our software.</p>
									</div><!-- /.entry -->
								</div><!-- /.value-box -->
							</li>	
						</ul><!-- /.widgets -->
					</div><!-- /.sidebar -->		
				</div><!-- /.main__body -->
		
				<section class="section section--testimonials">
					<h3 style="margin-top: 0px;"><i class="fa fa-comment-o" aria-hidden="true"></i> Testimonials</h3>
					<div class="testimonial__body">
						<p>
							<em style="color: #fff;font-weight: 400 !important;"><p class="testimonial">"Our increased profitability is due in large part to HishabNikas. The software has paid for itself in less than two months. Through all my research and conversations with peers in the industry, I feel Techadea’s support is the best."</p>
							<strong>Shamal Paul, </strong><em>MD</em><em>
							</em><a href="http://www.puthiniloy.com.bd/" target="_blank" rel="noopener" style="color: #fff;text-decoration:underline;">Puthiniloy Publications Ltd.</a></em>
						</p>
					</div><!-- /.testimonial__body -->
				</section><!-- /.section section-/-testimonials -->
			</div><!-- /.shell -->
		</main><!-- /.main -->
	</section><!-- /.section section-/-company -->
	
	<script>
	function validateForm() {
	    var firstname = document.forms["myForm"]["firstname"].value;
	    var lastname = document.forms["myForm"]["lastname"].value;
	    var email = document.forms["myForm"]["email"].value;
	    var phone = document.forms["myForm"]["phone"].value;
	    var message = document.forms["myForm"]["message"].value;
	    if (firstname == "") {
	    	//alert('hi');
	        $("#input_1_1").addClass("dangerColor");
	    	return false;
	        
	    }else if (lastname == "") {
	    	//alert('hi');
	        $("#input_1_2").addClass("dangerColor");
	    	return false;
	        
	    }else if (email == "") {
	    	//alert('hi');
	        $("#input_1_3").addClass("dangerColor");
	    	return false;
	        
	    }else if (phone == "") {
	    	//alert('hi');
	        $("#input_1_4").addClass("dangerColor");
	    	return false;
	        
	    }else if (message == "") {
	    	//alert('hi');
	        $("#input_1_5").addClass("dangerColor");
	    	return false;
	        
	    }else{
	    	return true;
	    }
	}
	</script>
<?php require_once 'partials/footer.php'; ?>
