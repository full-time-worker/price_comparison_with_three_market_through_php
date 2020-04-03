
<?php require_once("header.php");?>
<style>
	/* upload image custom css */
	
	.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);

}
input#uploadFile1 {
    padding: 24px 3px;
}
input#uploadFile2 {
    padding: 24px 3px;
}
input#uploadFile3 {
    padding: 24px 3px;
}
</style>
<?php
	
	try {
		$conn = new PDO("mysql:host=localhost;dbname=market;","root","");
		$p_add = "INSERT INTO offer (mr1,mr2,mr3) VALUES (?,?,?) ";
		$add_data = $conn->prepare($p_add);		
		
		// CHECK ROW 
		$c_r = "SELECT * FROM offer";
		$check_row = $conn->prepare($c_r);	
		$check_row->execute();
		$row = $check_row->rowCount();
		$check_row = null;
	}
	
	catch (Exception $e) {
		error_log($e->getMessage());
	}	
	
?>

<!--- add User -->
<?php
	spl_autoload_register(function($classes){
		require_once('class/'. $classes .'.php');
		
	});
	$admin = new Admin();
	if (isset($_POST['post'])) {
		$data = $_POST;
		$admin->addPost($data);
	}
?>
<div class="container">
	<div class="row">
		
		<div class="col-md-8 offset-md-4 mt-5">
			<div class="alert alert-info alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Info!</strong> This alert box could indicate a neutral informative change or action.
			</div> 
			<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
				
		
				<div class="input-group my-4">
					<div class="input-group-prepend" style=" margin-right: -50px;">
						<span class="input-group-text" id="inputGroupFileAddon01"></span>
					</div>
			   
						<div class="fileUpload">
						<span class="material-icons" style="font-size: 20px; margin: 5px 6px 2px 0px; ">
							perm_media
						</span>
							<input id="uploadBtn1" type="file" class="upload"  name="mr1" />
						</div>
						<input id="uploadFile1" placeholder="Choose File" disabled="disabled" class="form-control" />
				</div>

				<div class="input-group my-4">
					<div class="input-group-prepend" style=" margin-right: -50px;">
						<span class="input-group-text" id="inputGroupFileAddon01"></span>
					</div>
			   
						<div class="fileUpload">
						<span class="material-icons" style="font-size: 20px; margin: 5px 6px 2px 0px; ">
							perm_media
						</span>
							<input id="uploadBtn2" type="file" class="upload"  name="mr2" />
						</div>
						<input id="uploadFile2" placeholder="Choose File" disabled="disabled" class="form-control" />
				</div>
				<div class="input-group my-4">
					<div class="input-group-prepend" style=" margin-right: -50px;">
						<span class="input-group-text" id="inputGroupFileAddon01"></span>
					</div>
			   
						<div class="fileUpload">
						<span class="material-icons" style="font-size: 20px; margin: 5px 6px 2px 0px; ">
							perm_media
						</span>
							<input id="uploadBtn3" type="file" class="upload"  name="mr3" />
						</div>
						<input id="uploadFile3" placeholder="Choose File" disabled="disabled" class="form-control" />
				</div>
				<div class="form-group my-4">
					<button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="add_offer">ADD OFFER</button>
				</div>
				
			</form>
			<?php
				
				if(isset($_REQUEST["add_offer"])){
					
					if($row == 1){ ?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Delete</strong> your old Offer Post
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php }else{
						
						$mr1 = $_FILES["mr1"]["name"];
						$mr2 = $_FILES["mr2"]["name"];
						$mr3 = $_FILES['mr3']["name"];
						
						if($add_data->execute(array($mr1,$mr2,$mr3))){?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Offer</strong> add successfully
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php }else{
							echo "wrong";
						}
						move_uploaded_file($_FILES['mr1']["tmp_name"],"p_img/".$_FILES['mr1']['name']);
						move_uploaded_file($_FILES['mr2']["tmp_name"],"p_img/".$_FILES['mr2']['name']);
						move_uploaded_file($_FILES['mr3']["tmp_name"],"p_img/".$_FILES['mr3']['name']);
					}
				}
			?>
		</div>
	</div>
</div>	
<?php require_once("footer.php");?>	



