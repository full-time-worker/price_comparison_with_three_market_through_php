
<?php
	session_start();
	
	
	if(isset($_REQUEST['checkdata'])){
		$array= $_REQUEST['checkdata'];
		$_SESSION['array']= $array;
		
		$data ="";
		for($x=0; $x<count($array); $x++){
			
			if($x == count($array)-1){
				$data .= $array[$x];
				}else{
				$data .= $array[$x].',';
			}
		}
		
		
		// sql connection 
		spl_autoload_register(function($classes){
			require_once('admin/class/'. $classes .'.php');
		});
		
		$admin = new Admin;
		$query = "select * from post where post_id in ($data)";
		$output = $admin->readmore($query);
		
		while($op= mysqli_fetch_assoc($output)){ ?>
		
		<!--some markup start here-->
		<li>
			<style>
				.del{
				
				height: 3rem;
				background: #2d3a4b;
				border: none;
				color: white!important;
				font-size: 1.3rem;
				padding: 0.6rem 1rem;
				cursor: pointer;
				}
			</style>
			<div class='media-left'>
				<div class='cart-img'> <a href='#'> <img class='media-object img-responsive' src='upload/<?php if(isset($op['post_img'])){echo $op['post_img'];} ?>' alt='product'> </a> </div>
			</div>
			<div class='media-body'>
				<h6 class='media-heading' style='margin-top:8px;'><?php if(isset($op['post_title'])){echo $op['post_title'];} ?></h6>
			</div>
		</li> 
		
		
		
		<!-- some markup end here-->
		<?php
		}
	}
?>

<script>
	document.querySelector(".btnOurFoot").addEventListener("click",del)
	del.addEventListener("click",function(){
		alert("hi")
	});
</script>


