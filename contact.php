
<?php
require_once "header.php";
require_once "menu.php";
?>
<style rel="stylesheet" class="css/text">
	.bloc_left_price {
		color: #c01508;
		text-align: center;
		font-weight: bold;
		font-size: 150%;
	}
	.category_block li:hover {
		background-color: #007bff;
	}
	.category_block li:hover a {
		color: #ffffff;
	}
	.category_block li a {
		color: #343a40;
	}
	.add_to_cart_block .price {
		color: #c01508;
		text-align: center;
		font-weight: bold;
		font-size: 200%;
		margin-bottom: 0;
	}
	.add_to_cart_block .price_discounted {
		color: #343a40;
		text-align: center;
		text-decoration: line-through;
		font-size: 140%;
	}
	.product_rassurance {
		padding: 10px;
		margin-top: 15px;
		background: #ffffff;
		border: 1px solid #6c757d;
		color: #6c757d;
	}
	.product_rassurance .list-inline {
		margin-bottom: 0;
		text-transform: uppercase;
		text-align: center;
	}
	.product_rassurance .list-inline li:hover {
		color: #343a40;
	}
	.reviews_product .fa-star {
		color: gold;
	}
	.pagination {
		margin-top: 20px;
	}


</style>
<div class="container">
	<h1 style="font-size:60px;font-family:arial black;text-align:center;" >Contact Us</h1>
	<div class="row">

		<div class="col-lg-6 col-12" style="padding-top:100px; padding-bottom:50px">
			<div class="card">
				<div class="card-header bg-dark text-white"><i class="fa fa-envelope"></i> Contact us.
				</div>
				<div class="card-body">
					<form id="fm">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
						</div>
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="message">Message</label>
							<textarea class="form-control" id="message" rows="6" required></textarea>
						</div>
						<div class="mx-auto">
							<button id="sub" style="border-radius:10px" type="submit" class="btn btn-primary text-right">Submit</button></div>
						</form>

					</div>
				</div>
				<div id="msg"></div>
			</div>
			<div class="col-lg-6 col-12 pl-4" style="padding: 100px 0px">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.741545291549!2d88.64127191541438!3d25.646702083689117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb52afca210ba3%3A0x31f77d3b78ae3e0f!2sSuihari%20Ashram%2C%20Dinajpur!5e0!3m2!1sen!2sbd!4v1586354182917!5m2!1sen!2sbd" width="100%" height="480px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

			</div>
		</div>
		<div class="row pb-5">
			<div class="col-12">
				<div class="card bg-light mb-3">
					<div class="card-header bg-dark text-white text-uppercase text-center"><i class="fa fa-home"></i> Address</div>
					<div class="card-body text-center">
						<p>26, SS7, 47301 Petaling Jaya</p>
						<p>Selangor</p>
						<p>Malaysia</p>
						<p>Email : skssujon90@gmail.com</p>
						<p>Tel. +60 11 2803 8630</p>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->



	<?php

include 'footer.php';

?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#sub").click(function(even){
			even.preventDefault();
			var name = $("#name").val();
			var email = $("#email").val();
			var message = $("#message").val();
			$.ajax({
				url:"contac_data.php",
				type:"POST",
				data:{name:name,email:email,message:message},
				success:function(data){
					$("#msg").html(data)
					$("#fm").trigger("reset");
				}
			})
		})
	})
</script>