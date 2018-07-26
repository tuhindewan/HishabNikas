<?php 
if($result){
	if($result['type']==0){
	?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<script>
			    swal("Email address is invalid");
			</script>
		</div>
	</div>
	<?php	
	}else{
		?>
		<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<script>
			    swal("Thank you for your request, you'll be contacted soon.");
			</script>
		</div>
	</div>
		<?php
	}
}
 ?>