<?php require_once 'partials/header.php'; ?>
<style type="text/css">
	.sales--body .col-operations .vc_col-md-6{
		margin: 0 15px;
		padding: 0;
		width: calc(50% - 30px);
		text-align: left;
		vertical-align: top;
		border-radius: 5px;
		overflow: hidden;
	}
	.sales--body .col-features, .sales--body .col-operations .vc_col-md-6 {
	    background: #fff;
	    -webkit-box-shadow: 0 10px 20px 0 rgba(0,0,0,.1);
	    box-shadow: 0 10px 20px 0 rgba(0,0,0,.1);
	}
	.sales--body .col-operations .vc_column-inner {
	    padding: 0;
	}
	.sales--body .vc_col-md-6 .vc_column-inner {
	    background-size: contain;
	    background-repeat: no-repeat;
	    background-position: 50%;
	}
	.sales--body .vc_col-md-6 h5 {
	    padding: 13px 15px 12px;
	    font-size: 16px;
	    line-height: 1.5;
	    color: #fff;
	    text-align: center;
	    background: #16355f !important;
	    text-transform: uppercase;
	    letter-spacing: .2em;
	    border-radius: 5px 0px 0px;
	    font-family: Proxima Nova,sans-serif !important;
	    width: 100%;
	}
	.sales--body .col-operations .vc_col-md-6 ul {
	    overflow: hidden;
	    padding: 14px 22px;
	}
	.sales--body .vc_col-md-6 ul {
	    list-style: none;
	}
	.sales--body .col-operations .vc_col-md-6 ul li {
	    display: inline-block;
	    vertical-align: top;
	    padding: 0 15px 26px 30px;
	    width: 49%;
	    font-weight: 600;
	}
	.sales--body .vc_col-md-6 ul li {
	    position: relative;
	    padding: 0 0 16px 26px;
	    max-width: 90%;
	    font-size: 14px;
	    line-height: 1.57;
	    color: #16355f;
	    font-weight: 600;
	}
	.sales--body .col-operations .vc_col-md-6 ul li:before {
	    top: 3px;
	}
	.sales--body .vc_col-md-6 ul li:before {
	    position: absolute;
	    top: 2px;
	    left: 0;
	    width: 12px;
	    height: 16px;
	    display: block;
	    content: "";
	    width: 0;
	    height: 0;
	    border-style: solid;
	    border-width: 8px 0 8px 12px;
	    border-color: transparent transparent transparent #00bac4;
	}

	.gform_wrapper .gform_footer .gform_button {
	    margin: 0!important;
	    padding: 15px 30px 15px!important;
	    font-family: Proxima Nova, sans-serif!important;
	    font-size: 14px!important;
	    line-height: 1!important;
	    color: #fff!important;
	    letter-spacing: .2em!important;
	    font-weight: 700!important;
	    border: 2px solid #fff!important;
	    background: #00b9c4!important;
	    -webkit-transition: all .3s;
	    -o-transition: all .3s;
	    transition: all .3s;
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
   $result = $Message->saveContactMessage($_POST);
}
?>

	<section class="section section--sales">
		<section class="section section--title">
			<div class="section--title-bg" style="background-image:url(images/POS-1920x0.jpg);"></div>
			<div class="shell">
				<img src="images/POS-orange.svg" alt="" />
				<h1>Hishab Nikas - Point of Sale</h1>
				<i class="ico ico--arrow-down">
					<a href="#" class="move__down"></a>
				</i>
			</div><!-- /.shell -->
		</section><!-- /.section section-/-title -->

		<section class="section section--intro section--intro-yellow" id="intro">
			<div class="shell">
				<h4><p>“HishabNikas” delivers lightning cash transactions endless configure ability and best in class security features, all backed by some of the top minds in the field.</p></h4>
			</div><!-- /.shell -->
		</section><!-- /.section section-/-intro -->
		<?php require_once 'helpers/errors.php'; ?>
		<section class="section sales--body">
			<div class="shell">
				<section class="vc_section">
					<div class="vc_row wpb_row vc_row-fluid">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element " >
										<div class="wpb_wrapper">
											<h4 style="text-align: center;">Purpose-built for all retails and wholesales including Fashion House, Super Shop, Travel Agency, Publications, Book store, Varieties shop etc.</h4>
											<h5 style="text-align: center;"> If you want to take your business to the next level you need “HishabNikas” POS solution.</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="vc_row wpb_row vc_row-fluid">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div class="wpb_text_column wpb_content_element " >
									<div class="wpb_wrapper">
										<h3 style="text-align: center;">Your Facility <em>at Your</em> Fingertips</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section class="vc_section col-features">
					<div class="vc_row wpb_row vc_row-fluid">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="vc_row wpb_row vc_inner vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-md-6">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element">
														<div class="wpb_wrapper">
															<p>Techadea’s HishabNikas POS Solution is the ultimate point of sale for all type of business at the best possible price with reliable plans. i.e.: Monthly, Quarterly & Annual basis.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-md-6">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element">
														<div class="wpb_wrapper">
															<p>You can simply proceed to use the POS Solutions without having to buy separate domain and hosting as it’s an online system and we’re providing you a sub-domain to use it as your own.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-md-6 res-m-t-5" style="margin-top: 30px;">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element">
														<div class="wpb_wrapper">
															<p>However if you want, we can set up the POS solution under your own domain featuring your company name, but the storage and domain will have to be purchased accordingly.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-md-6 res-m-t-5" style="    margin-top: 30px;">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element">
														<div class="wpb_wrapper">
															<p>You can access your system and keep track of your sales and purchases from anywhere across the world on your laptop or via your smartphone which is of utmost importance for the owners / managers of the business in this age of globalization & global market.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="vc_row wpb_row vc_row-fluid col-operations">
					<div class="left--block wpb_column vc_column_container vc_col-md-12 col-sm-12 col-xs-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div class="vc_row wpb_row vc_inner vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-md-6 col-sm-12 col-xs-12">
										<div class="vc_column-inner " style="height:auto;">
											<div class="wpb_wrapper">
												<div class="wpb_text_column wpb_content_element " >
													<div class="wpb_wrapper">
														<h5>Why HishabNikas?</h5>
													</div>
												</div>
												<div class="wpb_text_column wpb_content_element " >
													<div class="wpb_wrapper">
														<div class="bullet">
														    <ul>
														      <li>Sell item as per your industry in whole sale, retails, discounted rates</li>
														      <li class="hidden-sm hidden-xs">Manages:Company,Branch,<br>employee,payroll,customers,<br>suppliers,inventory,<br>stock(branchwise)bankbook,<br>Cashbook and many more.</li>
														      <li class="hidden-lg hidden-md">Manages:<br>Company,Branch,<br>employee,payroll,<br>customers,suppliers,<br>inventory,stock<br>(branchwise)bankbook,<br>Cashbook and many more.</li>
														      <!-- <li>Manages:Company,Branch,employee,payroll,customers,suppliers,inventory,stock(branchwise)bankbook,Cashbook and many more.
														      </li> -->
														      <li>Give Customers / suppliers incentive with discount.</li>
														      <li>Create invoice with your company logo and details.</li>
														      <li>Customize access to employees/managers.</li>
														      <li>Manage HR/Payroll.</li>
														      <li>Check journals in any required format.</li>
														      <li>Multiple branch accessibility.</li>
														    </ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-md-6 col-sm-12 col-xs-12">
										<div class="vc_column-inner " style="height:auto;">
											<div class="wpb_wrapper">
												<div class="wpb_text_column wpb_content_element " >
													<div class="wpb_wrapper">
														<h5>Features</h5>
													</div>
												</div>
												<div class="wpb_text_column wpb_content_element " >
													<div class="wpb_wrapper">
														<ul>
															<li>DASHBOARD</li>
															<li>SALES</li>
															<li>PURCHASE</li>
															<li>INVENTORY</li>
															<li>REPORTS</li>
															<li>ACCOUNTS</li>
															<li>PAYROLL</li>
															<li>HUMAN RESOURCE</li>
															<li>SETTINGS</li>
															<li>USERS</li>
														</ul>
													</div>
												</div>
												<div style="float:right;margin-right: 20px;">
													<a href="http://www.hishabnikas.com/doc" class="btn btn--large res-btn-lg" target="_blank" style="padding:8px;font-size:12px;">
													See full documentation</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.shell -->
		</section><!-- /.section sales-/-body -->
	</section><!-- /.section section-/-sales -->

	
	<section class="section sales--online">
		<div class="shell">
			<div class="entry">
				<h3>Try-Out Our POS Solution</h3>
				<p>Contact us to schedule a demo of HishabNikas today and we&#039;ll be happy to show you how our next-generation POS solution can make a difference for your business.</p>
						<div class="section__actions">
							<button type="button" class="btn btn--large" data-toggle="modal" data-target="#exampleModal">
							  Request a Demo
							</button>
						</div><!-- /.section__actions -->

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document" style="max-width: 500px;">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Request A Demo</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
    							<div class="section__form">			
                    				<div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_1' >
                    					<form method='post' name="myForm" onsubmit="return validateForm()" enctype='multipart/form-data'  action=''>
                    					<?php
                    					  $rand=rand();
                    					  $_SESSION['rand']=$rand;
                    					?>
                    					<input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                            				<div class='gform_body'>
                            				
                            					<ul id='gform_fields_1' class='gform_fields top_label form_sublabel_below description_below'>
                            						<li id='field_1_1'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible gfield--text gfield--medium' >
                            							<label class='gfield_label' for='input_1_1' >Name<span class='gfield_required'>*</span></label>
                        								<div class='ginput_container ginput_container_text'>
                        									<input name='name' id='input_1_1' type='text' value='' class='medium'  tabindex='49'  placeholder='Name' aria-required="true" aria-invalid="false" />
                        								</div>
                            						</li>
                            						<li id='field_1_2'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible gfield--text gfield--medium' >
                            							<label class='gfield_label' for='input_1_2' >Company Name<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'>
                            								<input name='company' id='input_1_2' type='text' value='' class='medium'  tabindex='50'  placeholder='Company Name' aria-required="true" aria-invalid="false" />
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
                                				</ul>
                                			</div>
    								        <div class='gform_footer top_label' style="text-align: center;"> 
    								        	<input type='submit' name="submit" id='gform_submit_button_1' class='gform_button button' value='SUBMIT' tabindex='55'/> 
    								        </div>
                            			</form>
                            		</div>
    							</div>
						      </div>
						    </div>
						  </div>
						</div>
			</div><!-- /.entry -->	
		
		</div><!-- /.shell -->
	</section><!-- /.section sales-/-online -->

	
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
