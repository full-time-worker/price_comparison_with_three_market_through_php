
<?php
	require_once('header.php');
	try {
		$conn = new PDO("mysql:host=localhost;dbname=market;","root","");
		$p_add = "INSERT INTO location (e_location,d_location,d_location2,e_location2,d_location3,e_location3) VALUES (?,?,?,?,?,?) ";
		$add_data = $conn->prepare($p_add);
		
		//ROW COUNT CODE HERE 
		$s_o = "SELECT * FROM location";
		$show_offer = $conn->prepare($s_o);	
		$show_offer->execute();
		$rowCount = $show_offer->rowCount();
		if(isset($_REQUEST["set_l"])){
			if($rowCount == 1){
				$msg =  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
				<strong>Delete</strong> your old market location
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
				}else{
				$add_data->execute(array(str_replace('width="600"', ' width="100%"', $_REQUEST["e_location"]),$_REQUEST["d_location"],$_REQUEST["d_location2"],str_replace('width="600"', ' width="100%"', $_REQUEST["e_location2"]),$_REQUEST["d_location3"],str_replace('width="600"', ' width="100%"', $_REQUEST["e_location3"])));
				
				$msg = " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
				<strong>Location</strong> Set Successfully
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
			}
		}
		
	}	
	catch (Exception $e) {
		error_log($e->getMessage());
	};
	
?>



<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-4 mt-5">
			<form class="form-horizontal" method="post" action="">
				<h1  class="display-4 text-center">Market-1</h1>
				<div class="form-group pt-3 my-4">
					<label for="post_title" class="cols-sm-2 control-label "></label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i style="font-size:20px" class="fa fa-map-marker" aria-hidden="true"></i>
</span>
							<input type="text" class="form-control" name="e_location" placeholder="Enter Market Location Embed Code" />
						</div>
					</div>
				</div>
				
				<div class="form-group my-4">
					<label for="m_one" class="cols-sm-2 control-label"></label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i style="font-size:20px" class="fa fa-map-marker" aria-hidden="true"></i>
</span>
							<input type="text" class="form-control" name="d_location" placeholder="Enter Market Location Name"/>
						</div>
					</div>
				</div>
				<!--MARKET-2 -->
				<h1  class="display-4 text-center">Market-2</h1>
				<div class="form-group pt-3 my-4">
					<label for="post_title" class="cols-sm-2 control-label "></label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i style="font-size:20px" class="fa fa-map-marker" aria-hidden="true"></i>
</span>
							<input type="text" class="form-control" name="e_location2" placeholder="Enter Market Location Embed Code" />
						</div>
					</div>
				</div>
				
				<div class="form-group my-4">
					<label for="m_one" class="cols-sm-2 control-label"></label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i style="font-size:20px" class="fa fa-map-marker" aria-hidden="true"></i>
</span>
							<input type="text" class="form-control" name="d_location2" placeholder="Enter Market Location Name"/>
						</div>
					</div>
				</div>
				<!--MARKET-3 -->
				<h1  class="display-4 text-center">Market-3</h1>
				<div class="form-group pt-3 my-4">
					<label for="post_title" class="cols-sm-2 control-label "></label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i style="font-size:20px" class="fa fa-map-marker" aria-hidden="true"></i>
</span>
							<input type="text" class="form-control" name="e_location3" placeholder="Enter Market Location Embed Code" />
						</div>
					</div>
				</div>
				
				<div class="form-group my-4">
					<label for="m_one" class="cols-sm-2 control-label"></label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i style="font-size:20px" class="fa fa-map-marker" aria-hidden="true"></i>
</span>
							<input type="text" class="form-control" name="d_location3" placeholder="Enter Market Location Name"/>
						</div>
					</div>
				</div>
				
				
				<div class="form-group my-4">
					<button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="set_l">ADD Location</button>
				</div>
				
			</form>
			
			
			<?php if(isset($msg)){echo $msg;}?>			
		</div>
	</div>
</div>
<?php require_once("footer.php");?>	