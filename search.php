<?php
spl_autoload_register(function ($classes) {
    require_once ('admin/class/' . $classes . '.php');
});
if (!isset($_REQUEST['searchProduct'])) {
    header("location:index.php");
}

?>
<?php

include "header.php";
?>

<style>

	span#productSelected {
		width: 15px;
		font-size: 10px;
		transform: translate(43px, -21px);
		background: #27a1a1;
		border-radius: 100%;
		color: white;
		height: 15px;
		padding-left: 3px;
	}
</style>
<?php

include 'menu.php';

?>


<!--======= SUB BANNER =========-->


<!-- Content -->
<div id="content">

	<!-- Popular Products -->
	<section class="shop-page padding-top-100 padding-bottom-100">
		<div class="container">
			<div class="title_1"><h3>OUR PRODUCTS</h3></div>
			<!-- Popular Item Slide -->
			<div class="papular-block row">

				<?php

if (isset($_REQUEST['searchProduct'])) {
    $search = $_REQUEST['search_text'];
    $search = preg_replace('/[\s]+/mu', ' ', $search);
    $search = trim($search);

    $query = "select * from post WHERE post_title LIKE '%$search%'";
    $admin = new Admin();
    $output = $admin->readmore($query);

}
if (mysqli_num_rows($output) > 0) {
    while ($op = mysqli_fetch_assoc($output)) {
        ?>

						<!-- Item -->
						<div class="col-lg-2 col-md-4 col-12">
							<div class="item">
								<!-- Item img -->
								<div class="item-img"> <img style="object-fit:contain" class="img-1 img-fluid" src="<?php echo "upload/" . $op['post_img']; ?>" alt="" > <img class="img-2 img-fluid" style="object-fit: contain;" src="<?php echo "upload/" . $op['post_img']; ?>" alt="" >
									<!-- Overlay -->
									<div class="overlay">
										<div class="position-center-center">
											<div class="inn">
												<a href="<?php echo "upload/" . $op['post_img']; ?>" data-lighter><i class="icon-eye"></i></a>
												<span class="boxtrack icon1 icon " ><i class="icon-basket " id="c1"></i></span>
												<span class="boxtrack icon2 " ><i class="fas fa-check"></i></span>
												<div class="fhidden" hidden> <?php echo $op['post_id']; ?> </div>
											</div>
										</div>
									</div>
								</div>
								<!-- Item Name -->
								<div class="item-name"> <a href="#." style="font-size:17px;"> <?php echo $op['post_title']; ?> </a>
								</div>

								<!-- Price -->
							</div>
						</div>


						<?php
}
} else {
    echo "<h2>Product Not Found</h2>";
}?>

				<script src="//code.tidio.co/telqh6ju1ju9uai0ny2gji48xih5xlvs.js" async></script>

			</div>
		</div>
	</section>



		<?php
include 'footer.php';

?>