<?php require_once 'partials/header.php'; ?>
<style type="text/css">
	#pricing-tables {
	  /*background: url(images/section--intro-bg.png) no-repeat 0 0/cover;*/
	  background-color: #ebebeb ;
	  padding: 30px 0;
	}

	.single-table {
	  background: #fff;
	  transition: all 0.20s linear;
	  /* Bounce To Right */
	}
	.single-table:hover {
	  box-shadow: 0px 3px 3px 0px #888888;
	  transition: all 0.20s linear;
	}
	.single-table .plan-header {
	  background: #082246;
	  color: #fff;
	  text-transform: capitalize;
	  padding: 2px 0;
	}
	.single-table .plan-header h3 {
	  margin: 0;
	  padding: 20px 0 5px 0;
	  text-transform: uppercase;
	}
	.single-table .plan-price {
	  color: #fff;
	  padding: 10px 0;
	  margin: 0;
	  font-size: 30px;
	  border-top: 2px solid #587ca0;
	  font-weight: bold;
	 	text-align: center;
	}
	.single-table .plan-price span {
	  font-size: 18px;
	  font-weight: normal;
	}
	.single-table ul {
	  margin: 0;
	  padding: 20px 0;
	  list-style: none;
	}
	.single-table ul li {
	  padding: 8px 0;
	  margin: 0 20px;
	  border-bottom: 1px solid #dae2ea;
	  font-size: 15px;
	}
	.single-table .plan-submit {
	  display: inline-block;
	  text-decoration: none;
	  margin: 20px 0 30px 0;
	  padding: 10px 40px;
	  border: 1px solid #34495E;
	  color: #34495E;
	  font-size: 15px;
	  text-transform: uppercase;
	}
	.single-table .hvr-bounce-to-right {
	  display: inline-block;
	  vertical-align: middle;
	  -webkit-transform: translateZ(0);
	  transform: translateZ(0);
	  box-shadow: 0 0 1px transparent;
	  -webkit-backface-visibility: hidden;
	  backface-visibility: hidden;
	  -moz-osx-font-smoothing: grayscale;
	  position: relative;
	  transition-property: color;
	  transition-duration: 0.5s;
	}
	.single-table .hvr-bounce-to-right:before {
	  content: "";
	  position: absolute;
	  z-index: -1;
	  top: 0;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  background: #34495E;
	  -webkit-transform: scaleX(0);
	  transform: scaleX(0);
	  -webkit-transform-origin: 0 50%;
	  transform-origin: 0 50%;
	  transition-property: -webkit-transform;
	  transition-property: transform;
	  transition-property: transform, -webkit-transform;
	  transition-duration: 0.5s;
	  transition-timing-function: ease-out;
	}
	.single-table .hvr-bounce-to-right:hover,
	.single-table .hvr-bounce-to-right:focus,
	.single-table .hvr-bounce-to-right:active {
	  color: white;
	}
	.single-table .hvr-bounce-to-right:hover:before,
	.single-table .hvr-bounce-to-right:focus:before,
	.single-table .hvr-bounce-to-right:active:before {
	  -webkit-transform: scaleX(1);
	  transform: scaleX(1);
	  transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
	}

	.pricing_note{
		color: #16355f;font-size: 25px;margin-top: 40px;
	}

	@media only screen and (max-width: 600px) {
		#pricing-tables .col-md-3{
			margin-bottom: 40px;
		}
		.pricing_note{
			color: #16355f;font-size: 17px;margin-top: 40px;text-align: justify;
		}
	}

</style>
	<section class="section section--company">
		<section class="section section--title">
			<div class="shell">
				<h1>Billing Policy</h1>
				<i class="ico ico--arrow-down">
				<a href="#" class="move__down"></a>
				</i>
			</div><!-- /.shell -->
		</section><!-- /.section section-/-title -->

		<main class="main full-width">
			<div class="shell" style="max-width: 1220px;">
				<div class="main__body">
					<div class="content">
						<article class="article article__company">
							<!-- pricing table  -->
							    <section id="pricing-tables">
							        <div class="container">
							            <div class="col-md-3 col-sm-6 col-xs-12">
							                <div class="single-table text-center">
							                    <div class="plan-header">
							                        <h3 style="color:#fff;text-align:center;">bronze</h3>
							                        <p>plan for basic user</p>
							                        <h4 class="plan-price">BDT 1290<span>/month</span></h4>
							                    </div>


							                    <ul class="plan-features">
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                    </ul>
							                    <a href="#" class="plan-submit hvr-bounce-to-right">buy now</a>
							                </div>
							            </div>
							            <div class="col-md-3 col-sm-6 col-xs-12">
							                <div class="single-table text-center">
							                    <div class="plan-header">
							                        <h3 style="color:#fff;text-align:center;">silver</h3>
							                        <p>plan for basic user</p>
							                        <h4 class="plan-price">$30<span>/month</span></h4>
							                    </div>


							                    <ul class="plan-features">
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                    </ul>
							                    <a href="#" class="plan-submit hvr-bounce-to-right">buy now</a>
							                </div>
							            </div>
							            <div class="col-md-3 col-sm-6 col-xs-12">
							                <div class="single-table text-center">
							                    <div class="plan-header">
							                        <h3 style="color:#fff;text-align:center;">gold</h3>
							                        <p>plan for basic user</p>
							                        <h4 class="plan-price">$30<span>/month</span></h4>
							                    </div>


							                    <ul class="plan-features">
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                    </ul>
							                    <a href="#" class="plan-submit hvr-bounce-to-right">buy now</a>
							                </div>
							            </div>
							            <div class="col-md-3 col-sm-6 col-xs-12">
							                <div class="single-table text-center">
							                    <div class="plan-header">
							                        <h3 style="color:#fff;text-align:center;">platinum</h3>
							                        <p>plan for basic user</p>
							                        <h4 class="plan-price">$30<span>/month</span></h4>
							                    </div>


							                    <ul class="plan-features">
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                        <li>10 Free PSD files</li>
							                    </ul>
							                    <a href="#" class="plan-submit hvr-bounce-to-right">buy now</a>
							                </div>
							            </div>
							        </div>

							    </section>
							    
							    <!-- end priceing table -->
						</article><!-- /.article article__company -->
						<div class="pricing_note">
							<p>** The packages may be customized depending on the need of business concerned.</p>
							<p>** Special discount upto 30% avilable for annual subscription payable at once.</p>
						</div>
					</div><!-- /.content -->
				</div><!-- /.main__body -->

			</div><!-- /.shell -->
		</main><!-- /.main -->
	</section><!-- /.section section-/-company -->
<?php require_once 'partials/footer.php'; ?>
